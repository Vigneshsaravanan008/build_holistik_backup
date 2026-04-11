<?php

namespace App\Livewire\Web;

use App\Models\MediaCoverage as ModelsMediaCoverage;
use Livewire\Component;

class MediaCoverage extends Component
{
    public $total_media_coverages=6,$load_more=true,$media_coverages;
    
    public function render()
    {
        $this->media_coverages=ModelsMediaCoverage::where("status",1)->take($this->total_media_coverages)->get();
        $this->load_more=($this->total_media_coverages<=count($this->media_coverages))?true:false;
        return view('livewire.web.media-coverage')->extends("web.layouts.master")->section("content");
    }

    public function loadmore()
    {
        $this->total_media_coverages+=3;
    }
}
