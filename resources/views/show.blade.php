<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Local</title>
</head>
<body>
    <h1>Local</h1>
    <ul>
        <li>
            Nome: {{$place->name}}
        </li>
        <li>
            Descricao: {{$place->description}}
        </li>
        <li>
            Endereco: {{$place->address}}
        </li>

    </ul>
</body>
</html>