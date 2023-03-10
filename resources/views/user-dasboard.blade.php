
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minha Lista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap-5.3.0/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/explorar.css">
</head>
<body>
    @if (!isset($name) || empty($name) && !isset($id) || empty($id))
    @include('component.header' , ['name' => "Usuario"])       
    @else
    @include('component.header' , ['name' => $name ])   
    @endif


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script type="text/javascript" src="assets/css/bootstrap-5.3.0/jquery-3.6.3.js"></script>
    <script type="text/javascript" src="assets/css/bootstrap-5.3.0/bootstrap.bundle.min.js"></script>
</body>

<form action="/updateToken" method="post">
    @csrf
 <input type="hidden" name="id_update" value="{{$id}}">
 <input type="submit" value="Sair">
</form>
<script >
 // const getidUser = document.getElementById('id-user');
//console.log(getidUser);
</script>
</html>