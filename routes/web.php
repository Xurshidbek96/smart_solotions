<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Auth\Middleware\Authenticate;

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
Route::get('/route_cache', [PagesController::class, 'clearRoute']);

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);




// Route::post('/send_sms', [PagesController::class, 'send_sms'])->name('send_sms');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/a-panel', function () {
        return view('admin.layouts.home');
    });
    Route::resource('abouts', AboutController::class);
    Route::resource('teams', TeamController::class);
   
});