<?php

use App\Http\Controllers\ClubController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/club', [ClubController::class, 'index']);
Route::get('/api/club/{id}', [ClubController::class, 'show']);
Route::post('/api/club', [ClubController::class, 'store']);
Route::put('/api/club/{id}', [ClubController::class, 'update']);
Route::delete('/api/club/{id}', [ClubController::class, 'delete']);

Route::get('/club/list', [ClubController::class, 'listView']);///ez jo
Route::get('/club/new', [ClubController::class, 'newView']);///ez jo
Route::get('/club/edit/{id}', [ClubController::class, 'editView']);//ez jo
Route::get('/club/delete', [ClubController::class, 'deleteView']);//ez nem
