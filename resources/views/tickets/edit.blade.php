<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ticket - Kairós</title>
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

    <header class="flex items-center gap-4 mb-10">
        <img src="{{ asset('imagens/logo-kairos.png') }}" alt="Kairós Logo" class="h-20 drop-shadow-xl">
    </header>

    <div class="w-full max-w-2xl bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/20">

        <h2 class="text-3xl font-bold mb-8 text-center text-[var(--kairos-gray-light)]">
            Editar Ticket
        </h2>

        <form action="{{ route('tickets.update', $tickets->id) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block font-semibold mb-1">Nome do Ticket:</label>
                <input type="text" name="nome" required
                       value="{{ $tickets->nome }}"
                       class="w-full p-3 rounded-lg bg-white/20 text-white placeholder-gray-300 
                              focus:outline-none focus:ring-2 focus:ring-[var(--kairos-purple)]">
            </div>

            <div>
                <label class="block font-semibold mb-1">Preço:</label>
                <input type="number" step="0.01" name="preco" required
                       value="{{ $tickets->preco }}"
                       class="w-full p-3 rounded-lg bg-white/20 text-white placeholder-gray-300 
                              focus:outline-none focus:ring-2 focus:ring-[var(--kairos-purple)]">
            </div>

            <div>
                <label class="block font-semibold mb-1">Quantidade:</label>
                <input type="number" name="quantidade" required
                       value="{{ $tickets->quantidade }}"
                       class="w-full p-3 rounded-lg bg-white/20 text-white placeholder-gray-300 
                              focus:outline-none focus:ring-2 focus:ring-[var(--kairos-purple)]">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block font-semibold mb-1">Início das Vendas:</label>
                    <input type="date" name="inicio" required
                           value="{{ $tickets->inicio }}"
                           class="w-full p-3 rounded-lg bg-white/20 text-white 
                                  focus:outline-none focus:ring-2 focus:ring-[var(--kairos-purple)]">
                </div>

                <div>
                    <label class="block font-semibold mb-1">Fim das Vendas:</label>
                    <input type="date" name="fim" required
                           value="{{ $tickets->fim }}"
                           class="w-full p-3 rounded-lg bg-white/20 text-white 
                                  focus:outline-none focus:ring-2 focus:ring-[var(--kairos-purple)]">
                </div>
            </div>

            <div class="flex justify-between items-center mt-6">
                <a href="{{ route('tickets.index') }}"
                   class="px-6 py-3 rounded-xl bg-gray-600 hover:bg-gray-700 transition font-semibold shadow">
                    Voltar
                </a>

                <button type="submit"
                        class="px-6 py-3 rounded-xl bg-[var(--kairos-purple)] hover:bg-[var(--kairos-purple-dark)] 
                               transition font-semibold shadow">
                    Salvar Alterações
                </button>
            </div>

        </form>
    </div>

</body>
</html>
