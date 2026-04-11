<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Login;
use App\Livewire\Admin\Profile;
use App\Livewire\Admin\Setting;
use App\Livewire\Admin\Blog;
use App\Livewire\Admin\BlogCategory;
use App\Livewire\Admin\Contactus;
use App\Livewire\Admin\Contribution;
use App\Livewire\Admin\Pagemanagement;
use App\Livewire\Admin\PressRelease;
use App\Livewire\Admin\Service;
use App\Livewire\Admin\Subscription;
use Illuminate\Support\Facades\Route;

Route::prefix(env("ADMIN_PREFIX"))->group(function () {
    Route::get("/login",Login::class)->name("admin.login");
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/dashboard',Dashboard::class)->name('admin.dashboard');

        //pagemanagement
        Route::get('/page-management',Pagemanagement::class)->name('admin.pagemanagement');

        //Contactus
        Route::get("/contactus",Contactus::class)->name("admin.contactus");

        //Subscriptions
        Route::get("/subscription",Subscription::class)->name("admin.subscription");

        //Media Coverage Category
        Route::get("/media-category",BlogCategory::class)->name("admin.mediacategory");

        //Media Coverage
        Route::get("/media-coverage",Blog::class)->name("admin.mediacoverage");

        //Press Release
        Route::get("/press-release",PressRelease::class)->name("admin.pressrelease");

        //Service
        Route::get("/building",Service::class)->name("admin.building");

        //Contrinution
        Route::get("/contribution",Contribution::class)->name("admin.contribution");

        //Profile
        Route::get('/profile',Profile::class)->name('admin.profile');

        //Settings
        Route::get('/setting',Setting::class)->name('admin.setting');

        //logout
        Route::get('/logout', [Profile::class, 'logout'])->name('admin.logout');
    });
});