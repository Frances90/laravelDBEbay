<?php

namespace App\View\Components;

use App\Models\Listing;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ListingCard extends Component
{
    public $listing;
    /**
     * Create a new component instance.
     */
    public function __construct(Listing $listing)
    {
        $this->listing = $listing;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.listing-card');
    }
}
