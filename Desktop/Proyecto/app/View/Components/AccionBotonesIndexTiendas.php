<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AccionBotonesIndexTiendas extends Component
{
    public $editRoute;
    public $deleteRoute;

    public function __construct($editRoute, $deleteRoute)
    {
        $this->editRoute = $editRoute;
        $this->deleteRoute = $deleteRoute;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.accion-botones-index-tiendas');
    }
}
