<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\Auth\IAuthService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    protected $authService;

    public function LoginView(){

        return view("Auth/Login");




    }

    public function __construct(IAuthService $authService){


        $this->authService = $authService;


    }

    public function Login(LoginRequest $request){

        try{

            $credentials=$request->only("email","password");


            $responce=$this->authService->Login($request);

            if($responce["status"]==401){


                return back()->withErrors([

                    "error"=>$responce["body"]["message"]
                ])->withInput($request->all());


            }


            return redirect()->route("Post.Index");
            




        }catch(Exception $e){
        
           abort(500);


        }

       





        
    }

    public function RegisterView(){


        return view("Auth/Register");


    }

    public function Register(RegisterRequest $request){

        try{


            $response=$this->authService->Register($request);

            return redirect()->route("Auth.LoginView");


        }catch(Exception $e){

         abort(500);
        }


    }
}
