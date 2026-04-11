<?php

namespace App\Livewire\Web;

use App\Models\MediaCoverage;
use App\Models\PageManagement;
use App\Models\PressRelease;
use App\Models\Social;
use Livewire\Component;

class Home extends Component
{
    public $page,$social,$press_releases,$media_coverages;

    public function render()
    {
        $this->page=PageManagement::where("url","/")->first();
        $this->press_releases=PressRelease::where("status",1)->take(2)->get();
        $this->media_coverages=MediaCoverage::where("status",1)->take(4)->get();
        $this->social=Social::first();
        return view('livewire.web.home')->extends("web.layouts.master")->section("content");
    }
}
