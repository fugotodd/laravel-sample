<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class ProductList extends Component
{
    public $list = [];

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $page;

    /**
     * @var null|string
     */
    public $search;

    /**
     * @var null
     */
    public $sort;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pageSize = 8, $page = 1, $search = null, $sort = null)
    {
        $this->pageSize = $pageSize;
        $this->page = $page;
        $this->search = $search;
        $this->sort = $sort;
        $this->loadData();
    }

    protected function loadData()
    {
        $qb = Product::query();
        if (!empty($this->search))
        {
            $qb->where('title', 'LIKE', '%'.$this->search.'%');
        }
        switch ($this->sort)
        {
            case 'asc':
                $qb->orderBy('price');
                break;
            case 'desc':
                $qb->orderBy('price', 'desc');
                break;
        }
        $this->list = $qb->paginate($this->pageSize);
        $this->list->appends([
            'search' => $this->search,
            'sort' => $this->sort
        ]);
    }

    /**
     * 檢查傳入排序值是否與目前排序值相符
     * @param $sort
     * @return bool
     */
    public function checkSort($sort)
    {
        return $this->sort == $sort;
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
