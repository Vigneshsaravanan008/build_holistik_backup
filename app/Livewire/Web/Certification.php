<?php

namespace App\Livewire\Web;

use Livewire\Component;

class Certification extends Component
{
    public function render()
    {
        return view('livewire.web.certification')->extends("web.layouts.master")->section("content");
    }
}
