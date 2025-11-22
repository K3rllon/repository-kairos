<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kairós - Início</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        :root {
            --kairos-purple: #56008F;
            --kairos-purple-dark: #3D0066;
            --kairos-amethyst: #230139;
        }
    </style>
</head>

<body class="bg-[var(--kairos-amethyst)] text-white min-h-screen px-6 py-10">

    <!-- CABEÇALHO -->
    <header class="max-w-5xl mx-auto flex justify-between items-center mb-12">
        <div class="flex items-center gap-3">
            <img src="/imagens/logo-kairos.png" class="h-14" alt="Logo">
        </div>

        <nav>
            <ul class="flex gap-8 text-lg font-medium">
                <li><a href="{{ route('events.index') }}" class="hover:opacity-80">Eventos</a></li>
                <li><a href="#" class="hover:opacity-80">Locais</a></li>
                <li><a href="#" class="hover:opacity-80">Artistas</a></li>
                <li><a href="#" class="hover:opacity-80">Lotes</a></li>
                <li><a href="#" class="hover:opacity-80">Reservas</a></li>
                <li><a href="#" class="hover:opacity-80">Sair</a></li>
            </ul>
        </nav>
    </header>

    <!-- CONTEÚDO PRINCIPAL -->
    <main class="max-w-5xl mx-auto bg-white/5 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/10">

        <!-- BANNER -->
        <div 
            class="w-full h-56 rounded-2xl mb-10 shadow-2xl bg-cover bg-center"
            style="background-image: url('/imagens/home-banner.jpg');">
        </div>

        <!-- BEM-VINDO -->
        <h2 class="text-3xl font-bold tracking-wide mb-3">Bem-vindo ao Painel Kairós</h2>
        <p class="text-gray-300 text-lg mb-10 max-w-3xl">
            Aqui você pode gerenciar eventos, lotes, reservas, artistas e locais.  
            Use os atalhos abaixo para navegar entre as principais funcionalidades do sistema.
        </p>

        <!-- CARDS DE NAVEGAÇÃO -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-14">

            <a href="{{ route('events.index') }}"
                class="bg-white/10 border border-white/10 p-6 rounded-2xl shadow-lg hover:bg-white/20 transition cursor-pointer block rounded-2xl">
                <h3 class="text-xl font-semibold">Eventos</h3>
                <p class="text-gray-300 mt-2">Gerencie seus eventos cadastrados.</p>
            </a>

            <div class="bg-white/10 border border-white/10 p-6 rounded-2xl shadow-lg hover:bg-white/20 transition cursor-pointer">
                <h3 class="text-xl font-semibold">Reservas</h3>
                <p class="text-gray-300 mt-2">Acompanhe e controle as reservas.</p>
            </div>

            <div class="bg-white/10 border border-white/10 p-6 rounded-2xl shadow-lg hover:bg-white/20 transition cursor-pointer">
                <h3 class="text-xl font-semibold">Lotes</h3>
                <p class="text-gray-300 mt-2">Gerencie os diferentes lotes de ingressos.</p>
            </div>

        </div>

        <!-- LISTAGEM DE EVENTOS -->

        <div class="flex justify-between items-center mb-6 mt-10">
            <h2 class="text-3xl font-semibold tracking-wide">Seus Eventos</h2>

        </div>

        <div class="overflow-x-auto">
            <table class="w-full border border-white/10 rounded-xl overflow-hidden">
                <thead class="bg-[var(--kairos-purple)] text-white">
                    <tr>
                        <th class="px-4 py-4 text-left font-medium">Título</th>
                        <th class="px-4 py-4 text-left font-medium">Data Inicial</th>
                        <th class="px-4 py-4 text-left font-medium">Local</th>
                        <th class="px-4 py-4 text-left font-medium">Status</th>
                    </tr>
                </thead>

                <tbody class="bg-white text-black">

                    @foreach ($events as $event)
                    <tr class="border-b border-gray-200 hover:bg-gray-100 transition">
                        <td class="px-4 py-4">{{ $event->title }}</td>
                        <td class="px-4 py-4">{{ $event->start_date }}</td>
                        <td class="px-4 py-4">{{ $event->location }}</td>
                        <td class="px-4 py-4">{{ ucfirst($event->status) }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </main>

</body>
</html>
