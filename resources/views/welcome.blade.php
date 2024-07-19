
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Criminal</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">
    <link href="{{ asset('assets/temp_files/favicon.jpg') }}" rel="shortcut icon"/>

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<body class="bg-white font-family-karla">

    <!-- Top Bar Nav -->
    <nav class="w-full py-4 bg-red-800 shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

            <nav>
                <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="#">Serviços</a></li>
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="#">Sobre</a></li>
                </ul>
            </nav>

            <div class="flex items-center text-lg no-underline text-white pr-6">
                <a class="" href="#">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>

    </nav>

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-4">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
                <img src="{{ asset('assets/temp_files/logo_02.jpg') }}" class="max-h-[25px]" alt="" style="height: 150px">
            </a>
        </div>
    </header>

    <!-- Topic Nav -->
    <nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a
                href="#"
                class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open"
            >
                Tópicos <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div>
        <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Direito Penal</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Direito Processual Penal</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Criminologia</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Legislação Penal</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Jurisprudência</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                    <img src="https://www.pc.pa.gov.br/index/ver-foto-noticia/5316">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Direito Penal</a>
                    <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">Os desafios da Advocacia Criminal na Atualidade</a>
                    <p href="#" class="text-sm pb-8">
                        Por <a href="#" class="font-semibold hover:text-gray-800">Humberto</a>, Publicado em 25 de abril de 2024
                    </p>
                    <h1 class="text-2xl font-bold pb-3">Introdução</h1>
                    <p class="pb-3">A advocacia criminal enfrenta diversos desafios na atualidade, desde a complexidade das leis até a pressão midiática sobre casos de grande repercussão. Neste artigo, exploramos as principais dificuldades enfrentadas pelos advogados criminalistas e como superá-las.</p>
                    <h1 class="text-2xl font-bold pb-3">Desafios da Profissão</h1>
                    <p class="pb-3">A profissão de advogado criminalista é marcada por uma série de desafios, incluindo a necessidade de constante atualização legislativa, a preparação para audiências e julgamentos, e a gestão da pressão e do estresse inerentes à defesa de casos muitas vezes polêmicos.</p>
                    <p class="pb-3">Além disso, a atuação em casos de grande repercussão midiática pode representar um desafio adicional, exigindo do profissional habilidades não só jurídicas, mas também de comunicação e gestão de crises.</p>
                    <p class="pb-3">Outro aspecto relevante é a ética profissional, que deve ser sempre mantida, mesmo em situações de alta pressão ou em casos onde a opinião pública já formou um julgamento prévio.</p>
                    <h1 class="text-2xl font-bold pb-3">Conclusão</h1>
                    <p class="pb-3">A advocacia criminal é uma área do direito que exige muito dos seus profissionais, desde o conhecimento técnico até habilidades emocionais e de comunicação. Enfrentar esses desafios de maneira eficaz pode fazer a diferença na carreira de um advogado criminalista, garantindo não só o sucesso profissional, mas também a justiça para seus clientes.</p>
                </div>
            </article>

            <div class="w-full flex pt-6">
                <a href="#" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
                    <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Anterior</p>
                    <p class="pt-2">Os princípios do Direito Penal</p>
                </a>
                <a href="#" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
                    <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Próximo <i class="fas fa-arrow-right pl-1"></i></p>
                    <p class="pt-2">A importância da Criminologia</p>
                </a>
            </div>

            <div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
                <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
                    <img src="https://lh3.googleusercontent.com/proxy/iU2s7uDIh4FL-0Gc-qkHKfwqHTbAQskFW_vExOofEWtH94wR0gwn0dSlGyXCFKtHdU4T36PTuZRg06py_uNJljYVe2OgqpJc9Iv_aLsXSt7J-o_DJV-n1-cz" class="rounded-full shadow h-32 w-32">
                </div>
                <div class="flex-1 flex flex-col justify-center md:justify-start">
                    <p class="font-semibold text-2xl">Humberto</p>
                    <p class="pt-2">Humberto é um advogado criminalista com mais de 20 anos de experiência. É especialista em direito penal e processual penal, e atua em casos de grande complexidade e repercussão.</p>
                    <div class="flex items-center justify-center md:justify-start text-2xl no-underline text-blue-800 pt-4">
                        <a class="" href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a class="pl-4" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="pl-4" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="pl-4" href="#">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>

        </section>

        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Sobre Nós</p>
                <p class="pb-2">Somos um escritório de advocacia especializado em direito penal, dedicado a defender os direitos dos nossos clientes com ética e profissionalismo. Nossa equipe é composta por advogados experientes e comprometidos com a justiça.</p>
                <a href="#" class="w-full bg-red-800 text-white font-bold text-sm uppercase rounded hover:bg-red-700 flex items-center justify-center px-2 py-3 mt-4">
                    Conheça-nos
                </a>
            </div>

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Categorias</p>
                <ul class="divide-y divide-gray-300">
                    <li class="py-2"><a href="#" class="hover:text-blue-700">Direito Penal</a></li>
                    <li class="py-2"><a href="#" class="hover:text-blue-700">Direito Processual Penal</a></li>
                    <li class="py-2"><a href="#" class="hover:text-blue-700">Criminologia</a></li>
                    <li class="py-2"><a href="#" class="hover:text-blue-700">Legislação Penal</a></li>
                    <li class="py-2"><a href="#" class="hover:text-blue-700">Jurisprudência</a></li>
                </ul>
            </div>

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Redes Sociais</p>
                <div class="flex items-center justify-center">
                    <a class="w-full flex justify-center bg-red-800 text-white font-bold text-sm uppercase rounded hover:bg-red-700 py-2 px-4 mx-2" href="#">
                        Facebook
                    </a>
                    <a class="w-full flex justify-center bg-red-800 text-white font-bold text-sm uppercase rounded hover:bg-red-700 py-2 px-4 mx-2" href="#">
                        Instagram
                    </a>
                    <a class="w-full flex justify-center bg-red-800 text-white font-bold text-sm uppercase rounded hover:bg-red-700 py-2 px-4 mx-2" href="#">
                        Twitter
                    </a>
                    <a class="w-full flex justify-center bg-red-800 text-white font-bold text-sm uppercase rounded hover:bg-red-700 py-2 px-4 mx-2" href="#">
                        LinkedIn
                    </a>
                </div>
            </div>

        </aside>

    </div>

    <footer class="w-full border-t bg-white pb-12">
        <div class="relative w-full flex items-center invisible md:visible md:py-12">
            <div class="container mx-auto flex flex-wrap items-center justify-between">
                <ul class="flex mx-auto text-gray-900 font-bold uppercase">
                    <li><a href="#" class="hover:text-gray-700 px-4">Direito Penal</a></li>
                    <li><a href="#" class="hover:text-gray-700 px-4">Direito Processual Penal</a></li>
                    <li><a href="#" class="hover:text-gray-700 px-4">Criminologia</a></li>
                    <li><a href="#" class="hover:text-gray-700 px-4">Legislação Penal</a></li>
                    <li><a href="#" class="hover:text-gray-700 px-4">Jurisprudência</a></li>
                </ul>
            </div>
        </div>
        <div class="w-full container mx-auto flex flex-col items-center">
            <div class="uppercase">&copy; meuadvogado.com.br</div>
            <div class="uppercase">Template por <a href="https://www.tailwindtoolbox.com">Tailwind Toolbox</a></div>
        </div>
    </footer>
</body>

</html>