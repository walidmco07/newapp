<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AddEventController;

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
    return view('auth.login');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

// Start Full Calender=================================================================

Route::get('/events', [AddEventController::class, 'getEvents']);
Route::get('/schedule/delete/{id}', [AddEventController::class, 'deleteEvent']);
Route::post('/schedule/{id}', [AddEventController::class, 'update']);
Route::post('/schedule/{id}/resize', [AddEventController::class, 'resize']);
Route::get('/events/search', [AddEventController::class, 'search']);

Route::get('/add-event', [AddEventController::class, 'index'])->name('addEvent');
Route::post('create-schedule', [AddEventController::class, 'create']);
// End Full Calender=================================================================
    


// service effictifs
Route::get('/s_Effectif', function () {
    return view('Service_Effectif.Effectif');
})->name('s_Effectif');


require __DIR__.'/auth.php';
