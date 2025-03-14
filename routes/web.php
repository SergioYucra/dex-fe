<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AssignmentController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NoteController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Course\BlogController;
use App\Http\Controllers\Course\ListController;
use App\Http\Controllers\Course\LearningController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Course\PostController;
use App\Http\Controllers\Course\ThreadController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'google_verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


});

