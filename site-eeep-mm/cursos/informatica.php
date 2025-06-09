<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informática - EEEP Manoel Mano</title>
    <link rel="shortcut icon" href="../imgs/logos-escola/logo-escola-s.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    <header class="w-full bg-gradient-to-r from-[#204D37] to-[#00853B] py-4"></header>
    <nav class="bg-white w-full flex flex-col md:flex-row items-center justify-between py-4 px-4 md:px-8 lg:px-12 font-bold text-[#204D37] shadow-sm">
        <div class="flex flex-col md:flex-row items-center gap-3 mb-4 md:mb-0">
        <a href="../index.php">
                <div class="flex items-center gap-2">
                    <img
                        src="../imgs/logos-escola/logo-escola-s.png"
                        alt="Logo da Escola Manoel Mano"
                        class="w-auto h-16 md:h-20"
                    />
                    <img
                        src="../imgs/logos-escola/brasao.svg"
                        alt="Brasão"
                        class="w-16 h-16 md:w-20 md:h-20"
                    />
                </div>
            </a>
            <div class="flex flex-wrap justify-center gap-3 mt-3 md:mt-0">
                <a href="../escola/index.php" class="hover:text-[#00853B] transition-colors text-sm md:text-base">
                    ESCOLA
                </a>
                <div class="hidden md:block w-[3px] h-[18px] bg-[#00853B]"></div>
                <a href="../grupo_gestor/index.php" class="hover:text-[#00853B] transition-colors text-sm md:text-base">
                    GRUPO GESTOR
                </a>
                <div class="hidden md:block w-[3px] h-[18px] bg-[#00853B]"></div>
                <a href="../processo-seletivo/index.php" class="hover:text-[#00853B] transition-colors text-sm md:text-base">
                    PROCESSO SELETIVO
                </a>
            </div>
        </div>

        <div class="relative w-full max-w-sm">
            <input
                type="text"
                placeholder="O que você busca?"
                class="w-full px-4 py-2 pr-10 rounded-full border border-[#204D37] focus:outline-none focus:ring-2 focus:ring-[#00853B]"
            />
            <div class="absolute top-1/2 right-4 transform -translate-y-1/2 text-white bg-[#00853B] rounded-full p-1">
                <i data-lucide="search" class="w-4 h-4"></i>
            </div>
        </div>
    </nav>
    <section class="relative shadow-md">
  <div class="w-full h-[300px] md:h-[400px] bg-gray-200 relative overflow-hidden">
    <img
      src="../imgs/banners/informatica.jpg"
      alt="Laboratório de Informática"
      class="object-cover object-center w-full h-full transition-opacity duration-1000"
    />

    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>

    <div class="absolute bottom-0 left-0 right-0 text-white p-4 md:p-6">
                <div class="container mx-auto flex items-center gap-4">
                    <div class="rounded-full p-2 hidden md:block">
                        <img
                            src="./logo_cursos/informatica.png"
                            alt="Logo da Informática"
                            class="w-16 h-16 md:w-20 md:h-20"
                        />
                    </div>
                    <div>
                        <h1 class="text-2xl md:text-3xl lg:text-3xl font-bold cursor-default">
                            Curso Técnico em Informática
                        </h1>
                        <div class="flex items-center gap-2 text-sm md:text-base">
                            <a class="hover:underline" href="../index.php">
                                Início
                            </a>
                            <span>›</span>
                            <a class="hover:underline" href="#">
                                Informática
                            </a>
                        </div>
                    </div>
                </div>
            </div>
  </div>
</section>


    <main class="flex-grow">
        <section class="py-8 px-4 md:px-8 lg:px-12 max-w-7xl mx-auto">
            <div class="mb-6">
                <h2 class="text-2xl md:text-3xl font-bold text-[#204D37]">Sobre o curso</h2>
                <div class="w-32 h-1 bg-[#00853B] mt-2"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <div class="lg:col-span-7">
                    <p class="text-justify text-base md:text-lg text-gray-700 leading-relaxed">
                        O curso de Informática tem como principal meta formar profissionais que criem, melhorem e corrijam
                        tecnologias, sejam essas envolvendo hardwares ou softwares. Àquele que escolher essa área terá que:
                        aprender a programar, analisar sistemas, redes de computadores e segurança da informação; desenvolver a
                        capacidade de arquitetar estruturas de softwares e sistemas; estudar linguagens de programação; manter
                        computadores, instalações e configurações de redes locais; acompanhar o desempenho de servidores e
                        serviços de internet; desenvolver projetos de software e serviços de computação e informação; ser atento
                        ao caráter ecológico, social, ético e responsável no exercício de suas atividades na sociedade.
                    </p>
                </div>

                <div class="lg:col-span-5">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="border-l-4 border-[#204D37] shadow-lg rounded-lg overflow-hidden">
                            <div class="p-4 flex items-start gap-3">
                                <i data-lucide="clock" class="text-[#00853B] mt-1 w-6 h-6"></i>
                                <div>
                                    <h3 class="text-lg font-bold text-[#204D37]">Carga Horária</h3>
                                    <p class="text-gray-700">1200 horas</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-[#204D37] shadow-lg rounded-lg overflow-hidden">
                            <div class="p-4 flex items-start gap-3">
                                <i data-lucide="calendar" class="text-[#00853B] mt-1 w-6 h-6"></i>
                                <div>
                                    <h3 class="text-lg font-bold text-[#204D37]">Duração</h3>
                                    <p class="text-gray-700">3 anos</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-[#204D37] shadow-lg rounded-lg overflow-hidden">
                            <div class="p-4 flex items-start gap-3">
                                <i data-lucide="user" class="text-[#00853B] mt-1 w-6 h-6"></i>
                                <div>
                                    <h3 class="text-lg font-bold text-[#204D37]">Coordenação</h3>
                                    <p class="text-gray-700">Adeilson Sales Aragão</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-[#204D37] shadow-lg rounded-lg overflow-hidden">
                            <div class="p-4 flex items-start gap-3">
                                <i data-lucide="monitor" class="text-[#00853B] mt-1 w-6 h-6"></i>
                                <div>
                                    <h3 class="text-lg font-bold text-[#204D37]">Modalidade</h3>
                                    <p class="text-gray-700">Presencial</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-8 px-4 md:px-8 lg:px-12 bg-gray-50">
            <div class="max-w-7xl mx-auto">
                <div class="w-full">
                    <div class="grid w-full grid-cols-2 mb-8 bg-gray-200 rounded-lg p-1">
                        <button 
                            onclick="showTab('disciplinas')" 
                            class="text-base md:text-lg py-2 px-4 rounded-md transition-colors tab-button active bg-[#204D37] text-white"
                            data-tab="disciplinas"
                        >
                            Disciplinas Técnicas
                        </button>
                        <button 
                            onclick="showTab('atuacao')" 
                            class="text-base md:text-lg py-2 px-4 rounded-md transition-colors tab-button"
                            data-tab="atuacao"
                        >
                            Áreas de Atuação
                        </button>
                    </div>

                    <div id="disciplinas" class="tab-content active mt-0">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="shadow-md hover:shadow-lg transition-shadow rounded-lg overflow-hidden">
                                <div class="p-6 flex items-start gap-4">
                                    <i data-lucide="code" class="text-[#00853B] mt-1 w-6 h-6"></i>
                                    <div>
                                        <h3 class="text-lg font-bold text-[#204D37]">Lógica de Programação</h3>
                                        <p class="text-gray-600 mt-2">
                                            Fundamentos de algoritmos e estruturas lógicas para resolução de problemas.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="shadow-md hover:shadow-lg transition-shadow rounded-lg overflow-hidden">
                                <div class="p-6 flex items-start gap-4">
                                    <i data-lucide="globe" class="text-[#00853B] mt-1 w-6 h-6"></i>
                                    <div>
                                        <h3 class="text-lg font-bold text-[#204D37]">HTML e CSS</h3>
                                        <p class="text-gray-600 mt-2">
                                            Desenvolvimento de interfaces web com linguagens de marcação e estilização.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="shadow-md hover:shadow-lg transition-shadow rounded-lg overflow-hidden">
                                <div class="p-6 flex items-start gap-4">
                                    <i data-lucide="server" class="text-[#00853B] mt-1 w-6 h-6"></i>
                                    <div>
                                        <h3 class="text-lg font-bold text-[#204D37]">Programação Web</h3>
                                        <p class="text-gray-600 mt-2">Desenvolvimento de aplicações web dinâmicas e interativas.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="shadow-md hover:shadow-lg transition-shadow rounded-lg overflow-hidden">
                                <div class="p-6 flex items-start gap-4">
                                    <i data-lucide="database" class="text-[#00853B] mt-1 w-6 h-6"></i>
                                    <div>
                                        <h3 class="text-lg font-bold text-[#204D37]">Banco de Dados</h3>
                                        <p class="text-gray-600 mt-2">
                                            Modelagem, implementação e gerenciamento de bancos de dados.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="shadow-md hover:shadow-lg transition-shadow rounded-lg overflow-hidden">
                                <div class="p-6 flex items-start gap-4">
                                    <i data-lucide="network" class="text-[#00853B] mt-1 w-6 h-6"></i>
                                    <div>
                                        <h3 class="text-lg font-bold text-[#204D37]">Redes de Computadores</h3>
                                        <p class="text-gray-600 mt-2">Configuração e manutenção de infraestruturas de redes.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="shadow-md hover:shadow-lg transition-shadow rounded-lg overflow-hidden">
                                <div class="p-6 flex items-start gap-4">
                                    <i data-lucide="briefcase" class="text-[#00853B] mt-1 w-6 h-6"></i>
                                    <div>
                                        <h3 class="text-lg font-bold text-[#204D37]">Estágio Curricular</h3>
                                        <p class="text-gray-600 mt-2">Experiência prática em empresas e organizações do setor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="atuacao" class="tab-content mt-0">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="shadow-md hover:shadow-lg transition-shadow rounded-lg overflow-hidden">
                                <div class="p-6 flex items-start gap-4">
                                    <i data-lucide="building" class="text-[#00853B] mt-1 w-6 h-6"></i>
                                    <div>
                                        <h3 class="text-lg font-bold text-[#204D37]">Empresas de Desenvolvimento</h3>
                                        <p class="text-gray-600 mt-2">Atuação no desenvolvimento de software e aplicações.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="shadow-md hover:shadow-lg transition-shadow rounded-lg overflow-hidden">
                                <div class="p-6 flex items-start gap-4">
                                    <i data-lucide="shopping-bag" class="text-[#00853B] mt-1 w-6 h-6"></i>
                                    <div>
                                        <h3 class="text-lg font-bold text-[#204D37]">Lojas de T.I</h3>
                                        <p class="text-gray-600 mt-2">Suporte técnico e vendas de produtos de tecnologia.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="shadow-md hover:shadow-lg transition-shadow rounded-lg overflow-hidden">
                                <div class="p-6 flex items-start gap-4">
                                    <i data-lucide="briefcase" class="text-[#00853B] mt-1 w-6 h-6"></i>
                                    <div>
                                        <h3 class="text-lg font-bold text-[#204D37]">Órgãos Públicos</h3>
                                        <p class="text-gray-600 mt-2">Suporte e desenvolvimento em instituições governamentais.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="shadow-md hover:shadow-lg transition-shadow rounded-lg overflow-hidden">
                                <div class="p-6 flex items-start gap-4">
                                    <i data-lucide="hard-drive" class="text-[#00853B] mt-1 w-6 h-6"></i>
                                    <div>
                                        <h3 class="text-lg font-bold text-[#204D37]">Suporte e Manutenção</h3>
                                        <p class="text-gray-600 mt-2">Manutenção preventiva e corretiva de equipamentos.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="shadow-md hover:shadow-lg transition-shadow rounded-lg overflow-hidden">
                                <div class="p-6 flex items-start gap-4">
                                    <i data-lucide="file-digit" class="text-[#00853B] mt-1 w-6 h-6"></i>
                                    <div>
                                        <h3 class="text-lg font-bold text-[#204D37]">Processamento de Dados</h3>
                                        <p class="text-gray-600 mt-2">Análise e processamento de grandes volumes de informações.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="shadow-md hover:shadow-lg transition-shadow rounded-lg overflow-hidden">
                                <div class="p-6 flex items-start gap-4">
                                    <i data-lucide="users" class="text-[#00853B] mt-1 w-6 h-6"></i>
                                    <div>
                                        <h3 class="text-lg font-bold text-[#204D37]">Suporte Técnico ao Usuário</h3>
                                        <p class="text-gray-600 mt-2">Atendimento e resolução de problemas para usuários finais.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-8 px-4 md:px-8 lg:px-12 max-w-7xl mx-auto">
    <div class="mb-6">
        <h2 class="text-2xl md:text-3xl font-bold text-[#204D37]">Conheça outros cursos</h2>
        <div class="w-32 h-1 bg-[#00853B] mt-2"></div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-6">
        
        <a href="enfermagem.php">
            <div class="group cursor-pointer">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 group-hover:transform group-hover:scale-105 h-full flex flex-col">
                    <div class="h-32 md:h-40 relative overflow-hidden flex items-center justify-center p-4">
                        <img
                            src="./logo_cursos/enfermagem.png"
                            alt="Enfermagem"
                            class="object-contain relative z-10 transition-transform duration-500 group-hover:scale-110 w-full h-full"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-[#204D37] to-[#00853B] opacity-0 group-hover:opacity-20 transition-opacity duration-300 z-0"></div>
                    </div>
                    <div class="p-3 text-center bg-[#204D37] text-white mt-auto">
                        <h3 class="font-bold text-sm md:text-base truncate">ENFERMAGEM</h3>
                    </div>
                </div>
            </div>
        </a>
        
        <a href="informatica.php">
            <div class="group cursor-pointer">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 group-hover:transform group-hover:scale-105 h-full flex flex-col">
                    <div class="h-32 md:h-40 relative overflow-hidden flex items-center justify-center p-4">
                        <img
                            src="./logo_cursos/informatica.png"
                            alt="Informática"
                            class="object-contain relative z-10 transition-transform duration-500 group-hover:scale-110 w-full h-full"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-[#204D37] to-[#00853B] opacity-0 group-hover:opacity-20 transition-opacity duration-300 z-0"></div>
                    </div>
                    <div class="p-3 text-center bg-[#204D37] text-white mt-auto">
                        <h3 class="font-bold text-sm md:text-base truncate">INFORMÁTICA</h3>
                    </div>
                </div>
            </div>
        </a>
        
        <a href="comercio.php">
            <div class="group cursor-pointer">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 group-hover:transform group-hover:scale-105 h-full flex flex-col">
                    <div class="h-32 md:h-40 relative overflow-hidden flex items-center justify-center p-4">
                        <img
                            src="./logo_cursos/comercio.png"
                            alt="Comércio"
                            class="object-contain relative z-10 transition-transform duration-500 group-hover:scale-110 w-full h-full"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-[#204D37] to-[#00853B] opacity-0 group-hover:opacity-20 transition-opacity duration-300 z-0"></div>
                    </div>
                    <div class="p-3 text-center bg-[#204D37] text-white mt-auto">
                        <h3 class="font-bold text-sm md:text-base truncate">COMÉRCIO</h3>
                    </div>
                </div>
            </div>
        </a>
        
        <a href="desenvolvimento.php">
            <div class="group cursor-pointer">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 group-hover:transform group-hover:scale-105 h-full flex flex-col">
                    <div class="h-32 md:h-40 relative overflow-hidden flex items-center justify-center p-4">
                        <img
                            src="./logo_cursos/desenvolvimento.png"
                            alt="Desenvolvimento de Sistemas"
                            class="object-contain relative z-10 transition-transform duration-500 group-hover:scale-110 w-full h-full"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-[#204D37] to-[#00853B] opacity-0 group-hover:opacity-20 transition-opacity duration-300 z-0"></div>
                    </div>
                    <div class="p-3 text-center bg-[#204D37] text-white mt-auto">
                        <h3 class="font-bold text-sm md:text-base truncate">DESENVOLVIMENTO DE SISTEMAS</h3>
                    </div>
                </div>
            </div>
        </a>
        
        <a href="administracao.php">
            <div class="group cursor-pointer">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 group-hover:transform group-hover:scale-105 h-full flex flex-col">
                    <div class="h-32 md:h-40 relative overflow-hidden flex items-center justify-center p-4">
                        <img
                            src="./logo_cursos/administracao.png"
                            alt="Administração"
                            class="object-contain relative z-10 transition-transform duration-500 group-hover:scale-110 w-full h-full"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-[#204D37] to-[#00853B] opacity-0 group-hover:opacity-20 transition-opacity duration-300 z-0"></div>
                    </div>
                    <div class="p-3 text-center bg-[#204D37] text-white mt-auto">
                        <h3 class="font-bold text-sm md:text-base truncate">ADMINISTRAÇÃO</h3>
                    </div>
                </div>
            </div>
        </a>
    </div>
</section>
    </main>
    <footer class="bg-gray-100 py-8 md:py-12">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="flex flex-col items-center md:items-start">
                    <img
                        src="../imgs/logos-escola/logo-escola-vertical.png"
                        alt="Logo EEEP Manoel Mano"
                        class="mb-4"
                    />
                </div>

                <div>
                    <h4 class="font-bold text-lg text-[#204D37] mb-4">Cursos</h4>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="text-gray-600 hover:text-[#00853B] transition-colors">
                                Enfermagem
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-[#00853B] transition-colors">
                                Informática
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-[#00853B] transition-colors">
                                Comércio
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-[#00853B] transition-colors">
                                Desenvolvimento de Sistemas
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-[#00853B] transition-colors">
                                Administração
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-lg text-[#204D37] mb-4">Links Úteis</h4>
                    <ul class="space-y-2">
                        <li>
                            <a href="../equipe/index.php" class="text-gray-600 hover:text-[#00853B] transition-colors">
                                Professores e grupo gestor
                            </a>
                        </li>
                        <li>
                            <a href="../escola/index.php" class="text-gray-600 hover:text-[#00853B] transition-colors">
                                Ambiente da escola
                            </a>
                        </li>
                        <li>
                            <a href="../equipe/index.php" class="text-gray-600 hover:text-[#00853B] transition-colors">
                                Time de Desenvolvimento
                            </a>
                        </li>
                        <li>
                            <a href="../faq/index.php" class="text-gray-600 hover:text-[#00853B] transition-colors">
                                FAQ
                            </a>
                        </li>
                        <li>
                            <a href="../processo-seletivo/index.php" class="text-gray-600 hover:text-[#00853B] transition-colors">
                                Processo Seletivo
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-lg text-[#204D37] mb-4">Contato</h4>
                    <p class="text-gray-600 mb-4">Av. Professora Machadinha Lima - Crateús, CE</p>
                    <p class="text-gray-600 mb-4">(00) 1234-5678</p>
                    <div class="flex space-x-4">
                        <a
                            href="https://www.instagram.com/eeepmanoelmano/"
                            class="text-[#204D37] hover:text-[#00853B] transition-colors"
                            aria-label="Instagram"
                        >
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                        <a
                            href="https://www.youtube.com/@eeepmanoelmanocrateus-ce8055/"
                            class="text-[#204D37] hover:text-[#00853B] transition-colors"
                            aria-label="YouTube"
                        >
                            <i class="fab fa-youtube text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-200 mt-8 pt-6 text-center">
                <p class="text-gray-600">
                    © <span id="current-year"></span> EEEP Manoel Mano. Todos os direitos reservados.
                </p>
            </div>
        </div>
    </footer>

    <script>
        lucide.createIcons();
        function showTab(tabId) {
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });

            document.getElementById(tabId).classList.add('active');
            
            document.querySelectorAll('.tab-button').forEach(button => {
                button.classList.remove('active');
                button.classList.remove("bg-[#204D37]")
                button.classList.remove("text-white")

                if (button.getAttribute('data-tab') === tabId) {
                    button.classList.add('active');
                    button.classList.add("bg-[#204D37]")
                    button.classList.add("text-white")
                }
            });
        }
        document.getElementById('current-year').textContent = new Date().getFullYear();
    </script>
</body>
</html>