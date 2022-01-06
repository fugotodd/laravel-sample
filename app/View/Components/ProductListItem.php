<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductListItem extends Component
{
    public $name;
    public $cover;
    public $price;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $cover, $price)
    {
        //
        $this->name = $name;
        $this->cover = $cover;
        $this->price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-list-item');
    }
}
