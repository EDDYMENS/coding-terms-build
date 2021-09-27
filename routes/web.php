<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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


Route::get('/', [MainController::class, 'term']);
Route::get('/term/{term?}', [MainController::class, 'term']);
Route::get('/404', [MainController::class, 'allRoutes'])->name('404');
Route::get('/sitemap.xml', function(){
    return response(View('sitemap'))
            ->withheaders([
                'Content-Type' => 'text/xml'
            ]);
})->name('sitemap');