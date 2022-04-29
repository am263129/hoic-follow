<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Layout extends Component
{
    public $title;
    public $category;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $category = "")
    {
        //
        $this->title = $title;
        $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.layout');
    }
}
