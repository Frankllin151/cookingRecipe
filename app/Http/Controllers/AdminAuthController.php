<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
session_start();
class AdminAuthController extends Controller
{

    //
    public function showFormLogin(){
        return view('admin.login');
    }
    public function Login(Request $request){
            $pass = $request->input('password');

               $email = $request->input('email');
                 $_SESSION['password'] = $pass;
               $passwordDt = DB::table('admin')->select('password')->where('email', $email)->first();

               $pass_dt = $passwordDt->password;
                $_SESSION['name'] = $pass_dt;
   
               if(md5($pass) === $pass_dt){
                 return redirect('/admin/dasboard')->with('password' , $pass);
               } else{
                 return 'fails';
               }
             
    }
    public function index(){
            
            
            $passWord = md5($_SESSION['password']);

            if($passWord === $_SESSION['name']){
              $dataArray = DB::table('admin')->select('name')->where('id', '1')->first();
                 $dataName = $dataArray->name;
                  return view('admin.dasboard', ['name' => $dataName]);
            } else{
                      return redirect('admin/login');
            }
          }
}
