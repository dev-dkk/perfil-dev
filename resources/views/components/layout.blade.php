<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} - Dev Dk</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <x-cabecalho/>
    <div class="container">
        <h1>{{$title}}</h1>
        {{$slot}}
    </div>
    <x-rodape/>
</body>
</html>
