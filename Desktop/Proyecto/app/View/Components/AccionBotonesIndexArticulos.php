<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AccionBotonesIndexArticulos extends Component
{
    public $editRoute;
    public $deleteRoute;

    public function __construct($editRoute, $deleteRoute)
    {
        $this->editRoute = $editRoute;
        $this->deleteRoute = $deleteRoute;
    }

    public function render(): View|Closure|string
    {
        return view('components.accion-botones-index-articulos');
    }
}
