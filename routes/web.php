<?php

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

Route::get('/', 'HomeController@index')
  ->name('home');

Route::get('/about', 'AboutController@index')
  ->name('about');

Route::get('/skills', 'SkillsController@index')
  ->name('skills');

Route::get('/services', 'ServicesController@index')
  ->name('services');

Route::get('/portfolio', 'PortfolioController@index')
  ->name('portfolio');

Route::get('/achievement', 'AchievementController@index')
  ->name('achievement');
  
Route::get('/detail/{slug}', 'DetailController@index')
  ->name('detail');

Route::get('/contact', 'ContactController@index')
  ->name('contact');

// Post form data
Route::post('/contact', [
    'uses' => 'ContactController@ContactUsForm',
    'as' => 'contact.store'
]);


Route::prefix('admin')
  ->namespace('Admin')
  ->middleware(['auth'])
  ->group(function() {
      Route::get('/', 'DashboardController@index')
      ->name('dashboard');

      Route::resource('skill', 'SkillController');
      Route::resource('portfolio', 'PortfolioController');
      Route::resource('achievement', 'AchievementController');
  });

Auth::routes(['verify' => true, 'register' => false]);