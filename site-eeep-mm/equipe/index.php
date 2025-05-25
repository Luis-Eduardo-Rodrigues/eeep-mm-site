<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEEP Manoel Mano - Site Oficial</title>
    <link rel="shortcut icon" href="../imgs/logo-escola-s.png" type="image/x-icon">
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
        <a href="../index.php">
                <div class="flex items-center gap-2">
                    <img
                        src="../imgs/logo-escola-s.png"
                        alt="Logo da Escola Manoel Mano"
                        class="w-auto h-16 md:h-20"
                    />
                    <img
                        src="../imgs/brasao.svg"
                        alt="Brasão"
                        class="w-16 h-16 md:w-20 md:h-20"
                    />
                </div>
            </a>
            <a href="../escola/index.php" class="hover:text-[#00853B] transition-colors">ESCOLA</a>
            <div class="w-[3px] h-[18px] bg-[#00853B]"></div>
            <a href="../grupo_gestor/index.php" class="hover:text-[#00853B] transition-colors">GRUPO GESTOR</a>
            <div class="w-[3px] h-[18px] bg-[#00853B]"></div>
            <a href="../processo-seletivo/index.php" class="hover:text-[#00853B] transition-colors">PROCESSO SELETIVO</a>
        </div>

        <div id="barra-pesquisa" class="relative w-full max-w-sm">
            <input id="procurar" type="text" placeholder="O que você busca?" class="w-full px-4 py-2 pr-10 rounded-full border border-[#204D37] focus:outline-none focus:ring-2 focus:ring-[#00853B]" />
            <i class="bi bi-search absolute top-1/2 right-4 transform -translate-y-1/2 text-white bg-[#00853B] rounded-full px-3 py-1"></i>
        </div>
    </nav>

    <section class="relative shadow-md">
        <div class="w-full h-[400px] bg-gray-200 relative overflow-hidden">
            <img src="" alt="" class="object-cover w-full h-full transition-opacity duration-1000" />

            <div class="absolute inset-0"></div>

            <div class="absolute bottom-0 left-0 right-0 text-white p-2 px-2 bg-gradient-to-t from-black/60 to-transparent">
                <div class="container mx-auto flex items-center gap-4">
                    <div class="rounded-full">
                        <img src="../imgs/logo-escola-s.png" alt="Logo da Escola Manoel Mano" class="w-24 h-24">
                    </div>
                    <div class="max-w-2xl">
                        <h1 class="text-3xl md:text-2xl font-bold cursor-default">Time de Desenvolvimento</h1>
                        <div class="flex items-center gap-2">
                            <a class="hover:underline" href="../index.php">Início</a>
                            <span>></span>
                            <a class="hover:underline" href="#">Time de Desenvolvimento</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-12">
        <div class="container mx-auto px-4">
            <div class="mb-5">
                <h2 class="text-3xl font-bold text-[#204D37] titulos">Sobre o projeto</h2>
                <div class="w-32 h-1 bg-[#00853B] mt-2"></div>
            </div>
            <div class="w-1/2 mb-12">
                <p class="text-gray-700 text-lg">
                    O site da EEEP Manoel Mano foi desenvolvido por alunos dos cursos técnicos em Informática, como parte da disciplina de "<b>Laboratório de Software</b>". O objetivo foi criar uma plataforma moderna e funcional para divulgar informações sobre a escola, seus cursos e atividades.
                    Todo o processo de desenvolvimento, desde o planejamento até a implementação, foi realizado pelos alunos, sob orientação dos professores. O projeto proporcionou uma experiência prática de desenvolvimento de software, aplicando os conhecimentos adquiridos durante o curso.
                </p>
            </div>

            <div class="mb-5">
                <h2 class="text-3xl font-bold text-[#204D37] titulos">Desenvolvedores</h2>
                <div class="w-32 h-1 bg-[#00853B] mt-2"></div>
            </div>

            <div class="container flex items-center justify-center gap-6 flex-wrap">

                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-[300px]">
                    <div class="h-64 relative">
                        <img src="" alt="">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#204D37]">Carlos Henrique de Oliveira</h3>
                        <p class="text-[#00853B] font-medium mb-4">Desenvolvedor</p>
                        <p class="text-gray-700 mb-4">Responsável</p>
                        <div class="flex items-center gap-4">
                            <a href="github.com/Luis-Eduardo-Rodrigues" target="_blank" class="text-gray-700 hover:text-[#204D37] transition-colors">Github</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-[300px]">
                    <div class="h-64 relative">
                        <img src="" alt="">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#204D37]">Franscisco Wellington Miguel</h3>
                        <p class="text-[#00853B] font-medium mb-4">Desenvolvedor</p>
                        <p class="text-gray-700 mb-4">Responsável</p>
                        <div class="flex items-center gap-4">
                            <a href="" target="_blank" class="text-gray-700 hover:text-[#204D37] transition-colors">Github</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-[300px]">
                    <div class="h-64 relative">
                        <img src="" alt="">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#204D37]">Ithyel Cavalcante</h3>
                        <p class="text-[#00853B] font-medium mb-4">Desenvolvedor Backend</p>
                        <p class="text-gray-700 mb-4">Responsável</p>
                        <div class="flex items-center gap-4">
                            <a href="" target="_blank" class="text-gray-700 hover:text-[#204D37] transition-colors">Github</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-[300px]">
                    <div class="h-64 relative">
                        <img src="" alt="">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#204D37]">João Matheus Gonçalves</h3>
                        <p class="text-[#00853B] font-medium mb-4">Desenvolvedor Backend</p>
                        <p class="text-gray-700 mb-4">Responsável</p>
                        <div class="flex items-center gap-4">
                            <a href="" target="_blank" class="text-gray-700 hover:text-[#204D37] transition-colors">Github</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-[300px]">
                    <div class="h-64 relative">
                        <img src="" alt="">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#204D37]">João Paulo Alves</h3>
                        <p class="text-[#00853B] font-medium mb-4">Desenvolvedor Frontend</p>
                        <p class="text-gray-700 mb-4">Responsável pelo design e implementação da interface do usuário.</p>
                        <div class="flex items-center gap-4">
                            <a href="" target="_blank" class="text-gray-700 hover:text-[#204D37] transition-colors">Github</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-[300px]">
                    <div class="h-64 relative">
                        <img src="" alt="">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#204D37]">Luis Eduardo Rodrigues</h3>
                        <p class="text-[#00853B] font-medium mb-4">Desenvolvedor Frontend</p>
                        <p class="text-gray-700 mb-4">Responsável pelo design e implementação da interface do usuário.</p>
                        <div class="flex items-center gap-4">
                            <a href="" target="_blank" class="text-gray-700 hover:text-[#204D37] transition-colors">Github</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-[300px]">
                    <div class="h-64 relative">
                        <img src="" alt="">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#204D37]">Marillya Alves</h3>
                        <p class="text-[#00853B] font-medium mb-4">UI/UX Design</p>
                        <p class="text-gray-700 mb-4">Responsável pelo design visual e experiência do usuário.</p>
                        <div class="flex items-center gap-4">
                            <a href="" target="_blank" class="text-gray-700 hover:text-[#204D37] transition-colors">Github</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="bg-gray-100 py-12 mt-auto">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

                <div class="flex flex-col items-center md:items-start">
                    <img src="../imgs/logo-escola-vertical.png" alt="Logo EEEP Manoel Mano" width="180" height="120" class="mb-4" />
                </div>

                <div>
                    <h4 class="font-bold text-lg text-[#204D37] mb-4">Cursos</h4>
                    <ul class="space-y-2">
                        <li><a href="../cursos/enfermagem.php" class="text-gray-600 hover:text-[#00853B]">Enfermagem</a></li>
                        <li><a href="../cursos/informatica.php" class="text-gray-600 hover:text-[#00853B]">Informática</a></li>
                        <li><a href="../cursos/comercio.php" class="text-gray-600 hover:text-[#00853B]">Comércio</a></li>
                        <li><a href="../cursos/desenvolvimento.php" class="text-gray-600 hover:text-[#00853B]">Desenvolvimento de Sistemas</a></li>
                        <li><a href="../cursos/administracao.php" class="text-gray-600 hover:text-[#00853B]">Administração</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-lg text-[#204D37] mb-4">Links Úteis</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-[#00853B]">Professores e grupo gestor</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-[#00853B]">Ambiente da escola</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-[#00853B]">Time de Desenvolvimento</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-[#00853B]">FAQ</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-[#00853B]">Processo Seletivo</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-lg text-[#204D37] mb-4">Contato</h4>
                    <p class="text-gray-600 mb-4">Av. Professora Machadinha Lima - Crateús, CE</p>
                    <p class="text-gray-600 mb-4">(00) 1234-5678</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-[#204D37] hover:text-[#00853B]">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                        <a href="#" class="text-[#204D37] hover:text-[#00853B]">
                            <i class="fab fa-youtube text-2xl"></i>
                        </a>
                        <a href="#" class="text-[#204D37] hover:text-[#00853B]">
                            <i class="fab fa-facebook text-2xl"></i>
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

</body>

</html>