<?php

namespace App\Livewire\Admin;

use App\Models\Building;
use App\Models\Contactus;
use App\Models\MediaCoverage;
use App\Models\PressRelease;
use Livewire\Component;

class Dashboard extends Component
{
    public $press_release,$media_coverage,$immune,$contact_us;

    public function render()
    {
        $this->media_coverage=MediaCoverage::count();
        $this->press_release=PressRelease::count();
        $this->press_release=PressRelease::count();
        $this->contact_us=Contactus::orderBy("id","desc")->take(10)->get();
        return view('livewire.admin.dashboard')->extends('admin.layouts.master')->section('content');
    }
}
