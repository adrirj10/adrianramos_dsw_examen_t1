<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mensaje</title>
</head>
<body>
    <h1>Borrar mensajes</h1>
    
    @foreach($messages as $message)
    <form action="{{ route('messages.destroy', $message->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta duda?');">
        @csrf
        @method('DELETE')
        <div>
        {{$message->text}} <button type="submit">Eliminar</button>
        @endforeach
    </form>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>