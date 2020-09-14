<?php

namespace App\Http\Middleware;

use Closure;

class OldSlug
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $slug = $request->route()->event;
        $oldSlug = Oldslug::whereSlug($slug)->first();
        
        if (!is_null($oldSlug)) {
            $eventnew = Event::find($oldSlug->event_id);

            $newUrl = URL::to('event', $eventnew->slug);

            if($slug == $oldSlug->slug) {
                return redirect($newUrl, 301);
            }
        } else {
            return $next($request);
        }
    }
}
