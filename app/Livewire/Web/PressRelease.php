<?php

namespace App\Livewire\Web;

use App\Models\PressRelease as ModelsPressRelease;
use Livewire\Component;

class PressRelease extends Component
{
    public $press_releases,$total_press_releases=6,$load_more=true;

    public function render()
    {
        $this->press_releases=ModelsPressRelease::where("status",1)->take($this->total_press_releases)->get();
        $this->load_more=($this->total_press_releases<=count($this->press_releases))?true:false;
        return view('livewire.web.press-release')->extends("web.layouts.master")->section("content");
    }

    public function loadmore()
    {
        $this->total_press_releases+=3;
    }
}
