<?php

namespace App\Livewire\Web;

use App\Models\PressRelease;
use Livewire\Component;

class PressReleaseLanding extends Component
{
    public $press_release;

    public function mount($slug)
    {
        $this->press_release=PressRelease::where("status",1)->where("slug",$slug)->first();
        abort_if(!$this->press_release,"404");
    }

    public function render()
    {
        return view('livewire.web.press-release-landing')->extends("web.layouts.master")->section("content");
    }
}
