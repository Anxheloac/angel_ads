<?php

namespace Anxheloac\AngelAds\View\Components;
use Illuminate\View\Component;

class Footer extends Component
{
    public $image;

    public function __construct($image)
    {
        $this->image = '';
    }

    public function render()
    {
        return view('angel_ads::components.footer');
    }
}