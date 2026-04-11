<?php

namespace App\Livewire\Web;

use Livewire\Component;

class ImmuneScoring extends Component
{
    public function render()
    {
        return view('livewire.web.immune-scoring')->extends("web.layouts.master")->section("content");
    }
}
