<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostItem extends Component
{
    public $title;
    public $date;
    public $comment;
    public $like;
    public $desc;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $date, $comment, $like, $desc,)
    {
        $this->title = $title;
        $this->date = $date;
        $this->comment = $comment;
        $this->like = $like;
        $this->desc = $desc;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post-item');
    }
}
