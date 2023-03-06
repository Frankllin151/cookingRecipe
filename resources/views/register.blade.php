<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadrasto</title>
</head>
<body>
    <form action="/register_data_post" method="post">
        @csrf
        <div><label for="">Your name</label>
            <input name="name-register" type="text" required>
        </div>
        <div><label for="">Your Email</label>
            <input name="email-register" type="email" required>
        </div>
        <div><label for="">Your password</label>
            <input name="password-register" type="password" required>
        </div>
        <?php
        /// Generate Token 
        $token = openssl_random_pseudo_bytes(16);
                  $token = bin2hex($token);
    
             
            ?>
        <input type="hidden" name="token-register" value="<?= $token ?>" required> 
        <input type="submit">
    </form>
</body>
</html>