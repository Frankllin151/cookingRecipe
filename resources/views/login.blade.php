<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap-5.3.0/bootstrap.min.css">
</head>
<body>
    @component('component.header')
         
    @endcomponent
    <form action="/loginpost" method="post">
                    @csrf
                    <div>
                        <label for="">Email</label>
                        <input   id="email-user" type="email" name="email" required autofocus>
                    </div>
                    <div>
                        <label for="">Password</label>
                        <input type="password"  id="password" name="password" required >
                    </div>
                    <div>
                        <?php
                        /// Generate Token 
                        $token = openssl_random_pseudo_bytes(16);
                                  $token = bin2hex($token);
                    
                             
                            ?>
                        <input name="token_login" type="hidden" value="<?= $token ?>">
                    </div>
                    <div>
                        <button type="submit">Login</button>
                    </div>

    </form>
    <script type="text/javascript" src="assets/css/bootstrap-5.3.0/jquery-3.6.3.js"></script>
    <script type="text/javascript" src="assets/css/bootstrap-5.3.0/bootstrap.bundle.min.js"></script>
</body>
</html>