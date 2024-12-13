<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Prueba superada</h1>
        @if($messages->isEmpty())
            <p>No hay mensajes en la base de datos</p>
        @else
            <ul>
                @foreach($messages as $message)
                    <li>{{ $message->text}}</li>
                    @if ($message->img === NULL)
                    <p>Sin Imagen</p>
                    @else
                    <li><img src="{{$message->img}}" alt=""></li>
                    @endif
                @endforeach
            </ul>
        @endif
        <a href="{{ route('messages.borrar')}}">Editar</a>

    </div>
</body>
</html>