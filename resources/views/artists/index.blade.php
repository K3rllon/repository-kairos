<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artistas e Palestrantes - Kairos</title>
</head>
<body>
    <h1>Lista de Artistas e Palestrantes</h1>

     <a href="{{ route('artists.create') }}">+ Cadastrar Novo</a>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artists as $artist)
                <tr>
                    <td>{{ $artist->name }}</td>
                    <td>{{ ucfirst($artist->type) }}</td>
                    <td>{{ ucfirst($artist->status) }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
