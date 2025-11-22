<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Evento - Kairós</title>
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

    <!-- LOGO + HEADER -->
    <header class="flex items-center gap-4 mb-10">
        <img src="{{ asset('imagens/logo-kairos.png') }}" alt="Kairós Logo" class="h-20 drop-shadow-xl">
    </header>

    <!-- CARD DO FORM -->
    <div class="w-full max-w-2xl bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/20">
        <h2 class="text-3xl font-bold mb-8 text-center text-[var(--kairos-gray-light)]">Criar Novo Evento</h2>

        <form action="{{ route('events.store') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Nome -->
            <div>
                <label class="block font-semibold mb-1">Nome:</label>
                <input type="text" name="title" required
                       class="w-full p-3 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[var(--kairos-purple)]">
            </div>

            <!-- Descrição -->
            <div>
                <label class="block font-semibold mb-1">Descrição:</label>
                <textarea name="description" rows="4"
                          class="w-full p-3 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[var(--kairos-purple)]"></textarea>
            </div>

            <!-- Data Inicial e Término -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block font-semibold mb-1">Data Inicial:</label>
                    <input type="date" name="start_date" required
                           class="w-full p-3 rounded-lg bg-white/20 text-white focus:outline-none focus:ring-2 focus:ring-[var(--kairos-purple)]">
                </div>
                <div>
                    <label class="block font-semibold mb-1">Data de Término:</label>
                    <input type="date" name="end_date"
                           class="w-full p-3 rounded-lg bg-white/20 text-white focus:outline-none focus:ring-2 focus:ring-[var(--kairos-purple)]">
                </div>
            </div>

            <!-- Local -->
            <div>
                <label class="block font-semibold mb-1">Local:</label>
                <input type="text" name="location"
                       class="w-full p-3 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[var(--kairos-purple)]">
            </div>

            <!-- Status -->
            <div>
                <label class="block font-semibold mb-1">Status:</label>
                <select name="status"
                        class="w-full p-3 rounded-lg bg-white/20 text-white focus:outline-none focus:ring-2 focus:ring-[var(--kairos-purple)]">
                    <option value="ativo" class="text-black">Ativo</option>
                    <option value="encerrado" class="text-black">Encerrado</option>
                    <option value="cancelado" class="text-black">Cancelado</option>
                </select>
            </div>

            <!-- BOTÕES -->
            <div class="flex justify-between items-center mt-6">
                <a href="{{ route('events.index') }}"
                   class="px-6 py-3 rounded-xl bg-gray-600 hover:bg-gray-700 transition font-semibold shadow">
                    Voltar
                </a>
                <button type="submit"
                        class="px-6 py-3 rounded-xl bg-[var(--kairos-purple)] hover:bg-[var(--kairos-purple-dark)] transition font-semibold shadow">
                    Salvar Evento
                </button>
            </div>
        </form>
    </div>

</body>
</html>
