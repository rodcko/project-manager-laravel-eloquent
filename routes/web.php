<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;

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

Route::get('projects', [ProjectController::class, 'getAllProjects']);

// Reto: ultimos 10 registros de proyectos
Route::get('latestProjects', [ProjectController::class, 'getLatestProjects']);

// Reto: Inserts
Route::get('insertNewProject', [ProjectController::class, 'insertProject']);
Route::get('insertNewCity', [CityController::class, 'insertCity']);
Route::get('insertNewCompany', [CompanyController::class, 'insertCompany']);
Route::get('insertNewUser', [UserController::class, 'insertUser']);


