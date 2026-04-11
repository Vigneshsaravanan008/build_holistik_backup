<?php

namespace App\Livewire\Web;

use Livewire\Component;

class PressContact extends Component
{
    public function render()
    {
        return view('livewire.web.press-contact')->extends("web.layouts.master")->section("content");
    }
}
