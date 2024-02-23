<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;

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

Route::get('/keren', function () {
    return 'Aku adalah power';
});


Route::get('/voter', [VoterController::class, 'viewVoter']);

Route::get('/subject/student', [SubjectController::class, 'viewS_Student']);
Route::get('/subject/teacher', [SubjectController::class, 'viewS_Teacher']);
Route::get('/subject/admin', [SubjectController::class, 'viewS_Admin']);

Route::get('/user/student', [UserController::class, 'viewU_Student']);
Route::get('/user/teacher', [UserController::class, 'viewU_Teacher']);
Route::get('/user/admin', [UserController::class, 'viewU_Admin']);

