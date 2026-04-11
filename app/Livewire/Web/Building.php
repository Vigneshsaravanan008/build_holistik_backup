<?php

namespace App\Livewire\Web;

use App\Models\Building as ModelsBuilding;
use Livewire\Component;

class Building extends Component
{

    public $building;

    public function mount($slug)
    {
        $this->building=ModelsBuilding::where("slug",$slug)->first();
        abort_if(!$this->building,404);
    }

    public function render()
    {
        return view('livewire.web.building')->extends("web.layouts.master")->section("content");
    }
}
