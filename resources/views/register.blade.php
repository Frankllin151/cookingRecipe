<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadrasto</title>
    <link rel="stylesheet" href="assets/css/bootstrap-5.3.0/bootstrap.min.css">

</head>
<body>
    @component('component.header')
         
    @endcomponent
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
    <script type="text/javascript" src="assets/css/bootstrap-5.3.0/jquery-3.6.3.js"></script>
    <script type="text/javascript" src="assets/css/bootstrap-5.3.0/bootstrap.bundle.min.js"></script>
</body>
</html>