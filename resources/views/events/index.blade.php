<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - Kairos</title>
</head>
<body>
    <h1>Eventos</h1>

    <a href="{{route('events.create')}}">Cadastro de Eventos</a>

   <table>
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Data Inicial</th>
            <th>Data de Termino</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($events as $event)
            <tr>
                <td>{{ $event->title }}</td>
                <td>{{ $event->start_date }}</td>
                <td>{{ $event->location }}</td>
                <td>{{ ucfirst($event->status) }}</td>
                <td>
                    <a href="">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>
</body>
</html>
