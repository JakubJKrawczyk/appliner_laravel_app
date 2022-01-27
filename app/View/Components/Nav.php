<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Nav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
     //public $content;
     public $logo;
    public function __construct($logo)
    {
      $this->logo = $logo;
    //  $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav');
    }
}
