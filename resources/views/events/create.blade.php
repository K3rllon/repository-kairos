<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
</head>
<body>
    <h1>Criação do Evento</h1>

    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        
        <label>Nome:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Descrição:</label><br>
        <textarea name="description" rows="4"></textarea><br><br>

        <label>Data Inicial:</label><br>
        <input type="date" name="start_date" required><br><br>

        <label>Data de Termino:</label><br>
        <input type="date" name="end_date"><br><br>

        <label>Local:</label><br>
        <input type="text" name="location"><br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="ativo">Ativo</option>
            <option value="encerrado">Encerrado</option>
            <option value="cancelado">Cancelado</option>
        </select><br><br>

        <button type="submit">Salvar Evento</button>
    </form>

    <br>
    <a href="{{ route('events.index') }}">Voltar</a>
</body>
</html>