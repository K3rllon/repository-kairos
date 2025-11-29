<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets - Kairós</title>
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

    <!-- CABEÇALHO -->
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

        <!-- BANNER -->
        <div 
            class="max-w-5xl mx-auto h-52 rounded-2xl mb-10 shadow-2xl bg-cover bg-center"
            style="background-image: url('{{ asset('imagens/event-banner.jpg') }}');">
        </div>

        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-semibold tracking-wide">Lista de Tickets</h2>

            <a href="#"
               class="bg-[var(--kairos-purple)] hover:bg-[var(--kairos-purple-dark)] transition px-6 py-3 rounded-xl text-white font-semibold shadow-lg">
                + Novo Ticket
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border border-white/10 rounded-xl overflow-hidden">
                <thead class="bg-[var(--kairos-purple)] text-white">
                    <tr>
                        <th class="px-4 py-4 text-left font-medium">Nome</th>
                        <th class="px-4 py-4 text-left font-medium">Preço</th>
                        <th class="px-4 py-4 text-left font-medium">Quantidade</th>
                        <th class="px-4 py-4 text-left font-medium">Início</th>
                        <th class="px-4 py-4 text-left font-medium">Fim</th>
                    </tr>
                </thead>

                <tbody class="bg-white text-black">
                    @foreach ($tickets as $ticket)
                        <tr class="border-b border-gray-200 hover:bg-gray-100 transition">
                            <td class="px-4 py-4">{{ $ticket->nome }}</td>

                            <td class="px-4 py-4">
                                R$ {{ number_format($ticket->preco, 2, ',', '.') }}
                            </td>

                            <td class="px-4 py-4">{{ $ticket->quantidade }}</td>

                            <td class="px-4 py-4">
                                {{ \Carbon\Carbon::parse($ticket->inicio)->format('d/m/Y') }}
                            </td>

                            <td class="px-4 py-4">
                                {{ \Carbon\Carbon::parse($ticket->fim)->format('d/m/Y') }}
                            </td>
                        </tr>
                    @endforeach

                    @if ($tickets->count() === 0)
                        <tr>
                            <td colspan="5" class="px-4 py-6 text-center text-gray-500">
                                Nenhum ticket cadastrado.
                            </td>
                        </tr>
                    @endif
                </tbody>

            </table>
        </div>

    </main>

</body>
</html>
