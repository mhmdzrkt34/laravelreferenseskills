<?php




namespace App\Services\Auth;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;

interface IAuthService{

    public function Login(LoginRequest $request);

    public function Register(RegisterRequest $request);




}