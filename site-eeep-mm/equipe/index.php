<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEEP Manoel Mano - Site Oficial</title>
    <link rel="shortcut icon" href="../imgs/logos-escola/logo-escola-s.png" type="image/x-icon">
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
        @media(max-width: 760px){
            #logoEscola{
                visibility: hidden;
            }
        }
    </style>
</head>

<body>

    <header class="w-full flex bg-gradient-to-r from-[#204D37] to-[#00853B] py-4">
    </header>

    <nav class="bg-white w-full flex flex-col md:flex-row items-center justify-between py-4 px-6 md:py-6 md:px-12 font-bold text-lg text-[#204D37]">
        <div class="flex flex-col md:flex-row items-center gap-3 mb-4 md:mb-0">
            <a href="../index.php">
                <div class="flex items-center gap-2">
                    <img
                        src="../imgs/logos-escola/logo-escola-s.png"
                        alt="Logo da Escola Manoel Mano"
                        class="w-12 h-12 md:w-16 md:h-16 lg:w-20 lg:h-20"
                    />
                    <img
                        src="../imgs/logos-escola/brasao.svg"
                        alt="Brasão"
                        class="w-12 h-12 md:w-16 md:h-16 lg:w-20 lg:h-20"
                    />
                </div>
            </a>
            <div class="flex flex-col md:flex-row items-center gap-3 mt-2 md:mt-0">
                <a href="../escola/index.php" class="hover:text-[#00853B] transition-colors">ESCOLA</a>
                <div class="hidden md:block w-[3px] h-[18px] bg-[#00853B]"></div>
                <a href="../grupo_gestor/index.php" class="hover:text-[#00853B] transition-colors">GRUPO GESTOR</a>
                <div class="hidden md:block w-[3px] h-[18px] bg-[#00853B]"></div>
                <a href="../processo-seletivo/index.php" class="hover:text-[#00853B] transition-colors">PROCESSO SELETIVO</a>
            </div>
        </div>

        <div id="barra-pesquisa" class="relative w-full max-w-sm mt-4 md:mt-0">
            <input id="procurar" type="text" placeholder="O que você busca?" class="w-full px-4 py-2 pr-10 rounded-full border border-[#204D37] focus:outline-none focus:ring-2 focus:ring-[#00853B]" />
            <i class="bi bi-search absolute top-1/2 right-4 transform -translate-y-1/2 text-white bg-[#00853B] rounded-full px-3 py-1"></i>
        </div>
    </nav>

    <section class="relative shadow-md">
        <div class="w-full h-[250px] md:h-[400px] bg-gray-200 relative overflow-hidden">
            <img src="../imgs/banners/equipe.jpg" alt="Imagem de fundo da equipe de desenvolvimento" class="object-cover w-full h-full transition-opacity duration-1000" />


            <div class="absolute bottom-0 left-0 right-0 text-white p-2 px-2 bg-gradient-to-t from-black/60 to-transparent">
                <div class="container mx-auto flex flex-col md:flex-row items-center gap-4">
                    <div class="rounded-full mb-2 md:mb-0">
                        <img src="../imgs/logos-escola/logo-escola-s.png" alt="Logo da Escola Manoel Mano" class="w-20 h-20 md:w-24 md:h-24" id="logoEscola">
                    </div>
                    <div class="max-w-full text-center md:text-left">
                        <h1 class="text-2xl md:text-3xl font-bold cursor-default">Time de Desenvolvimento</h1>
                        <div class="flex items-center justify-center md:justify-start gap-2 text-sm md:text-base">
                            <a class="hover:underline" href="../index.php">Início</a>
                            <span>></span>
                            <a class="hover:underline" href="#">Equipe de Desenvolvimento</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-6 md:p-12">
        <div class="container mx-auto px-4">
            <div class="mb-5">
                <h2 class="text-2xl md:text-3xl font-bold text-[#204D37] titulos">Sobre o projeto</h2>
                <div class="w-24 md:w-32 h-1 bg-[#00853B] mt-2"></div>
            </div>
            <div class="w-full md:w-3/4 lg:w-1/2 mb-12">
                <p class="text-gray-700 text-base md:text-lg text-justify">
                    O site da EEEP Manoel Mano foi desenvolvido por alunos dos cursos técnicos em Informática, como parte da disciplina de "<b>Laboratório de Software</b>". O objetivo foi criar uma plataforma moderna e funcional para divulgar informações sobre a escola, seus cursos e atividades.
                    Todo o processo de desenvolvimento, desde o planejamento até a implementação, foi realizado pelos alunos, sob orientação dos professores. O projeto proporcionou uma experiência prática de desenvolvimento de software, aplicando os conhecimentos adquiridos durante o curso.
                </p>
            </div>

            <div class="mb-5">
                <h2 class="text-2xl md:text-3xl font-bold text-[#204D37] titulos">Desenvolvedores</h2>
                <div class="w-24 md:w-32 h-1 bg-[#00853B] mt-2"></div>
            </div>

            <div class="container flex items-center justify-center gap-4 md:gap-6 flex-wrap">

                <div class="w-full transition shadow-md hover:cursor-pointer bg-white p-4 flex flex-col sm:flex-row items-center gap-4 sm:gap-12 rounded-md text-center sm:text-left">
                    <div>
                        <img src="../imgs/avatar/avatar-homem.png" alt="Foto profissional" class="w-16 h-16 rounded-full mx-auto sm:mx-0">
                    </div>
                    <div class="flex flex-col sm:flex-row items-center gap-2 sm:gap-4">
                        <p class="font-bold text-[#00853B] text-sm md:text-base">CARLOS HENRIQUE DE OLIVEIRA</p>
                        <div class="w-[16px] h-[3px] sm:w-[4px] sm:h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B] text-sm md:text-base">Documentação do projeto</p>
                        <div class="w-[16px] h-[3px] sm:w-[4px] sm:h-[16px] bg-[#00853B]"></div>
                        <div class="flex items-center gap-3">
                            <a class="text-xl md:text-2xl text-[#00853B] hover:text-[#005a27]" href="#" target="_blank"><i class="bi bi-github"></i></a>
                            <a class="text-xl md:text-2xl text-[#00853B] hover:text-[#005a27]" href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="w-full transition shadow-md hover:cursor-pointer bg-white p-4 flex flex-col sm:flex-row items-center gap-4 sm:gap-12 rounded-md text-center sm:text-left">
                    <div>
                        <img src="../imgs/avatar/avatar-homem.png" alt="Foto profissional" class="w-16 h-16 rounded-full mx-auto sm:mx-0">
                    </div>
                    <div class="flex flex-col sm:flex-row items-center gap-2 sm:gap-4">
                        <p class="font-bold text-[#00853B] text-sm md:text-base">FRANSCISCO WELLINGTON MIGUEL</p>
                        <div class="w-[16px] h-[3px] sm:w-[4px] sm:h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B] text-sm md:text-base">Documentação do projeto</p>
                        <div class="w-[16px] h-[3px] sm:w-[4px] sm:h-[16px] bg-[#00853B]"></div>
                        <div class="flex items-center gap-3">
                            <a class="text-xl md:text-2xl text-[#00853B] hover:text-[#005a27]" href="#" target="_blank"><i class="bi bi-github"></i></a>
                            <a class="text-xl md:text-2xl text-[#00853B] hover:text-[#005a27]" href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="w-full transition shadow-md hover:cursor-pointer bg-white p-4 flex flex-col sm:flex-row items-center gap-4 sm:gap-12 rounded-md text-center sm:text-left">
                    <div>
                        <img src="../imgs/avatar/avatar-homem.png" alt="Foto profissional" class="w-16 h-16 rounded-full mx-auto sm:mx-0">
                    </div>
                    <div class="flex flex-col sm:flex-row items-center gap-2 sm:gap-4">
                        <p class="font-bold text-[#00853B] text-sm md:text-base">ITHYEL VASCONCELOS CAVALCANTE</p>
                        <div class="w-[16px] h-[3px] sm:w-[4px] sm:h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B] text-sm md:text-base">Desenvolvedor Backend</p>
                        <div class="w-[16px] h-[3px] sm:w-[4px] sm:h-[16px] bg-[#00853B]"></div>
                        <div class="flex items-center gap-3">
                            <a class="text-xl md:text-2xl text-[#00853B] hover:text-[#005a27]" href="#" target="_blank"><i class="bi bi-github"></i></a>
                            <a class="text-xl md:text-2xl text-[#00853B] hover:text-[#005a27]" href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="w-full transition shadow-md hover:cursor-pointer bg-white p-4 flex flex-col sm:flex-row items-center gap-4 sm:gap-12 rounded-md text-center sm:text-left">
                    <div>
                        <img src="../imgs/avatar/avatar-homem.png" alt="Foto profissional" class="w-16 h-16 rounded-full mx-auto sm:mx-0">
                    </div>
                    <div class="flex flex-col sm:flex-row items-center gap-2 sm:gap-4">
                        <p class="font-bold text-[#00853B] text-sm md:text-base">JOÃO MATHEUS GONÇALVES</p>
                        <div class="w-[16px] h-[3px] sm:w-[4px] sm:h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B] text-sm md:text-base">Desenvolvedor Backend</p>
                        <div class="w-[16px] h-[3px] sm:w-[4px] sm:h-[16px] bg-[#00853B]"></div>
                        <div class="flex items-center gap-3">
                            <a class="text-xl md:text-2xl text-[#00853B] hover:text-[#005a27]" href="#" target="_blank"><i class="bi bi-github"></i></a>
                            <a class="text-xl md:text-2xl text-[#00853B] hover:text-[#005a27]" href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="w-full transition shadow-md hover:cursor-pointer bg-white p-4 flex flex-col sm:flex-row items-center gap-4 sm:gap-12 rounded-md text-center sm:text-left">
                    <div>
                        <img src="../imgs/avatar/avatar-homem.png" alt="Foto profissional" class="w-16 h-16 rounded-full mx-auto sm:mx-0">
                    </div>
                    <div class="flex flex-col sm:flex-row items-center gap-2 sm:gap-4">
                        <p class="font-bold text-[#00853B] text-sm md:text-base">JOÃO PAULO MIRANDA</p>
                        <div class="w-[16px] h-[3px] sm:w-[4px] sm:h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B] text-sm md:text-base">Desenvolvedor Frontend</p>
                        <div class="w-[16px] h-[3px] sm:w-[4px] sm:h-[16px] bg-[#00853B]"></div>
                        <div class="flex items-center gap-3">
                            <a class="text-xl md:text-2xl text-[#00853B] hover:text-[#005a27]" href="#" target="_blank"><i class="bi bi-github"></i></a>
                            <a class="text-xl md:text-2xl text-[#00853B] hover:text-[#005a27]" href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="w-full transition shadow-md hover:cursor-pointer bg-white p-4 flex flex-col sm:flex-row items-center gap-4 sm:gap-12 rounded-md text-center sm:text-left">
                    <div>
                        <img src="../imgs/avatar/avatar-homem.png" alt="Foto profissional" class="w-16 h-16 rounded-full mx-auto sm:mx-0">
                    </div>
                    <div class="flex flex-col sm:flex-row items-center gap-2 sm:gap-4">
                        <p class="font-bold text-[#00853B] text-sm md:text-base">LUIS EDUARDO RODRIGUES</p>
                        <div class="w-[16px] h-[3px] sm:w-[4px] sm:h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B] text-sm md:text-base">Desenvolvedor Frontend e UI/UX Design</p>
                        <div class="w-[16px] h-[3px] sm:w-[4px] sm:h-[16px] bg-[#00853B]"></div>
                        <div class="flex items-center gap-3">
                            <a class="text-xl md:text-2xl text-[#00853B] hover:text-[#005a27]" href="#" target="_blank"><i class="bi bi-github"></i></a>
                            <a class="text-xl md:text-2xl text-[#00853B] hover:text-[#005a27]" href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="w-full transition shadow-md hover:cursor-pointer bg-white p-4 flex flex-col sm:flex-row items-center gap-4 sm:gap-12 rounded-md text-center sm:text-left">
                    <div>
                        <img src="../imgs/avatar/avatar.png" alt="Foto profissional" class="w-16 h-16 rounded-full mx-auto sm:mx-0">
                    </div>
                    <div class="flex flex-col sm:flex-row items-center gap-2 sm:gap-4">
                        <p class="font-bold text-[#00853B] text-sm md:text-base">MARILLYA ALVES</p>
                        <div class="w-[16px] h-[3px] sm:w-[4px] sm:h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B] text-sm md:text-base">Scrum Master e UI/UX Design</p>
                        <div class="w-[16px] h-[3px] sm:w-[4px] sm:h-[16px] bg-[#00853B]"></div>
                        <div class="flex items-center gap-3">
                            <a class="text-xl md:text-2xl text-[#00853B] hover:text-[#005a27]" href="#" target="_blank"><i class="bi bi-github"></i></a>
                            <a class="text-xl md:text-2xl text-[#00853B] hover:text-[#005a27]" href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="bg-gray-100 py-8 md:py-12 mt-auto">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center md:text-left">

                <div class="flex flex-col items-center md:items-start">
                    <img src="../imgs/logos-escola/logo-escola-vertical.png" alt="Logo EEEP Manoel Mano" class="w-32 md:w-auto h-24 md:h-32 mb-4" />
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
                        <li><a href="../grupo_gestor/index.php" class="text-gray-600 hover:text-[#00853B]">Professores e grupo gestor</a></li>
                        <li><a href="../escola/index.php" class="text-gray-600 hover:text-[#00853B]">Ambiente da escola</a></li>
                        <li><a href="../equipe/index.php" class="text-gray-600 hover:text-[#00853B]">Time de Desenvolvimento</a></li>
                        <li><a href="../faq/index.php" class="text-gray-600 hover:text-[#00853B]">FAQ</a></li>
                        <li><a href="../processo-seletivo/index.php" class="text-gray-600 hover:text-[#00853B]">Processo Seletivo</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-lg text-[#204D37] mb-4">Contato</h4>
                    <p class="text-gray-600 mb-2">Av. Professora Machadinha Lima - Crateús, CE</p>
                    <p class="text-gray-600 mb-4">(00) 1234-5678</p>
                    <div class="flex justify-center md:justify-start space-x-4">
                        <a href="https://www.instagram.com/eeepmanoelmano/" target="_blank" class="text-[#204D37] hover:text-[#00853B]">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                        <a href="https://www.youtube.com/@eeepmanoelmanocrateus-ce8055/" target="_blank" class="text-[#204D37] hover:text-[#00853B]">
                            <i class="fab fa-youtube text-2xl"></i>
                        </a>
                        <a href="https://www.facebook.com/" target="_blank" class="text-[#204D37] hover:text-[#00853B]">
                            <i class="fab fa-facebook text-2xl"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="border-t border-gray-200 mt-8 pt-6 text-center">
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