<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\mediacontrolle;

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


Route::get('/',[HomeController::class,'index']);

Route::get('/home_product_upload',[HomeController::class,'home_product_upload']);

Route::get('/home_media_upload',[HomeController::class,'home_media_upload']);

Route::post('/add_product',[HomeController::class,'add_product']);

Route::get('/show_product',[HomeController::class,'show_product']);


Route::get('/delete_product/{id}',[HomeController::class,'delete_product']);

Route::get('/update_product/{id}',[HomeController::class,'update_product']);

Route::post('/edit_product/{id}',[HomeController::class,'edit_product']);

Route::post('/my_media_upload',[mediacontrolle::class,"my_media_upload"]);

Route::get('/display_data',[mediacontrolle::class,"display_data"]);

Route::get('/my_download/{file}',[mediacontrolle::class,"download"]);

Route::get('view_file/{file}',[mediacontrolle::class,"view_file"]);
