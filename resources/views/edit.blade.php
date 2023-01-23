<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Local</h1>

    <form action="/places/update/{{$places->id}}" method="POST">
        @csrf
        <input name="name" type="text" value="{{$places->name}}">
        <input name="description" type="text" value="{{$places->description}}">
        <input name="address" type="text" value="{{$places->address}}">
        <button type="submit">Enviar</button>
        <hr>
        <a href="/places/delete/{{$places->id}}">Deletar</a>
    </form>

    
    
</body>
</html>