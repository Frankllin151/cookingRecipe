Cooking Recipe and web software that has will have fun cooking recipes. still in development 


--- system login 
 + done
 + token
 + check passsword
 + check if user it is logged


--- Sytem Register
+ email exist email with count < 0
+ return redirect 

--- Sytem admin 
- good, an class Auth::attempt not work why when put password and checked the password at database with same inserted in of databse not work, not know why. 
 So I did a work around, i got password typing and that which was at database did a conditional.
 file: AdminAuthController
 function: Login
    
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
               
I experct let this gambiarra last until you discover the problem!

