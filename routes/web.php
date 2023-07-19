<?php

use App\Http\Controllers\HomeController;
use App\Models\Donation;
use App\Models\Formation;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {

    $users = User::all()->count();
    $donations = Donation::all()->count();
    $projects = Project::all()->count();
    $formations = Formation::all()->count();
    return view('dashboard', compact('users', 'donations', 'projects', 'formations'));
})->middleware(['auth'])->name('dashboard');

Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/donation', [HomeController::class, 'donation']);
Route::get('/formation', [HomeController::class, 'formation']);
Route::get('/portfolio', [HomeController::class, 'portfolio']);
Route::get('/about', [HomeController::class, 'about']);

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
