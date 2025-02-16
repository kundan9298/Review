<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjexController;
use App\Http\Controllers\Magazine;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
// admin 
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Response;

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
use Illuminate\Support\Facades\Artisan;
Route::get('/robots.txt', function () {
    $content = "User-agent: *\n";
    $content .= "Allow: /\n";
    
    // Disallow admin panel
    $content .= "Disallow: /admin/\n";
    $content .= "Disallow: /dashboard/\n";

    // Add sitemap
    $content .= "Sitemap: " . url('/sitemap.xml') . "\n";

    return Response::make($content, 200, ['Content-Type' => 'text/plain']);
});

Route::get('/clear-cache', function () {
    Artisan::call('config:clear');
    return 'Configuration cache cleared.';
});

// Route::get('/', function () { 
//     return view('welcome');
// });


// Route::get('/', function () { 


//     return view('index');
// });


// Route::get('/index2', function () { 
//     return view('index2');
// });
Route::get('/', [HomeController::class,'homePage']);
Route::get('/blog5', [CategoryController::class,'categoryPage']);


Route::get('/layout', function () { 
    return view('layout');
});



Route::post('/subscribe', [AjexController::class, 'subscribe'])->name('subscribe');



// Route::get('/check-eligibility', function(){
//     return view('advertisement/ad');
// });

Route::get('/check-eligibility',[HomeController::class, 'checkEligibility']);


Route::post('/check-eligi', [HomeController::class, 'ceSave'])->name('ceSave');




Route::get('/sitemap',[AjexController::class, 'sitemap']);
Route::get('/sitemap.xml',[AjexController::class, 'sitemap']);


Route::get('ajax-software', [AjexController::class, 'ajaxGet']);
Route::get('ajax-networking', [AjexController::class, 'ajaxNetworking']);
Route::get('ajax-latest', [AjexController::class, 'ajaxLatest']);
Route::get('ajax-cloud', [AjexController::class, 'ajaxCloud']);
Route::get('ajax-bigData', [AjexController::class, 'ajaxbigData']);
Route::get('ajax-software', [AjexController::class, 'ajaxSoftware']);


// Route::get('ajax-data', [AjexController::class,'ajaxGet']);

Route::post('/contact-us', [CategoryController::class, 'contact'])->name('contact');
// category of Technology 

Route::get('/about-us', [CategoryController::class, 'aboutUs']);
Route::get('/privacy-policy', [CategoryController::class, 'privacyPolicy']);
Route::get('/contact-us', [CategoryController::class, 'contactUs']);
Route::get('/big-data', [CategoryController::class, 'bigData'])->name('ajax.pagination');
Route::get('/big-data/{slug}', [CategoryController::class, 'bigData'])->name('ajax.pagination');

Route::get('/cloud', [CategoryController::class, 'cloud'])->name('ajax.pagination');
Route::get('/cloud/{slug}', [CategoryController::class, 'cloud'])->name('ajax.pagination');

Route::get('/iot', [CategoryController::class, 'iot'])->name('ajax.pagination');
Route::get('/iot/{slug}', [CategoryController::class, 'iot'])->name('ajax.pagination');

Route::get('/it-services', [CategoryController::class, 'itService'])->name('ajax.pagination');
Route::get('/it-services/{slug}', [CategoryController::class, 'itService'])->name('ajax.pagination');

Route::get('/mobility', [CategoryController::class, 'mobility'])->name('ajax.pagination');
Route::get('/mobility/{slug}', [CategoryController::class, 'mobility'])->name('ajax.pagination');

Route::get('/networking', [CategoryController::class, 'networking'])->name('ajax.pagination');
Route::get('/networking/{slug}', [CategoryController::class, 'networking'])->name('ajax.pagination');

Route::get('/cyber-security', [CategoryController::class, 'cyberSecurity'])->name('ajax.pagination');
Route::get('/cyber-security/{slug}', [CategoryController::class, 'cyberSecurity'])->name('ajax.pagination');

Route::get('/software', [CategoryController::class, 'software'])->name('ajax.pagination');
Route::get('/software/{slug}', [CategoryController::class, 'software'])->name('ajax.pagination');

// category of Industry 
Route::get('/food-beverage', [CategoryController::class, 'foodBeverage'])->name('ajax.pagination');
Route::get('/food-beverage/{slug}', [CategoryController::class, 'foodBeverage'])->name('ajax.pagination');

Route::get('/media-entertainment', [CategoryController::class, 'mediaEntertainment'])->name('ajax.pagination');
Route::get('/media-entertainment/{slug}', [CategoryController::class, 'mediaEntertainment'])->name('ajax.pagination');

Route::get('/education', [CategoryController::class, 'education'])->name('ajax.pagination');
Route::get('/education/{slug}', [CategoryController::class, 'education'])->name('ajax.pagination');

Route::get('/health', [CategoryController::class, 'health'])->name('ajax.pagination');
Route::get('/health/{slug}', [CategoryController::class, 'health'])->name('ajax.pagination');

Route::get('/real-estate', [CategoryController::class, 'realEstate'])->name('ajax.pagination');
Route::get('/real-estate/{slug}', [CategoryController::class, 'realEstate'])->name('ajax.pagination');

Route::get('/retail', [CategoryController::class, 'retail'])->name('ajax.pagination');
Route::get('/retail/{slug}', [CategoryController::class, 'retail'])->name('ajax.pagination');

Route::get('/banking-finance', [CategoryController::class, 'bankingFinance'])->name('ajax.pagination');
Route::get('/banking-finance/{slug}', [CategoryController::class, 'bankingFinance'])->name('ajax.pagination');

Route::get('/telecom', [CategoryController::class, 'telecom'])->name('ajax.pagination');
Route::get('/telecom/{slug}', [CategoryController::class, 'telecom'])->name('ajax.pagination');

Route::get('/legal', [CategoryController::class, 'legal'])->name('ajax.pagination');
Route::get('/legal/{slug}', [CategoryController::class, 'legal'])->name('ajax.pagination');


Route::get('/article', [CategoryController::class, 'article'])->name('ajax.pagination');
Route::get('/article/{slug}', [CategoryController::class, 'article'])->name('ajax.pagination');

Route::get('/cxos', [CategoryController::class, 'cxos'])->name('ajax.pagination');
Route::get('/cxos/{slug}', [CategoryController::class, 'cxos'])->name('ajax.pagination');

Route::get('/business', [CategoryController::class, 'business'])->name('ajax.pagination');
Route::get('/business/{slug}', [CategoryController::class, 'business'])->name('ajax.pagination');


Route::get('/startups', [CategoryController::class, 'startup'])->name('ajax.pagination');
Route::get('/startups/{slug}', [CategoryController::class, 'startup'])->name('ajax.pagination');

Route::get('/press-release', [CategoryController::class, 'press'])->name('ajax.pagination');
Route::get('/press-release/{slug}', [CategoryController::class, 'press'])->name('ajax.pagination');

Route::get('/our-clients', [Magazine::class, 'ourClients'])->name('ajax.pagination');
Route::get('/clients-speak', [Magazine::class, 'clientSpeak'])->name('ajax.pagination');





Route::get('/magazine', [Magazine::class, 'index']);
Route::get('/magazine-filter', [Magazine::class, 'filterContent']);



Route::get('/magazine/{slug}', [Magazine::class, 'issueOpen']);
Route::get('/feature/{slug}', [Magazine::class, 'featureStory']);
Route::get('/cover-story/{slug}', [Magazine::class, 'coverStory']);

Route::get('/listing/{slug}', [Magazine::class, 'profileListing']);


Route::get('/digital/{year}/{month}/{slug}', [Magazine::class, 'digitalMagazine']);
Route::get('/pdf/{slug}', [Magazine::class, 'viewPdf']);







// Admin panel

// Route::get('admin/signup', function(){
//     return view('admin/signup');
// });

Route::get('admin/login', function(){
    return view('admin/login');
});



Route::get('admin/reset-password', function(){
    return view('admin/reset-password');
});
 

Route::POST('admin/signup-form',[AdminController::class,'index']);
Route::POST('admin/login-form',[AdminController::class,'login']);

Route::middleware(['checkUserLoggedIn'])->group(function () {
    
    Route::get('admin/index',[AdminController::class,'logindex']);
    Route::get('admin/logout',[AdminController::class,'logout']);

    // technology 
    Route::get('admin/technology',[AdminController::class,'admin_tech']);
    Route::get('admin/tech-add',[AdminController::class,'tech_addData']);
    Route::POST('admin/techadd',[AdminController::class,'techsubmitdata']);
    Route::get('admin/tech_delete/{id}',[AdminController::class,'techdeletedata']);
    Route::get('admin/tech_update/{id}',[AdminController::class,'techupdateview']);
    Route::POST('admin/techupdate',[AdminController::class,'techupdatedata'])->name('tech.update');

    // Industry 
    Route::get('admin/industry',[AdminController::class,'admin_ind']);
    Route::get('admin/ind-add',[AdminController::class,'ind_addData']);
    Route::POST('admin/indadd',[AdminController::class,'indsubmitdata']);
    Route::get('admin/ind_delete/{id}',[AdminController::class,'inddeletedata']);
    Route::get('admin/ind_update/{id}',[AdminController::class,'indupdateview']);
    Route::POST('admin/indupdate',[AdminController::class,'indupdatedata'])->name('ind.update');

    // Article 
    Route::get('admin/article',[AdminController::class,'admin_article']);
    Route::get('admin/article-add',[AdminController::class,'article_addData']);
    Route::POST('admin/articleadd',[AdminController::class,'articlesubmitdata']);
    Route::get('admin/article_delete/{id}',[AdminController::class,'articledeletedata']);
    Route::get('admin/article_update/{id}',[AdminController::class,'articleupdateview']);
    Route::POST('admin/articleupdate',[AdminController::class,'articleupdatedata'])->name('article.update');
    
    
    



    // Business 
    Route::get('admin/business',[AdminController::class,'admin_business']);
    Route::get('admin/business-add',[AdminController::class,'business_addData']);
    Route::POST('admin/businessadd',[AdminController::class,'businesssubmitdata']);
    Route::get('admin/business_delete/{id}',[AdminController::class,'businessdeletedata']);
    Route::get('admin/business_update/{id}',[AdminController::class,'businessupdateview']);
    Route::POST('admin/businessupdate',[AdminController::class,'businessupdatedata'])->name('business.update');


    // Startups 
    Route::get('admin/startup',[AdminController::class,'admin_startup']);
    Route::get('admin/startup-add',[AdminController::class,'startup_addData']);
    Route::POST('admin/startupadd',[AdminController::class,'startupsubmitdata']);
    Route::get('admin/startup_delete/{id}',[AdminController::class,'startupdeletedata']);
    Route::get('admin/startup_update/{id}',[AdminController::class,'startupupdateview']);
    Route::POST('admin/startupupdate',[AdminController::class,'startupupdatedata'])->name('startup.update');
 
 
    // Magazine 
    Route::get('admin/magazine',[AdminController::class,'admin_magazine']);
    Route::get('admin/magazine-add',[AdminController::class,'magazine_addData']);
    Route::POST('admin/magazineadd',[AdminController::class,'magazinesubmitdata']);
    Route::get('admin/magazine_delete/{id}',[AdminController::class,'magazinedeletedata']);
    Route::get('admin/magazine_update/{id}',[AdminController::class,'magazineupdateview']);
    Route::POST('admin/magazineupdate',[AdminController::class,'magazineupdatedata'])->name('magazine.update');
 
    // Cover 
    Route::get('admin/cover',[AdminController::class,'admin_cover']);
    Route::get('admin/cover-add',[AdminController::class,'cover_addData']);
    Route::POST('admin/coveradd',[AdminController::class,'coversubmitdata']);
    Route::get('admin/cover_delete/{id}',[AdminController::class,'coverdeletedata']);
    Route::get('admin/cover_update/{id}',[AdminController::class,'coverupdateview']);
    Route::POST('admin/coverupdate',[AdminController::class,'coverupdatedata'])->name('cover.update');

    // Feature  
    Route::get('admin/feature',[AdminController::class,'admin_feature']);
    Route::get('admin/feature-add',[AdminController::class,'feature_addData']);
    Route::POST('admin/featureadd',[AdminController::class,'featuresubmitdata']);
    Route::get('admin/feature_delete/{id}',[AdminController::class,'featuredeletedata']);
    Route::get('admin/feature_update/{id}',[AdminController::class,'featureupdateview']);
    Route::POST('admin/featureupdate',[AdminController::class,'featureupdatedata'])->name('feature.update');


    // Testinomals  
    Route::get('admin/testimonials',[AdminController::class,'admin_testimonials']);
    Route::get('admin/testimonials-add',[AdminController::class,'testimonials_addData']);
    Route::POST('admin/testimonialsadd',[AdminController::class,'testimonialssubmitdata']);
    Route::get('admin/testimonials_delete/{id}',[AdminController::class,'testimonialsdeletedata']);
    Route::get('admin/testimonials_update/{id}',[AdminController::class,'testimonialsupdateview']);
    Route::POST('admin/testimonialsupdate',[AdminController::class,'testimonialsupdatedata'])->name('testimonials.update');
    


       //Get an Interview
   Route::get('admin/get-an-interview', [AdminController::class,'interviewsubmitdata']);
   Route::get('admin/getaninter-view/{id}',[AdminController::class,'interview_data_view']);
   
   
   
   
       //Contact Form
   Route::get('admin/contact-form', [AdminController::class,'contactform']);
   Route::get('admin/contact-form/{id}',[AdminController::class,'contactformview']);
   
   
   
   //Press Release
   Route::get('admin/press-release', [AdminController::class,'admin_press_release']);
    Route::get('admin/press-release-addData',[AdminController::class,'admin_press_addData']);
      Route::POST('admin/pressreleaseadd',[AdminController::class,'pressreleaseadd']);
   Route::get('admin/pressreleases_delete/{id}',[AdminController::class,'pressreleasedeletedata']);
   Route::get('admin/pressreleases_update/{id}',[AdminController::class,'pressreleaseupdateview']);
   Route::POST('admin/pressreleasesupdate',[AdminController::class,'pressreleaseupdatedata'])->name('pressrelease.update');


   //Video Uploads

//    Route::get('admin/video-create', [AdminController::class,'videoCreate']);
//    Route::get('admin/video-store', [AdminController::class,'videoStore']);
//    Route::get('admin/video-add', [AdminController::class,'admin_video_addData']);

   Route::get('admin/video',[AdminController::class,'admin_video']);
    Route::get('admin/video-add',[AdminController::class,'video_addData']);
    Route::POST('admin/videoadd',[AdminController::class,'videosubmitdata']);
    Route::get('admin/video_delete/{id}',[AdminController::class,'videodeletedata']);
    Route::get('admin/video_update/{id}',[AdminController::class,'videoupdateview']);
    Route::POST('admin/videoupdate',[AdminController::class,'videoupdatedata'])->name('video.update');

});

