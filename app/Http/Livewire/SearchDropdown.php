<?php

namespace App\Http\Livewire;

use App\Category;
use App\Product;
use Livewire\Component;
use Livewire\WithPagination;

class SearchDropdown extends Component
{

    public $search;
    public $products;
    public $cats;
    public $class;
    // protected $queryString = ['search'];


    public function render()
    {
        $search = '%' . $this->search . '%';
        // $search = '%' . $this->search . '%';
        //$this->products = Product::where('name', 'like', $search)->get();
        return view('livewire.search-dropdown', [
            'products' => Product::where('name', 'like', $search)
                ->orWhere('searchable', 'like', $search)
                ->get(),
            'cats'     => Category::where('name', 'like', $search)->get()
            //'products' => Product::where('name', $this->search)->get()
        ]);
    }

    public function getData()
    {
        $search = '%' . $this->search . '%';
        // $search = '%' . $this->search . '%';
        $this->products = Product::where('name', 'like', $search)
            ->orWhere('searchable', 'like', $search)
            ->get();

        $this->cats     = Category::where('name', 'like', $search)->get();
        $this->class = "open";
        return view('livewire.search-dropdown');
    }
}
