<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEEP Manoel Mano - Site Oficial</title>
    <link rel="shortcut icon" href="imgs/logo-escola-s.png" type="image/x-icon">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=close" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial
        }
    </style>
</head>

<body>

    <header class="w-full flex bg-gradient-to-r from-[#204D37] to-[#00853B] py-4">
    </header>

    <nav class="bg-white w-full flex items-center justify-between py-6 px-12 font-bold text-lg text-[#204D37]">
        <div class="flex items-center gap-3">
        <a href="index.php">
                <div class="flex items-center gap-2">
                    <img
                        src="./imgs/logo-escola-s.png"
                        alt="Logo da Escola Manoel Mano"
                        class="w-auto h-16 md:h-20"
                    />
                    <img
                        src="./imgs/brasao.svg"
                        alt="Brasão"
                        class="w-16 h-16 md:w-20 md:h-20"
                    />
                </div>
            </a>
            <a href="./escola/index.php" class="hover:text-[#00853B] transition-colors">ESCOLA</a>
            <div class="w-[3px] h-[18px] bg-[#00853B]"></div>
            <a href="./grupo_gestor/index.php" class="hover:text-[#00853B] transition-colors">GRUPO GESTOR</a>
            <div class="w-[3px] h-[18px] bg-[#00853B]"></div>
            <a href="./processo-seletivo/index.php" class="hover:text-[#00853B] transition-colors">PROCESSO SELETIVO</a>
        </div>

        <div id="barra-pesquisa" class="relative w-full max-w-sm">
            <input id="procurar" type="text" placeholder="O que você busca?" class="w-full px-4 py-2 pr-10 rounded-full border border-[#204D37] focus:outline-none focus:ring-2 focus:ring-[#00853B]" />
            <i class="bi bi-search absolute top-1/2 right-4 transform -translate-y-1/2 text-white bg-[#00853B] rounded-full px-3 py-1"></i>
        </div>
    </nav>

    <section class="relative shadow-xl">
        <div class="w-full h-[500px] bg-gray-200 relative overflow-hidden">
            <img id="hero-image" src="" alt="EEEP Manoel Mano" class="object-cover w-full h-full transition-opacity duration-1000" />

            <div class="absolute inset-0"></div>

            <div class="absolute bottom-0 left-0 right-0 text-white p-2 px-2 bg-gradient-to-t from-black/60 to-transparent">
                <div class="container mx-auto flex items-center gap-2">
                    <div>
                        <img src="imgs/logo-escola-s.png" alt="Logo da Escola Manoel Mano" class="w-auto h-24">
                    </div>
                    <div class="max-w-2xl">
                        <h1 class="text-3xl md:text-2xl font-bold mb-2">EEEP Manoel Mano</h1>
                        <p class="text-lg md:text-xl">Educação profissional de qualidade para um futuro brilhante.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-gray-50 pb-12">
        <div class="container mx-auto px-4">
            <div class="py-12">
                <h2 class="text-3xl font-bold text-[#204D37] titulos">Nossos cursos</h2>
                <div class="w-32 h-1 bg-[#00853B] mt-2"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">

                <a href="./cursos/enfermagem.php" id="enfCard">
                    <div class="group cursor-pointer">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 group-hover:transform group-hover:scale-105">
                            <div class="h-40 relative overflow-hidden">
                                <img src="imgs/logo_cursos-pb/enfermagem.png" id="enfCardImg" alt="ENFERMAGEM" class="object-contain p-4 relative z-10 transition-transform duration-500 group-hover:scale-110 w-full h-full" />
                                <div class="absolute inset-0 bg-gradient-to-t from-[#204D37] to-[#00853B] opacity-0 group-hover:opacity-20 transition-opacity duration-300 z-0"></div>
                            </div>
                            <div class="p-4 text-center bg-[#204D37] text-white">
                                <h3 class="font-bold titulos">ENFERMAGEM</h3>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="./cursos/informatica.php" id="InfCard">
                    <div class="group cursor-pointer">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 group-hover:transform group-hover:scale-105">
                            <div class="h-40 relative overflow-hidden">
                                <img src="imgs/logo_cursos-pb/informatica.png" id="InfCardImg" alt="INFORMÁTICA" class="object-contain p-4 relative z-10 transition-transform duration-500 group-hover:scale-110 w-full h-full" />
                                <div class="absolute inset-0 bg-gradient-to-t from-[#204D37] to-[#00853B] opacity-0 group-hover:opacity-20 transition-opacity duration-300 z-0"></div>
                            </div>
                            <div class="p-4 text-center bg-[#204D37] text-white">
                                <h3 class="font-bold titulos">INFORMÁTICA</h3>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="./cursos/comercio.php" id="comCard">
                    <div class="group cursor-pointer">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 group-hover:transform group-hover:scale-105">
                            <div class="h-40 relative overflow-hidden">
                                <img src="imgs/logo_cursos-pb/comercio.png" id="comCardImg" alt="COMÉRCIO" class="object-contain p-4 relative z-10 transition-transform duration-500 group-hover:scale-110 w-full h-full" />
                                <div class="absolute inset-0 bg-gradient-to-t from-[#204D37] to-[#00853B] opacity-0 group-hover:opacity-20 transition-opacity duration-300 z-0"></div>
                            </div>
                            <div class="p-4 text-center bg-[#204D37] text-white">
                                <h3 class="font-bold titulos">COMÉRCIO</h3>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="./cursos/desenvolvimento.php" id="dsCard">
                    <div class="group cursor-pointer">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 group-hover:transform group-hover:scale-105">
                            <div class="h-40 relative overflow-hidden">
                                <img src="imgs/logo_cursos-pb/ds.png" id="dsCardImg" alt="DESENVOLVIMENTO DE SISTEMAS" class="object-contain p-4 relative z-10 transition-transform duration-500 group-hover:scale-110 w-full h-full" />
                                <div class="absolute inset-0 bg-gradient-to-t from-[#204D37] to-[#00853B] opacity-0 group-hover:opacity-20 transition-opacity duration-300 z-0"></div>
                            </div>
                            <div class="p-4 text-center bg-[#204D37] text-white">
                                <h3 class="font-bold titulos">DESENV. DE SISTEMAS</h3>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="./cursos/administracao.php">
                    <div class="group cursor-pointer">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 group-hover:transform group-hover:scale-105">
                            <div class="h-40 relative overflow-hidden">
                                <img src="imgs/logo_cursos-pb/adm.png" alt="ADMINISTRAÇÃO" class="object-contain p-4 relative z-10 transition-transform duration-500 group-hover:scale-110 w-full h-full" />
                                <div class="absolute inset-0 bg-gradient-to-t from-[#204D37] to-[#00853B] opacity-0 group-hover:opacity-20 transition-opacity duration-300 z-0"></div>
                            </div>
                            <div class="p-4 text-center bg-[#204D37] text-white">
                                <h3 class="font-bold titulos">ADMINISTRAÇÃO</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="mb-10">
                <h2 class="text-3xl font-bold text-[#204D37] titulos">ENEM e Vestibulares</h2>
                <div class="w-32 h-1 bg-[#00853B] mt-2"></div>
            </div>

            <div class="flex flex-col md:flex-row items-center gap-10">
                <div class="w-full md:w-1/2">
                    <img src="" alt="Estudantes se preparando para o ENEM" class="rounded-lg shadow-lg w-full h-auto object-cover" width="600" height="400" />
                </div>
                <div class="w-full md:w-1/2">
                    <p class="text-lg leading-relaxed text-gray-700 mb-6">
                        A EEEP Manoel Mano fornece para os seus alunos, além do ensino técnico, o melhor aprendizado na base comum,
                        para que esses tenham um ótimo desempenho no Exame Nacional do Ensino Médio (ENEM) e em outros vestibulares.
                        Ao clicar no botão abaixo, você será direcionado(a) para a página do Índice de Desenvolvimento da Educação
                        Básica (Ideb). Assim, poderás ver os nossos resultados e conhecer um pouco mais sobre nós!
                    </p>
                    <a href="https://qedu.org.br/escola/23085592-eeep-manoel-mano/ideb" target="__blank" class="inline-block bg-gradient-to-r from-[#204D37] to-[#00853B] text-white font-bold rounded-md px-6 py-3 hover:opacity-90 transition-opacity">
                        Classificação IDEB
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-gradient-to-r from-[#204D37] to-[#00853B] p-12 mt-4">
        <div>
            <h2 class="text-3xl font-bold text-white titulos">Aprovações</h2>
            <div class="w-32 h-1 bg-white mt-2"></div>
        </div>
        <div class="flex items-center">
            <div>
                <button class="text-3xl cursor-pointer text-white bg-white/20 p-2 rounded-full text-center"><i class="bi bi-chevron-left"></i></button>
            </div>
            <div class="flex items-center justify-center gap-8 flex-grow mt-4">
                <div class="flex items-center flex-col gap-2">
                    <div class="bg-white w-72 h-72"></div>
                    <div class="flex flex-col items-center">
                        <p class="font-bold text-lg text-white">Luis Eduardo Rodrigues</p>
                        <p class="font-bold text-lg text-white">Análise e Desenvolvimento de Sistemas</p>
                        <p class="font-bold text-lg text-white">FPO</p>
                    </div>
                </div>
                <div class="flex items-center flex-col gap-2">
                    <div class="bg-white w-72 h-72"></div>
                    <div class="flex flex-col items-center">
                        <p class="font-bold text-lg text-white">João Paulo Alves</p>
                        <p class="font-bold text-lg text-white">Sistema de Informação</p>
                        <p class="font-bold text-lg text-white">UFC</p>
                    </div>
                </div>
                <div class="flex items-center flex-col gap-2">
                    <div class="bg-white w-72 h-72"></div>
                    <div class="flex flex-col items-center">
                        <p class="font-bold text-lg text-white">Ithyel Cavalcante</p>
                        <p class="font-bold text-lg text-white">Ciência da Computação</p>
                        <p class="font-bold text-lg text-white">UFC</p>
                    </div>
                </div>
            </div>
            <div>
                <button class="text-3xl cursor-pointer text-white bg-white/20 p-2 rounded-full text-center"><i class="bi bi-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="mb-10">
                <h2 class="text-3xl font-bold text-[#204D37] titulos">Acesse também</h2>
                <div class="w-32 h-1 bg-[#00853B] mt-2"></div>
            </div>

            <div class="flex flex-wrap justify-center gap-12">
                <a href="./equipe/index.php" class="group">
                    <div class="flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full bg-gradient-to-r from-[#204D37] to-[#00853B] flex items-center justify-center mb-4 transition-transform duration-300 group-hover:scale-110">
                            <img src="imgs/equipe.png" alt="Time de desenvolvimento" width="60" height="60" />
                        </div>
                        <h3 class="text-lg font-bold text-[#204D37] titulos">Time de desenvolvimento</h3>
                    </div>
                </a>

                <a href="./faq/index.php" class="group">
                    <div class="flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full bg-gradient-to-r from-[#204D37] to-[#00853B] flex items-center justify-center mb-4 transition-transform duration-300 group-hover:scale-110">
                            <img src="imgs/faq.png" alt="FAQ" width="60" height="60" />
                        </div>
                        <h3 class="text-lg font-bold text-[#204D37] titulos">FAQ</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <footer class="bg-gray-100 py-12 mt-auto">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

                <div class="flex flex-col items-center md:items-start">
                    <img src="imgs/logo-escola-vertical.png" alt="Logo EEEP Manoel Mano" width="180" height="120" class="mb-4" />
                </div>

                <div>
                    <h4 class="font-bold text-lg text-[#204D37] mb-4">Cursos</h4>
                    <ul class="space-y-2">
                        <li><a href="./cursos/enfermagem.php" class="text-gray-600 hover:text-[#00853B]">Enfermagem</a></li>
                        <li><a href="./cursos/informatica.php" class="text-gray-600 hover:text-[#00853B]">Informática</a></li>
                        <li><a href="./cursos/comercio.php" class="text-gray-600 hover:text-[#00853B]">Comércio</a></li>
                        <li><a href="./cursos/desenvolvimento.php" class="text-gray-600 hover:text-[#00853B]">Desenvolvimento de Sistemas</a></li>
                        <li><a href="./cursos/administracao.php" class="text-gray-600 hover:text-[#00853B]">Administração</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-lg text-[#204D37] mb-4">Links Úteis</h4>
                    <ul class="space-y-2">
                        <li><a href="grupo_gestor/index.php" class="text-gray-600 hover:text-[#00853B]">Professores e grupo gestor</a></li>
                        <li><a href="escola/index.php" class="text-gray-600 hover:text-[#00853B]">Ambiente da escola</a></li>
                        <li><a href="equipe/index.php" class="text-gray-600 hover:text-[#00853B]">Time de Desenvolvimento</a></li>
                        <li><a href="faq/index.php" class="text-gray-600 hover:text-[#00853B]">FAQ</a></li>
                        <li><a href="processo-seletivo/index.php" class="text-gray-600 hover:text-[#00853B]">Processo Seletivo</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-lg text-[#204D37] mb-4">Contato</h4>
                    <p class="text-gray-600 mb-4">Av. Professora Machadinha Lima - Crateús, CE</p>
                    <p class="text-gray-600 mb-4">(00) 1234-5678</p>
                    <div class="flex space-x-4">
                        <a href="https://www.instagram.com/eeepmanoelmano/" target="_blank" class="text-[#204D37] hover:text-[#00853B]">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                        <a href="https://www.youtube.com/@eeepmanoelmanocrateus-ce8055/" target="_blank" class="text-[#204D37] hover:text-[#00853B]">
                            <i class="fab fa-youtube text-2xl"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="border-t border-gray-200 mt-12 pt-6 text-center">
                <p class="text-gray-600">
                    © <script>
                        document.write(new Date().getFullYear());
                    </script> EEEP Manoel Mano. Todos os direitos reservados.
                </p>
            </div>
        </div>
    </footer>
    <script src="./script.js"></script>
</body>

</html>