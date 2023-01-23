<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Criar Local</h1>    
    <form action="/places/store" method="POST">
    @csrf
    <input name="name" type="text">
    <input name="description" type="text">
    <input name="address" type="text">
    <button type="submit">enviar</button>

    
    </form>
</body>
</html>