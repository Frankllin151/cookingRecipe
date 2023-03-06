<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
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
</body>
</html>