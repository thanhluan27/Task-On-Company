<?php

namespace App\View\Components\Post\Form;

use Illuminate\View\Component;

class AddForm extends Component
{
    public $categories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($categories)
    {
        $this->categories = $categories;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post.form.add-form', ['categories' => $this->categories]);
    }
}
