<?php

namespace App\Livewire\Web;

use Livewire\Component;

class Assessor extends Component
{
    public function render()
    {
        return view('livewire.web.assessor')->extends("web.layouts.master")->section("content");
    }
}
