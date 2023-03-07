<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
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
// dinamica
Route::get('/', function () {
    return view('welcome');
});
Route::get('/catalago', function(){
    $user = Auth::user(); 

    if($user === null){
        return view('explorarct');
    } else{
        return view('explorarct' , ['name' => $user->name] , ['id' => $user->id]);
    }
 
});
//login 
Route::post('/loginpost', [AuthController::class , 'loginpost'])->name('loginpost');
Route::view('/login', 'login');
Route::get('user-dasboard/{id}', function($id){
    $user = Auth::user();
    return view('user-dasboard', ['name' => $user->name , 'id' => $user->id]);
   
});
// register
Route::view('/register', 'register');
Route::post('/register_data_post', [AuthController::class , 'registerPost'])->name('register_data_post');