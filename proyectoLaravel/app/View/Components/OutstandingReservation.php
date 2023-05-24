<?php

namespace App\View\Components;

use App\Models\Reservation;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OutstandingReservation extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(  
        public $reservation
        ){ 

            // $name = Reservation::find( $reservation->id);
        }
       

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.outstanding-reservation');
    }
}
