<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Seo;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Building;
use App\Models\Social;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['admin.auth.master','livewire.admin.profile','admin.layouts.footer','admin.layouts.sidebar','admin.layouts.master','admin.layouts.header','admin.layouts.footer','web.layouts.master','livewire.web.contactus','livewire.web.building','web.layouts.footer','web.layouts.header','web.seo.custom','web.seo.metadetails'], function ($view) {
            $setting = Setting::first();
            $immune_scoring=Building::where("status",1)->get(); 
            $getservice=Building::where("status",1)->first(); 
            $seo = Seo::first();  
            $social = Social::first();  
            $image=Auth::guard("admin")->check()?Auth::guard("admin")->user()->image:""; 
            $ipaddress = '';
            if (isset($_SERVER['HTTP_CLIENT_IP']))
                $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
            else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
            else if (isset($_SERVER['HTTP_X_FORWARDED']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
            else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
            else if (isset($_SERVER['HTTP_FORWARDED']))
                $ipaddress = $_SERVER['HTTP_FORWARDED'];
            else if (isset($_SERVER['REMOTE_ADDR']))
                $ipaddress = $_SERVER['REMOTE_ADDR'];
            else
                $ipaddress = 'UNKNOWN';
            $view->with(compact('setting','ipaddress','image','seo','social','immune_scoring','getservice'));
        });
    }
}
