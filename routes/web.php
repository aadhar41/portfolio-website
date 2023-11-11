<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\FeedbackSectionSettingController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\PortfolioItemController;
use App\Http\Controllers\Admin\PortfolioSectionSettingController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SkillItemController;
use App\Http\Controllers\Admin\SkillSectionSettingController;
use App\Http\Controllers\Admin\TyperTitleController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::name('frontend.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Route::get('/blog', function () {
    //     return view('frontend.blog');
    // })->name('blog');

    // Route::get('/blog-details', function () {
    //     return view('frontend.blog-details');
    // })->name('blog-details');
    
    Route::get('/portfolio', function () {
        return view('frontend.portfolio');
    })->name('portfolio');
    
    // Route::get('/portfolio-details', function () {
    //     return view('frontend.portfolio-details');
    // })->name('portfolio-details');

    // portfolio details
    Route::get('portfolio-details/{id}', [HomeController::class, 'showPortfolio'])->name('show.portfolio');

    // blog details
    Route::get('blog-details/{id}', [HomeController::class, 'showBlog'])->name('show.blog');

    // blogs page
    Route::get('blogs', [HomeController::class, 'blogs'])->name('blogs');

});


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [AdminProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [AdminProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [AdminProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

    // Hero Section Routes
    Route::resource('hero', HeroController::class);

    // Typer Title Routes
    Route::resource('typer-title', TyperTitleController::class);

    // Service Routes
    Route::resource('service', ServiceController::class);

    // About Routes
    Route::get('resume/download', [AboutController::class, 'resumeDownload'])->name('resume.download');
    Route::resource('about', AboutController::class);

    // Category Routes
    Route::resource('category', CategoryController::class);

    // Portfolio Item Routes
    Route::resource('portfolio-item', PortfolioItemController::class);

    // Portfolio Section Routes
    Route::resource('portfolio-setting', PortfolioSectionSettingController::class);

    // Skills Section Setting Routes
    Route::resource('skill-section-setting', SkillSectionSettingController::class);

    // Skills Item Routes
    Route::resource('skill-item', SkillItemController::class);

    // Experience Routes
    Route::resource('experience', ExperienceController::class);

    // Feedback Routes
    Route::resource('feedback', FeedbackController::class);

    // FeedbackSectionSetting Routes
    Route::resource('feedback-setting', FeedbackSectionSettingController::class);

    // BlogCategory Routes
    Route::resource('blog-category', BlogCategoryController::class);

    // Blog Routes
    Route::resource('blog', BlogController::class);
});
