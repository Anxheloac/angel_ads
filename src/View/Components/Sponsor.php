<?php

namespace Anxheloac\AngelAds\View\Components;

use Anxheloac\AngelAds\Models\Sponsor as AngelSponsor;
use Illuminate\View\Component;

class Sponsor extends Component
{
    public $sponsor;

    public function __construct($sponsor = null)
    {
        if(!is_null($sponsor)){
            $this->sponsor = $sponsor;
        } else {
            $this->sponsor = AngelSponsor::all()->random(1)->first();
        }
        
    }

    public function render()
    {
        return view('angel_ads::components.sponsor');
    }
}