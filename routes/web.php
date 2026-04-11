<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use App\Livewire\Web\About;
use App\Livewire\Web\Accredited;
use App\Livewire\Web\Assessor;
use App\Livewire\Web\Building;
use App\Livewire\Web\Certification;
use App\Livewire\Web\Contactus;
use App\Livewire\Web\Contribution;
use App\Livewire\Web\Faq;
use App\Livewire\Web\Healthdesign;
use App\Livewire\Web\Home;
use App\Livewire\Web\ImmuneScoring;
use App\Livewire\Web\Logo;
use App\Livewire\Web\MediaCoverage;
use App\Livewire\Web\PressContact;
use App\Livewire\Web\PressRelease;
use App\Livewire\Web\PressReleaseLanding;
use App\Models\MediaCoverage as ModelsMediaCoverage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/optimize-clear', function () {
    Artisan::call('optimize:clear');
    return 'Optimize clear command executed.';
});

Route::get("/",Home::class)->name("web.home");

//Certification
Route::get("/certification",Certification::class)->name("web.certification");

//Immune Scoring Index
Route::get("/immune-scoring-index",ImmuneScoring::class)->name("web.immune-scoring");

//Immunue Scoring Index
Route::get("/services/{slug}",Building::class)->name("web.building");

Route::get("/services",function(){
    return view("web.layouts.service");
})->name("web.service");

Route::get("/media/{slug}",function($slug){
    $media_coverage=ModelsMediaCoverage::where("slug",$slug)->firstorFail();
    return view("web.layouts.media_coverage",compact("media_coverage"));
})->name("web.media_coverage");
//Become an Immune Assessor
Route::get("/projects",Assessor::class)->name("web.projects");

Route::get("/resources/clients",function(){
    return view("web.layouts.client");
})->name("web.clients");

//Contributions
Route::get("/become-a-contributor/contributors",Contribution::class)->name("web.contribution");

//Resources
Route::get("/resources/events",Healthdesign::class)->name("web.heathdesign");
Route::get("/resources/accredited-buildings",Accredited::class)->name("web.accredited");
Route::get("/faq",Faq::class)->name("web.faq");
Route::get("/associate-partners",Logo::class)->name("web.logo");

//Aboutus
Route::get("/about/about-hdbi",About::class)->name("web.aboutus");
Route::get("/news/categories/media-coverage",MediaCoverage::class)->name("web.media-coverage");
Route::get("/news/categories/press-releases",PressRelease::class)->name("web.press-releases");
Route::get("/news/posts/{slug}",PressReleaseLanding::class)->name("web.press-releases-landing");
Route::get("/about/press-contacts",PressContact::class)->name("web.press-contacts");
Route::get("/contact-us",Contactus::class)->name("web.contactus");

//Newsletter
Route::match(['get', 'post'], 'newsletter', [Controller::class, 'newsletter'])->name('newsletter');

Route::get("/thank-you",function(){
    return view("web.layouts.thank-you");
});

//sitemap
Route::get("/sitemap.xml",[Controller::class,"sitemap"]);