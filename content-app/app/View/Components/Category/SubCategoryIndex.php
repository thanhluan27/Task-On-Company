<?php

namespace App\View\Components\Category;

use Illuminate\View\Component;

class SubCategoryIndex extends Component
{
    public $category;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($category)
    {
        $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.category.sub-category-index', ['category' => $this->category]);
    }
}
