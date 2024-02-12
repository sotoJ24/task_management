<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController; 

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

Route::get('/', [TaskController::class, 'index'])->name('root_route');

Route::controller(TaskController::class)->group(function() {
    Route::post('create/task', 'store')->name('create_task_route');
    Route::get('/tasks/{task}/edit','edit')->name('edit_task');
    Route::put('/tasks/{id}/update','update')->name('update_task');
    Route::delete('/tasks/{id}/delete','destroy')->name('delete_task');

});
