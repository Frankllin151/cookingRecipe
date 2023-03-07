<?php

namespace App\Http\Controllers;

use Google\Service\Transcoder\Input;
use Illuminate\Support\Facades\Auth; 

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller{
    public function loginpost(Request $request){
                   $credentials = $request->only(trim('email'), trim('password'));

              $emailUser = $request->input('email');

          $tokeInput = $request->input('token_login');

              
             $token = DB::table('users')->select('token')->where('email' ,$emailUser)->first();

            $tokenString = $token->token;
            
              if(Auth::attempt($credentials)){

               
              $password = $request->input('password');
            
              $checkPass = DB::table('users')->select('password')->where('email' , $emailUser)->first();
              $pass = $checkPass->password; 
              if($checkPass && Hash::check($password, $pass )){

                if($tokenString === ""){

                  DB::table('users')->where('email' , $emailUser)->update(['token' => $tokeInput]);
                  
                   

                  
                 return redirect()->intended('/catalago');
                 
               } else{
                 return redirect('/catalago');
               }

              } else{
                  return redirect('/');
              }
               
               
                
  
           return redirect()->intended('/catalago');

             } else{
                 return redirect()->intended('/');
              
               }

             
           
                
    }
    public function registerPost(Request $request){
      $name = $request->input('name-register');
      $email = $request->input('email-register'); 
      $password = $request->input('password-register'); 
      $token = $request->input('token-register');
        $existingAlreadyUser = User::where('email', $email);

        if($existingAlreadyUser->count() > 0){
                      return redirect('/login')->with('error', 'User already exist. please log in');
        }


      User::create([
            'name' => $name,
            'email' =>  $email, 
              'password' =>  Hash::make($password), 
              'token' =>  $token
      ]);
         
      return redirect('/catalago');
    }




}