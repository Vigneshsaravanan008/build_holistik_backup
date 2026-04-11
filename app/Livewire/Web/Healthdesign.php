<?php

namespace App\Livewire\Web;

use Livewire\Component;

class Healthdesign extends Component
{
    public function render()
    {
        return view('livewire.web.healthdesign')->extends("web.layouts.master")->section("content");
    }
}
