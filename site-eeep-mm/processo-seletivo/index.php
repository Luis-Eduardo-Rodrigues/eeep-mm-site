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
                <a href="#" class="hover:text-[#00853B] transition-colors">PROCESSO SELETIVO</a>
            </div>
        </div>

        <div class="relative w-full max-w-sm mt-4 md:mt-0">
            <input type="text" placeholder="O que você busca?" class="w-full px-4 py-2 pr-10 rounded-full border border-[#204D37] focus:outline-none focus:ring-2 focus:ring-[#00853B]" />
            <i class="bi bi-search absolute top-1/2 right-4 transform -translate-y-1/2 text-white bg-[#00853B] rounded-full px-3 py-1"></i>
        </div>
    </nav>

    <div class="flex flex-col md:flex-row items-start md:items-center space-x-0 md:space-x-8 mx-4 md:mx-14 mt-8 md:mt-14">
        <img src="./imgs/image.png" alt="Icone de documento" class="w-12 h-12 md:w-15 md:h-15 mt-2 md:mt-5 mb-4 md:mb-0 mx-auto md:mx-0">
        <div class="hidden md:block h-20 md:h-25 border-r-2 md:border-r-5 border-green-700"></div>
        <p class="text-2xl md:text-4xl mt-2 text-center md:text-left">Processo seletivo - <br class="md:hidden"> EEEP Manoel Mano 2025/2026</p>
    </div>

    <div class="mx-4 md:mx-20 mt-8 md:mt-14">
        <p class="text-base md:text-lg text-justify">
            Com grande alegria que divulgamos à população dos Sertões de Crateús o processo seletivo para novatos da
            Escola Estadual de Educação Profissional Manoel Mano. As inscrições para interessados começam no dia **29 de
            Novembro** até o dia **08 de Dezembro de 2023**.
            <br><br>
            Abaixo segue o edital com mais detalhes e a arte de divulgação com a documentação necessária.
        </p>

        <div class="bg-gradient-to-r from-[#204D37] to-[#00853B] text-white font-bold rounded cursor-pointer w-full max-w-xs py-2 mt-6 mx-auto md:mx-5 text-center transition-transform transform hover:scale-105">
            <a href="../arquivos/EP-MMANO2025.pdf" download class="block w-full h-full">Baixar edital</a>
        </div>

    </div>

    <footer class="bg-gray-100 py-8 md:py-12 mt-12 md:mt-[60px]">
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