<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\eventDetails;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SociaLiteController;
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

Route::get('/', [EventController::class, 'Show']);
Route::get('/details', [eventDetails::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('auth/google', [SociaLiteController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [SociaLiteController::class, 'handleGoogleCallBack']);
Route::get('/create-event' , [EventController::class, 'create']);
Route::post('/event_create', [EventController::class, 'event_create'])->name('event_create');
Route::get('/admin-dashboard', [AdminController::class, 'index']);
Route::post('/approveEvent/{id}', [AdminController::class, 'Approve'])->name('approveEvent');
Route::post('/refuseEvent/{id}', [AdminController::class, 'Refuse'])->name('refuseEvent');
Route::get('/eventDetails/{id}' , [EventController::class, 'details'])->name('eventDetails');
Route::post('editEvent/{id}', [EventController::class, 'editEvent'])->name('editEvent');
Route::post('deleteEvent/{id}', [EventController::class, 'DeleteEvent'])->name('DeleteEvent');
Route::post('reserve/{id}', [ReservationController::class, 'reserve'])->name('reserve');
Route::DELETE('/CancelReservation/{id}', [ReservationController::class, 'cancelReservation'])->name('CancelReservation');
Route::get('userList', [AdminController::class, 'userslist'])->name('usersList');
Route::post('userList/{id}', [AdminController::class, 'updateUserRole'])->name('updateRole');
Route::get('categories', [AdminController::class, 'categories'])->name('categories');
Route::post('AddCategories', [AdminController::class, 'AddCategories'])->name('AddCategories');
Route::DELETE('deleteCategory/{id}', [AdminController::class, 'deleteCategory'])->name('deleteCategory');
require __DIR__.'/auth.php';
