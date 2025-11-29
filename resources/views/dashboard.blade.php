<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artistas e Palestrantes - Kairós</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --kairos-purple: #56008F;
            --kairos-purple-dark: #3D0066;
            --kairos-amethyst: #230139;
            --kairos-gray-light: #E1E1E1;
        }
    </style>
</head>
<body class="bg-[var(--kairos-amethyst)] text-white min-h-screen px-6 py-10">

    <!-- CABEÇALHO -->
    <header class="max-w-5xl mx-auto flex items-center gap-4 mb-10">
        <img src="{{ asset('imagens/logo-kairos.png') }}" alt="Kairós Logo" class="h-16 drop-shadow-xl">
        <h1 class="text-4xl font-bold tracking-wide">Artistas e Palestrantes</h1>
    </header>

    <!-- BANNER -->
    <div 
        class="max-w-5xl mx-auto h-56 rounded-2xl mb-10 shadow-2xl bg-cover bg-center"
        style="background-image: url('{{ asset('imagens/banner-artistas.jpg') }}');">
    </div>

    <!-- CARD PRINCIPAL -->
    <main class="max-w-5xl mx-auto bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/20">

        <!-- BOTÃO NOVO -->
        <div class="flex justify-end mb-6">
            <a href="{{ route('artists.create') }}"
               class="bg-[var(--kairos-purple)] hover:bg-[var(--kairos-purple-dark)] transition px-6 py-3 rounded-xl text-white font-semibold shadow-lg">
                + Cadastrar Novo
            </a>
        </div>

        <!-- TABELA -->
        <div class="overflow-x-auto">
            <table class="w-full border border-white/10 rounded-xl overflow-hidden">
                <thead class="bg-[var(--kairos-purple)] text-white">
                    <tr>
                        <th class="px-4 py-4 text-left font-medium">Nome</th>
                        <th class="px-4 py-4 text-left font-medium">Tipo</th>
                        <th class="px-4 py-4 text-left font-medium">Status</th>
                        <th class="px-4 py-4 text-center font-medium">Ações</th>
                    </tr>
                </thead>

                <tbody class="bg-white text-black">
                    @foreach ($artists as $artist)
                        <tr class="border-b border-gray-200 hover:bg-gray-100 transition">
                            <td class="px-4 py-4">{{ $artist->name }}</td>
                            <td class="px-4 py-4">{{ ucfirst($artist->type) }}</td>
                            <td class="px-4 py-4">{{ ucfirst($artist->status) }}</td>
                            <td class="px-4 py-4 flex items-center gap-3 justify-center">
                                <a href="{{ route('artists.edit', $artist->id) }}"
                                   class="px-4 py-2 rounded-lg bg-[var(--kairos-purple)] text-white hover:bg-[var(--kairos-purple-dark)] transition shadow">
                                    Editar
                                </a>
                                <form action="{{ route('artists.destroy', $artist->id) }}" method="post"
                                      onsubmit="return confirm('Deseja mesmo excluir este registro?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                            class="px-4 py-2 rounded-lg bg-red-600 text-white hover:bg-red-700 transition shadow">
                                        Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </main>

</body>
</html>
