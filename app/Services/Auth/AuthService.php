<?php



namespace App\Services\Auth;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthService implements IAuthService {

    public function Login(LoginRequest $request){

        try{

            $credentials=$request->only("email","password");

            if(!Auth::attempt($credentials)){

                return [

                    "status"=>401,


                    "body"=>[

                        "message"=>"incorrect email or password",

                    ],


                    "type"=>"invalid credentials"
                ];

               



            }
         

           return [


            "status"=>200,


            "body"=>[

                "message"=>"login successful"
            ],
            "type"=>"success"
        ];




        }catch(Exception $e){

throw $e;
        }


    }

    public function Register(RegisterRequest $request){


        try{

        DB::beginTransaction();
        $credentials=$request->only("email","password");

        $user=User::create([

            "name"=>$credentials["email"],
            "email"=>  $credentials["email"],

            "password"=>Hash::make($credentials["password"],)
        ]);

        db::commit();


        return [


            "status"=>"201",

            "body"=>[

                "message"=>"user registered successfully"
            ],

            "type"=>[

                "registered succesfully"
            ]
            ];




        }catch(Exception $e){
            dd($e);

            DB::rollBack();

            throw $e;




        }



    }

    



}