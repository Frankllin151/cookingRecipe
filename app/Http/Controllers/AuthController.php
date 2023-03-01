<?php

namespace App\Http\Controllers;

use Google\Service\Transcoder\Input;
use Illuminate\Support\Facades\Auth; 


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function loginpost(Request $request){
                   $credentials = $request->only(trim('email'), trim('password'));
           
             
                    
             if(Auth::attempt($credentials)){
                 $user_id = Auth::user()->id;
                return redirect()->intended('user-dasboard/'. $user_id);
              } else{
                  return 'failed';
               
                }
                
    }
}
