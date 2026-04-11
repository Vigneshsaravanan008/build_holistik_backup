<?php

namespace App\Livewire\Web;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.web.about')->extends("web.layouts.master")->section("content");
    }
}
