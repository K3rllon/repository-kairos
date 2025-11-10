<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
</head>
<body>
    <h1>Edição do Evento</h1>

    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @method("put")
        @csrf
        
        <label>Nome:</label><br>
        <input type="text" name="title" value="{{ $event->title }}" required><br><br>

        <label>Descrição:</label><br>
        <textarea name="description" rows="4">{{ $event->description }}</textarea><br><br>

        <label>Data Inicial:</label><br>
        <input type="date" name="start_date" value="{{ $event->start_date }}" required><br><br>

        <label>Data de Termino:</label><br>
        <input type="date" name="end_date" value="{{ $event->end_date }}"><br><br>

        <label>Local:</label><br>
        <input type="text" name="location" value="{{ $event->location }}"><br><br>

        <label>Status:</label><br>
        <select name="status" value="{{ $event->status }}">
            <option value="ativo">Ativo</option>
            <option value="encerrado">Encerrado</option>
            <option value="cancelado">Cancelado</option>
        </select><br><br>

        <button type="submit">Editar Evento</button>
    </form>

    <br>
    <a href="{{ route('events.index') }}">Voltar</a>
</body>
</html>