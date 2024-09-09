<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\authorized;
use Illuminate\Support\Facades\Route;

Route::get("/",[HomeController::class,"Index"])->name("Home.Index");


Route::get("Auth/Login",[AuthController::class,"LoginView"])->name("Auth.LoginView");

Route::post("Auth/Login",[AuthController::class,"Login"])->name("Auth.Login");

Route::get("Auth/Register",[AuthController::class,"RegisterView"])->name("Auth.RegisterView");

Route::post("Auth/Register",[AuthController::class,"Register"])->name("Auth.Register");







Route::group(["middleware"=>"authorized"],function(){

    Route::get("User/Home",[UserController::class,"Home"])->name("User.Home");

    Route::get("/posts",[PostController::class,"Index"])->name("Post.Index");






});