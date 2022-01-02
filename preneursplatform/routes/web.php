<?php


use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;

// use app\Models\Project;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@index')->name('home');

Route::get('/', 'WelcomeController@welcome')->name('welcome'); 
Route::get('/dashboard', 'WelcomeController@welcome');
// Route::post('/dashboard', )

Route::get('profile', 'UserController@profile');
Route::get('edit-profile', 'UserController@editprofile')->name('edit-profile');
Route::post('edit-profile', 'UserController@update');
// Route::post('profile', 'UserController@update_first_name');



Route::get('/projects', 'ProjectController@index');
