<?php

namespace App\View\Components;

use App\View\Components\AbstractLayout;
use Illuminate\Contracts\View\View;
use Closure;

class AuthLayout extends AbstractLayout
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.auth');
    }
}
