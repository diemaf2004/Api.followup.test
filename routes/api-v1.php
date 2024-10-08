<?php


use App\Http\Controllers\ApprenticeController;

use App\Http\Controllers\AdministratorController;

use App\Http\Controllers\Api\SuperadminController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\FollowupController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\TrainerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return 'prueba';
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();


//Apprentice
});
Route::prefix('apprentice')->group(function(){
 Route::get('list', [ApprenticeController::class,'index']);
 Route::post('create', [ApprenticeController::class,'store']);
 Route::get('show/{id}', [ApprenticeController::class,'show']);
 Route::put('update/{apprentice}', [ApprenticeController::class,'update']);
 Route::delete('destroy/{apprentice}', [ApprenticeController::class,'destroy']);
});

//trainers
 Route::prefix('trainers')->group(function(){
    Route::get('list', [TrainerController::class,'index']);
    Route::post('create', [TrainerController::class,'store']);
    Route::get('show/{trainer}', [TrainerController::class,'show']);
    Route::put('update/{trainer}', [TrainerController::class,'update']);
    Route::delete('delete/{trainer}', [TrainerController::class,'destroy']);
});

// RUTAS ADMINISTRADOR
Route::prefix('administrators')->group(function(){
    Route::get('list', [AdministratorController::class,'index']);
    Route::post('create', [AdministratorController::class,'store']);
    Route::get('show/{id}', [AdministratorController::class,'show']);
    Route::put('update/{administrator}', [AdministratorController::class,'update']);
    Route::delete('delete/{administrator}', [AdministratorController::class,'destroy']);
});


//RUTAS SUPERADMINISTRADOR
Route::prefix('superadmins')->group(function(){
    Route::get('list', [SuperadminController::class,'index']);
    Route::post('create', [SuperadminController::class,'store']);
    Route::get('show/{superadmin}', [SuperadminController::class,'show']);
    Route::put('update/{superadmin}', [SuperadminController::class,'update']);
    Route::delete('delete/{superadmin}', [SuperadminController::class,'destroy']);
});


//RUTAS NOTIFICACIONES
Route::prefix('notifications')->group(function(){
    Route::get('list', [NotificationController::class,'index']);
    Route::post('create', [NotificationController::class,'store']);
    Route::get('show/{id}', [NotificationController::class,'show']);
    Route::put('update/{notification}', [NotificationController::class,'update']);
    Route::delete('delete/{notification}', [NotificationController::class,'destroy']);
});

//RUTAS FOLLOWUP
Route::prefix('followups')->group(function() {
    Route::get('list', [FollowupController::class, 'index']);
    Route::post('create', [FollowupController::class, 'store']);
    Route::get('show/{id}', [FollowupController::class, 'show']);
    Route::put('update/{followup}', [FollowupController::class, 'update']);
    Route::delete('delete/{followup}', [FollowupController::class, 'destroy']);
});


//RUTAS AGENDA
Route::prefix('diaries')->group(function(){
    Route::get('list', [DiaryController::class,'index']);
    Route::post('create', [DiaryController::class,'store']);
    Route::get('show/{id}', [DiaryController::class,'show']);
    Route::put('update/{diary}', [DiaryController::class,'update']);
    Route::delete('delete/{diary}', [DiaryController::class,'destroy']);
});
