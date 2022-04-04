<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

Route::view('/competition',                             'competition.index');
Route::view('/competition_1',                           'competition.show');
Route::view('/youth-personnel-reserve/profile-form',    'youth-personnel-reserve.profile-form');
Route::view('/news_1',                                  'news.show');


Route::get('/education',                'PageController@index');
Route::get('/youth-personnel-reserve',  'PageController@index');

Route::get('/',                         'MainController@index');
Route::get('/news',                     'NewsController@index');
Route::get('/news/{id}',                'NewsController@show');


Route::get('/vacancies',                'VacancyController@index');
Route::view('/vacancies/profile-form',  'vacancies.profile-form');
Route::view('/vacancies/ask-form',      'vacancies.ask-form');
Route::get('/vacancies/{id}',           'VacancyController@show');
Route::any('/vacancies/search',         'VacancyController@search');

Route::get('/competition',              'CompetitionController@index');
Route::get('/competition/{id}',         'CompetitionController@show');
Route::any('/competition/search',       'CompetitionController@search');

Route::get('/practice-and-internship',                  'PracticeController@index');
Route::get('/practice-and-internship/profile-form',     'PracticeController@form');

Route::post('/questionary',               'MainController@sendQuestionary');

Route::view('/subscribe',               'subscribe.index');
Route::view('/subscribe/success',               'subscribe.success');
Route::post('/subscribe',               'SubscriptionController@subscribe');


Route::group(['prefix' => 'admin'], function () {
    Route::get('posts/publish', 'VacancyController@archive')->name('vacancies.archive');
    Voyager::routes();
});
