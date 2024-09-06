<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TinyMCEEditor extends Component
{
    public string $name;
    public string $value;

    /**
     * Create a new component instance.
     */
    public function __construct(string $name, string $value = '')
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tiny-m-c-e-editor');
    }
}
