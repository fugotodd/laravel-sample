<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductList extends Component
{
    public $list = [
        [
            'id' => 1,
            'cover' => '/assets/images/products/1.jpeg',
            'name' => '水果1',
            'price' => 1000
        ],
        [
            'id' => 2,
            'cover' => '/assets/images/products/2.jpeg',
            'name' => '水果2',
            'price' => 200
        ]
    ];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    protected function loadData()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-list');
    }
}
