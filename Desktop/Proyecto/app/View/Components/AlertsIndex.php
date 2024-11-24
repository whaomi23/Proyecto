<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AlertsIndex extends Component
{
    public $type;
    public $message;

    public function __construct($type = 'info', $message = null)
    {
        $this->type = $type;
        $this->message = $message;
    }

    public function render(): View|Closure|string
    {
        return view('components.alerts-index');
    }
}
