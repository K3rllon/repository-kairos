<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Artista - Kairós</title>
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
<body class="bg-[var(--kairos-amethyst)] text-white min-h-screen flex flex-col items-center p-6">

    <header class="flex items-center gap-4 mb-10 w-full max-w-2xl justify-between">
        <img src="{{ asset('imagens/logo-kairos.png') }}" alt="Kairós Logo" class="h-20 drop-shadow-xl">
        <a href="{{ route('artists.index') }}"
           class="px-6 py-3 rounded-xl bg-gray-600 hover:bg-gray-700 transition font-semibold shadow">
            ← Voltar
        </a>
    </header>


    <div class="w-full max-w-2xl bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/20">

        <h2 class="text-3xl font-bold mb-8 text-center text-[var(--kairos-gray-light)]">Cadastrar Novo Artista/Palestrante</h2>

        <form action="{{ route('artists.store') }}" method="POST" class="space-y-5">
            @csrf


            <div>
                <label class="block font-semibold mb-1">Nome:</label>
                <input type="text" name="name" required
                       class="w-full p-3 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[var(--kairos-purple)]">
            </div>

            <div>
                <label class="block font-semibold mb-1">Biografia:</label>
                <textarea name="bio" rows="4"
                          class="w-full p-3 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[var(--kairos-purple)]"></textarea>
            </div>

            <div>
                <label class="block font-semibold mb-1">Tipo (Artista, Palestrante, etc):</label>
                <input type="text" name="type" required
                       class="w-full p-3 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[var(--kairos-purple)]">
            </div>

            <div>
                <label class="block font-semibold mb-1">Status:</label>
                <select name="status"
                        class="w-full p-3 rounded-lg bg-white/20 text-white focus:outline-none focus:ring-2 focus:ring-[var(--kairos-purple)]">
                    <option value="ativo" class="text-black">Ativo</option>
                    <option value="inativo" class="text-black">Inativo</option>
                </select>
            </div>


            <div class="flex justify-between items-center mt-6">
                <a href="{{ route('artists.index') }}"
                   class="px-6 py-3 rounded-xl bg-gray-600 hover:bg-gray-700 transition font-semibold shadow">
                    Voltar
                </a>
                <button type="submit"
                        class="px-6 py-3 rounded-xl bg-[var(--kairos-purple)] hover:bg-[var(--kairos-purple-dark)] transition font-semibold shadow">
                    Salvar Artista
                </button>
            </div>
        </form>
    </div>

</body>
</html>
