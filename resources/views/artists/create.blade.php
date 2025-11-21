<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Artist</title>
</head>
<body>
    <h1>Cadastrar Artista</h1>
    
    <form action="{{ route('artists.store') }}" method="POST">
        @csrf
        
        <label>Nome:</label><br>
        <input type="text" name="name"><br><br>

        <label>Biografia:</label><br>
        <textarea name="bio" rows="4"></textarea><br><br>

        <label>Tipo (Artista, Palestrante, etc):</label><br>
        <input type="text" name="type"><br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="ativo">Ativo</option>
            <option value="inativo">Inativo</option>
        </select><br><br>

        <button type="submit">Salvar</button>
    </form>

    <br>
    <a href="{{ route('artists.index') }}">Voltar</a>
</body>
</html>
