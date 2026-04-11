<?php

namespace App\Livewire\Web;

use Livewire\Component;

class Logo extends Component
{
    public function render()
    {
        return view('livewire.web.logo')->extends("web.layouts.master")->section("content");
    }
}
