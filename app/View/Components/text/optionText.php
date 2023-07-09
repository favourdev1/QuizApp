<?php

namespace App\View\Components\text;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class optionText extends Component
{
    /**
     * Create a new component instance.
     */

     public $optionname;
    public function __construct($optionname)
    {
        $this->optionname = $optionname;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.text.option-text');
    }
}
