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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','FrontHomeController@frontHome');

Route::get('/main','MainPagesController@mainIndex');
Route::post('/update', 'MainPagesController@updateInfo');

Route::get('/Screate', 'ServicePagesController@create');
Route::post('/save', 'ServicePagesController@store');

Route::get('/Slist', 'ServicePagesController@list');
Route::get('/Sedit/{id}', 'ServicePagesController@edit');
Route::post('/update/{id}', 'ServicePagesController@update');
Route::delete('/Sdelete/{id}', 'ServicePagesController@delete');



Route::get('/pcreate', 'PortfolioPagesController@create');
Route::put('/psave', 'PortfolioPagesController@store');
Route::get('/plist', 'PortfolioPagesController@list');
Route::get('/pedit/{id}', 'PortfolioPagesController@editInfo');
Route::post('/peditlist/{id}', 'PortfolioPagesController@editListInfo');
Route::delete('/pdelete/{id}', 'PortfolioPagesController@deleteListInfo');



Route::get('/acreate', 'AboutPagesController@create');
Route::put('/asave', 'AboutPagesController@store');
Route::get('/alist', 'AboutPagesController@list');
Route::get('/aedit/{id}', 'AboutPagesController@editInfo');
Route::post('/aupdate/{id}', 'AboutPagesController@update');
Route::delete('/adelete/{id}', 'AboutPagesController@deleteListInfo');

Route::post('/contact', 'ContactPagesController@store')->name('contact.store');

//Route::get('/Pcreate', 'PortfolioPagesController@create');
//Route::put('/save', 'PortfolioPagesController@store');
//
//Route::get('/Plist', 'PortfolioPagesController@list');
//Route::get('/Pedit/{id}', 'PortfolioPagesController@edit');
//Route::post('/portfolioUpdate/{id}', 'PortfolioPagesController@portfolioUpdate');
///
//Route::post('/update/{id}', 'PortfolioPagesController@update');



//Route::get('/admin/adminHome','FrontHomeController@dashbord')->name('admin.adminHome');


Auth::routes();

Route::get('/home', 'HomeController@index');


