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
            --kairos-gray: #959595;
        }
    </style>
</head>
<body class="bg-[var(--kairos-amethyst)] text-white min-h-screen px-6 py-10">

    <header class="max-w-5xl mx-auto flex justify-between items-center mb-10">
        <div class="flex items-center gap-3">
            <img src="{{ asset('imagens/logo-kairos.png') }}" class="h-14" alt="Logo Kairós">
        </div>

        <a href="{{ route('dashboard') }}"
           class="bg-white/10 border border-white/20 text-white px-5 py-2 rounded-xl hover:bg-white/20 transition shadow-lg">
            ← Voltar
        </a>
    </header>

    <main class="max-w-5xl mx-auto bg-white/5 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/10">

        <div 
            class="max-w-5xl mx-auto h-52 rounded-2xl mb-10 shadow-2xl bg-cover bg-center"
            style="background-image: url('{{ asset('imagens/artists-banner.jpg') }}');">
        </div>

        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-semibold tracking-wide">Lista de Artistas e Palestrantes</h2>

            <a href="{{ route('artists.create') }}"
               class="bg-[var(--kairos-purple)] hover:bg-[var(--kairos-purple-dark)] transition px-6 py-3 rounded-xl text-white font-semibold shadow-lg">
                + Cadastrar Novo
            </a>
        </div>

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
