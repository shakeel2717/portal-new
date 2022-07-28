<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $type;
    public $placeholder;
    public $attribute;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $type = "text", $placeholder, $attribute = "")
    {
        $this->name = $name;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->attribute = $attribute;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
