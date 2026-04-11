<?php

namespace App\Livewire\Web;

use App\Models\Contribution as ModelsContribution;
use Livewire\Component;

class Contribution extends Component
{

    public function render()
    {
        $contributions=ModelsContribution::all();
        return view('livewire.web.contribution',compact("contributions"))->extends("web.layouts.master")->section("content");
    }
}
