<?php

use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/home', [HomeController::class,'home']);
Route::get('/services', [HomeController::class,'service'])->name('service');
Route::get('/service/{slug}', [HomeController::class,'serviceDetail'])->name('service.detail');
Route::get('/portfolio', [HomeController::class,'portfolio'])->name('portfolio');
Route::get('/portfolio1', [HomeController::class,'portfolio1'])->name('portfolio1');
Route::get('/portfolio2', [HomeController::class,'portfolio2'])->name('portfolio2');
Route::get('/portfolio3', [HomeController::class,'portfolio3'])->name('portfolio3');
Route::get('/portfolio4', [HomeController::class,'portfolio4'])->name('portfolio4');
Route::get('/portfolio5', [HomeController::class,'portfolio5'])->name('portfolio5');
Route::get('/portfolio6', [HomeController::class,'portfolio6'])->name('portfolio6');
Route::get('/portfolio/{slug}', [HomeController::class,'portfolioDetail'])->name('portfolio.detail');
Route::get('/teams', [HomeController::class,'team'])->name('team');
Route::get('/team/{slug}', [HomeController::class,'teamDetail'])->name('team.detail');
Route::get('/case-study', [HomeController::class,'caseStudy'])->name('case-study');
Route::get('/case-study/{slug}', [HomeController::class,'caseStudyDetail'])->name('case-study.detail');
Route::get('/our-clients', [HomeController::class,'client'])->name('client');
Route::get('/testimonials', [HomeController::class,'testimonial'])->name('testimonial');
Route::get('/blog', [HomeController::class,'blog'])->name('blog');
Route::get('/blog/category/{slug}', [HomeController::class,'blogCategory'])->name('blog.category');
Route::get('/blog/{slug}', [HomeController::class,'blogDetail'])->name('blog.detail');
Route::get('/not-found', [HomeController::class,'notFound'])->name('not-found');
Route::get('/coming-soon', [HomeController::class,'comingSoon'])->name('coming-soon');
Route::get('/about-us', [HomeController::class,'about'])->name('about');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/term-of-use', [HomeController::class,'termOfUse'])->name('term-of-use');
Route::get('/privacy-policy', [HomeController::class,'privacyPolicy'])->name('privacy-policy');
