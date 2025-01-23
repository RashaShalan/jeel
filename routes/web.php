<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\dashboard\Analytics;
use App\Http\Controllers\admin\authentications\LoginBasic;
use App\Http\Controllers\admin\authentications\RegisterBasic;
use App\Http\Controllers\admin\authentications\ForgotPasswordBasic;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\SocialController;
use App\Http\Controllers\admin\translateController;
use App\Http\Controllers\admin\CampaignController;
use App\Http\Controllers\admin\faqsController;
use App\Http\Controllers\admin\jeel_questionsController;

Route::prefix('{locale?}')
  ->middleware('setLocale')
  ->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/Aboutus', [HomeController::class, 'about'])->name('Aboutus');
    Route::get('/Download', [HomeController::class, 'download_app'])->name('Download');
    Route::get('/FAQS', [HomeController::class, 'faq_question'])->name('FAQ');
    Route::get('/Jeel-questions', [HomeController::class, 'questions'])->name('jeelQuestions');
    Route::get('/Contact-us', [HomeController::class, 'contact_us'])->name('Contact_us');
    Route::post('/send_contact', [HomeController::class, 'send_contact_us'])->name('send_contact');
    Route::get('/Terms-and-conditions', [HomeController::class, 'terms_conditions'])->name('Terms-and-conditions');
    Route::get('/campaign', [HomeController::class, 'campagin'])->name('campagin');
    Route::post('/send_contactCampagin', [HomeController::class, 'contact_usCamagin'])->name('send_contact_campagin');
    Route::post('/send_contactCampagin', [HomeController::class, 'contact_usCamagin'])->name('send_contact_campagin');
    Route::get('/Disclaimer_of_Liability', [HomeController::class, 'Liability'])->name('Disclaimer_of_Liability');
    Route::get('/Parental_Consent_Notice', [HomeController::class, 'Parental_Consent'])->name('Parental_Consent_Notice');
    Route::get('/Intellectual_Property_Notice', [HomeController::class, 'Intellectual_Property'])->name('Intellectual_Property_Notice');


    /**
     * Dasnboard
     */
    Route::get('dashboard/login', [LoginBasic::class, 'index'])->name('dashboard.login');
    Route::post('dashboard/LogmeIn', [LoginBasic::class, 'Login'])->name('dashboard.login.logme');

    Route::group(
      [
        'prefix' => '/dashboard',
        'middleware' => ['auth', 'dashboard'],
      ],
      function () {
        Route::get('/', [Analytics::class, 'index'])->name('dashboard-analytics');
        /**Slider */
        Route::any('/slider', [SliderController::class, 'index']);

        Route::any('/slider/create', [SliderController::class, 'create']);

        Route::any('/slider/add', [SliderController::class, 'store']);
        Route::any('/slider/get', [SliderController::class, 'show']);
        Route::get('/slider/edit', [SliderController::class, 'edit']);

        Route::post('/slider/update', [SliderController::class, 'update']);
        Route::any('/slider/delete', [SliderController::class, 'destroy']);
        Route::any('/slider/getData', [SliderController::class, 'getDataInfo'])->name('slider.getData');
        /**Socail */
        Route::any('/social', [SocialController::class, 'index']);
        Route::any('/social/add', [SocialController::class, 'store']);
        /**Translate */
        Route::any('/translate', [translateController::class, 'index'])->name('translate.index');

        Route::any('/translate/create', [translateController::class, 'create']);

        Route::any('/translate/add', [translateController::class, 'store']);
        Route::any('/translate/get', [translateController::class, 'show']);
        Route::get('/translate/edit', [translateController::class, 'edit']);

        Route::post('/translate/update', [translateController::class, 'update']);
        Route::any('/translate/delete', [translateController::class, 'destroy']);
        Route::any('/translate/getData', [translateController::class, 'getDataInfo'])->name('translate.getData');

        /**Campagin */
        Route::any('/campaign', [CampaignController::class, 'index']);

        Route::any('/campaign/create', [CampaignController::class, 'create']);

        Route::any('/campaign/add', [CampaignController::class, 'store']);
        Route::any('/campaign/get', [CampaignController::class, 'show']);
        Route::get('/campaign/edit', [CampaignController::class, 'edit']);

        Route::post('/campaign/update', [CampaignController::class, 'update']);
        Route::any('/campaign/delete', [CampaignController::class, 'destroy']);
        Route::any('/campaign/getData', [CampaignController::class, 'getDataInfo'])->name('campaign.getData');

        /**faqs */
        Route::any('/faq', [faqsController::class, 'index']);

        Route::any('/faq/create', [faqsController::class, 'create']);

        Route::any('/faq/add', [faqsController::class, 'store']);
        Route::any('/faq/get', [faqsController::class, 'show']);
        Route::get('/faq/edit', [faqsController::class, 'edit']);

        Route::post('/faq/update', [faqsController::class, 'update']);
        Route::any('/faq/delete', [faqsController::class, 'destroy']);
        Route::any('/faq/getData', [faqsController::class, 'getDataInfo'])->name('faq.getData');

        /**Jeel Questions */
        Route::any('/jeel_questions', [jeel_questionsController::class, 'index']);

        Route::any('/jeel_questions/create', [jeel_questionsController::class, 'create']);

        Route::any('/jeel_questions/add', [jeel_questionsController::class, 'store']);
        Route::any('/jeel_questions/get', [jeel_questionsController::class, 'show']);
        Route::get('/jeel_questions/edit', [jeel_questionsController::class, 'edit']);

        Route::post('/jeel_questions/update', [jeel_questionsController::class, 'update']);
        Route::any('/jeel_questions/delete', [jeel_questionsController::class, 'destroy']);
        Route::any('/jeel_questions/getData', [jeel_questionsController::class, 'getDataInfo'])->name('jeel_questions.getData');
      }
    );

    /*  Route::get('/dashboard/auth/register-basic', [RegisterBasic::class, 'index'])->name(
      'dashboard.auth-register-basic'
    );
    Route::get('/dashboard/auth/forgot-password-basic', [ForgotPasswordBasic::class, 'index'])->name(
      'dashboard.auth-reset-password-basic'
    ); */
  });

Route::get('language/{locale}', function ($locale) {
  app()->setLocale($locale);
  session()->put('locale', $locale);
  return redirect()->back();
});
