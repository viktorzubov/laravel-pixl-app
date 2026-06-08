<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArtistsToFollow extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $artists = [
            ['name' => 'michael_illustrations', 'image' => '/images/michael.png', 'alt' => 'Avatar of Michael'],
            ['name' => 'alessia_arts', 'image' => '/images/alessia.png', 'alt' => 'Avatar of Alessia'],
        ];

        return view('components.artists-to-follow', ['artists' => $artists]);
    }
}
