<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DiscussionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|s
*/

Route::get('/', function () {
    return view('hackathon-welcome/welcome');
});

Route::get('/dashboard_hackathon-1st-day1', [TaskController::class, 'index'])->name('dashboard_hackathon');

Route::get('/dashboard_hackathon-1st-day2', [TaskController::class, 'st_hackathonDay2'])->name('1st_hackathon_day2');
Route::post('/task2', [TaskController::class, 'store2'])->name('tasks.store2');

Route::get('/dashboard_hackathon-1st-day3', [TaskController::class, 'st_hackathonDay3'])->name('1st_hackathon_day3');
Route::post('/tasks3', [TaskController::class, 'store3'])->name('tasks.store3');

Route::get('/dashboard_hackathon-2nd-day1', [TaskController::class, 'nd_hackathonDay1'])->name('2nd_hackathon_day1');
Route::post('/tasks4', [TaskController::class, 'store4'])->name('tasks.store4');

Route::get('/dashboard_hackathon-2nd-day2', [TaskController::class, 'nd_hackathonDay2'])->name('2nd_hackathon_day2');
Route::post('/tasks5', [TaskController::class, 'store5'])->name('tasks.store5');

Route::get('/dashboard_hackathon-2nd-day3', [TaskController::class, 'nd_hackathonDay3'])->name('2nd_hackathon_day3');
Route::post('/tasks6', [TaskController::class, 'store6'])->name('tasks.store6');

Route::get('/dashboard_hackathon-discussions', [ChatController::class, 'index']);
Route::post('/discussion_add', [DiscussionController::class, 'discussion'])->name('tasks.discussion');

Route::post('/send-message', [ChatController::class, 'sendMessage']);


Route::get('/dashboard_hackathon-discussions', function () {
    return view('discussions/discussion1');
})->name('discussion1');
