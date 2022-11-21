<?php

use App\Http\Livewire\Users;
use App\Http\Livewire\ServiceComp;
use App\Http\Livewire\Succursales;
use App\Http\Livewire\Departements;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Livewire\BlackList;
use App\Http\Livewire\Employes;
use App\Models\Commune;
use App\Models\Employe;

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

Route::get('register',[RegisterController::class,'index'])->name('register');
Route::post('register',[RegisterController::class,'register'])->name('post.register');

Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'login'])->name('post.login');

Route::get('logout',[LogoutController::class,'logout'])->name('logout');

Route::get('forgot',[ForgotController::class,'index'])->name('forgot');
Route::post('forgot',[ForgotController::class,'store'])->name('post.forgot');

Route::get('reset/{token}',[ResetController::class,'index'])->name('reset');
Route::post('reset',[ResetController::class,'reset'])->name('post.reset');

Route::get('/',[HomeController::class,'index'])->name('home');

// Le groupe des routes relatives aux managers uniquement
Route::group([
    "middleware" =>["auth","auth.manager"],
    "prefix" => "manager",'as' => 'manager.'
],function(){
    Route::group(
        ["prefix" => "gestcomptes","as" => "gestcomptes."],function(){
            Route::get("/users",Users::class)->name("users.index");
        }
    );
    Route::group([
        "prefix" => "gestsuccursales",'as' => 'gestsuccursales.'], function(){
        Route::get("/succursales", Succursales::class)->name("succursales");
        Route::get("/departements",Departements::class)->name("departements");
        Route::get("/departements/{id}/service",ServiceComp::class)->name("departements.service");
    });

});


// Le groupe des routes relatives aux assistant uniquement
Route::group([
    "middleware" =>["auth","auth.assistant"],
    "prefix" => "assistant",'as' => 'assistant.'
],function(){
    Route::group(
        ["prefix" => "gestemployes","as" => "gestemployes."],function(){
            Route::get("/employes",Employes::class)->name("employe.index");
            Route::get("/blacklist",BlackList::class)->name("employe.black");
        }
    );
});

Route::get("/employes",function (){
    return Employe::with("commune")->get();
});

Route::get("/communes",function (){
    return Commune::get();
});