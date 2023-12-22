<?php

namespace App\View\Components\Post\Form;

use Illuminate\View\Component;

class EditForm extends Component
{
    public $posts;
    public $categories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($posts, $categories)
    {
        $this->posts = $posts;
        $this->categories = $categories;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post.form.edit-form', ['posts' => $this->posts, 'categories' => $this->categories]);
    }
}
