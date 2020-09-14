<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
         if ($exception instanceof ThrottleRequestsException) {
           /* return response()->json([
                'data' => 'Resource not found'
            ], 429);*/

            return redirect()->route('home');
        }

        /* if ($exception instanceof InvalidFilterQuery) {
                   return response()->json([
                       'data' => 'Resource not found'
                   ], 404);
         }*/

        /* if ($exception instanceof MethodNotAllowedHttpException) {
            return response()->json([
                'data' => 'sorry this method is not Allowed from Browser Directly'
            ], 404);
        }*/
        return parent::render($request, $exception);
    }
}
