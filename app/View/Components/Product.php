<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use App\Models\Product as ProductModel;

class Product extends Component
{
    public $products;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->products = ProductModel::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|\Closure|string
    {
        return view('components.product', ['products' => $this->products]);
    }
}
