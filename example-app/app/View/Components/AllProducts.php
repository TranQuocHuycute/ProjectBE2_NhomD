<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\product;

class AllProducts extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // lấy all product
        $products = Product::all();
        return view('components.all-products') -> with('products', $products);//with gửi kèm đi
    }                                          //-> with ()
}
