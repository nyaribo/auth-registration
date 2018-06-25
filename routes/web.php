<?php
 use App\Fees;
 use App\Http\Controllers\Controller\HomeController;
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

Route::get('/', function () {

    $fees = Fees::all();
    return view('093905.fees.welcome')->with('fees',$fees);
});

Auth::routes();


Route::get('/home','HomeController@create');
Route::post('/home','HomeController@store');
Route::post('/welcome','HomeController@show');//shows fees paid from db




Route::any('/search','HomeController@search');
