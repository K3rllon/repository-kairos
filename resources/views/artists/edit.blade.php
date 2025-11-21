<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Artist</title>
</head>
<body>

    <h1>Editar Artista</h1>

    <form action="{{ route('artists.update', $artist->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label><br>
        <input type="text" name="name" value="{{ $artist->name }}"><br><br>

        <label>Biografia:</label><br>
        <textarea name="bio" rows="4">{{ $artist->bio }}</textarea><br><br>

        <label>Tipo:</label><br>
        <select name="type">
            <option value="artista" {{ $artist->type == 'artista' ? 'selected' : '' }}>Artista</option>
            <option value="palestrante" {{ $artist->type == 'palestrante' ? 'selected' : '' }}>Palestrante</option>
        </select><br><br>

        <button type="submit">Atualizar</button>
    </form>

    <br>
    <a href="{{ route('artists.index') }}">Voltar</a>

</body>
</html>
