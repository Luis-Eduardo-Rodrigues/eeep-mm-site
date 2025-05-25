<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imgs/logo-escola-s.png" type="image/x-icon">
    <title>EEEP Manoel Mano - Site Oficial</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=close" />
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
            <input  id="procurar" type="text" placeholder="O que você busca?" class="w-full px-4 py-2 pr-10 rounded-full border border-[#204D37] focus:outline-none focus:ring-2 focus:ring-[#00853B]" />
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
                        <img src="../imgs/logo-escola-s.png" alt="Logo da Escola" class="w-24 h-24">
                    </div>
                    <div class="max-w-2xl">
                        <h1 class="text-3xl md:text-2xl font-bold cursor-default">Professores e Grupo Gestor</h1>
                        <div class="flex items-center gap-2">
                            <a class="hover:underline" href="../index.php">Início</a>
                            <span>></span>
                            <a class="hover:underline" href="#">Professores e Grupo Gestor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full py-12 flex items-center justify-center flex-col gap-4">
        <div class="flex items-center flex-col">
            <h2 class="text-3xl font-bold text-[#204D37] titulos">Nossa equipe</h2>
            <div class="w-32 h-1 bg-[#00853B] mt-2"></div>
        </div>
        <div class="text-center py-4 px-24">
            <p class="text-gray-700 text-xl">
                A EEEP Manoel Mano conta com uma equipe de profissionais qualificados e comprometidos com a educação de qualidade. Conheça nosso grupo gestor e corpo docente, responsáveis pelo sucesso da nossa instituição.
            </p>
        </div>
    </section>

    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="mb-10">
                <h2 class="text-3xl font-bold text-[#204D37] titulos">Grupo Gestor</h2>
                <div class="w-32 h-1 bg-[#00853B] mt-2"></div>
            </div>
            <div class="container w-full h-auto flex justify-center flex-col gap-6">

                <div class="w-full transition hover:shadow-md hover:cursor-pointer bg-zinc-100 p-4 flex items-center gap-12 rounded-md">
                    <div>
                        <img src="../imgs/avatar.png" alt="Foto profissional" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="font-bold text-[#00853B]">POLIANA HOLANDA SARAIVA DE MELO</p>
                        <div class="w-[4px] h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B]">DIRETORA - LICENCIATURA EM PEDAGOGIA (UECE)</p>
                    </div>
                </div>

                <div class="w-full transition hover:shadow-md hover:cursor-pointer bg-zinc-100 p-4 flex items-center gap-12 rounded-md">
                    <div>
                        <img src="../imgs/avatar-homem.png" alt="Foto profissional" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="font-bold text-[#00853B]">GLAYLTON BATISTA DE ALMEIDA</p>
                        <div class="w-[4px] h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B]">COORDENADOR - LICENCIATURA EM QUÍMICA (UECE), MESTRE EM ENSINO DE QUÍMICA (UFC)</p>
                    </div>
                </div>

                <div class="w-full transition hover:shadow-md hover:cursor-pointer bg-zinc-100 p-4 flex items-center gap-12 rounded-md">
                    <div>
                        <img src="../imgs/avatar.png" alt="Foto profissional" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="font-bold text-[#00853B]">GLAYLTON BATISTA DE ALMEIDA</p>
                        <div class="w-[4px] h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B]">COORDENADOR - LICENCIATURA EM QUÍMICA (UECE), MESTRE EM ENSINO DE QUÍMICA (UFC)</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="mb-10">
                <h2 class="text-3xl font-bold text-[#204D37] titulos">Coordenação - Base Técnica</h2>
                <div class="w-32 h-1 bg-[#00853B] mt-2"></div>
            </div>
            <div class="container w-full h-auto flex justify-center flex-col gap-6">

                <div class="w-full transition hover:shadow-md hover:cursor-pointer bg-zinc-100 p-4 flex items-center gap-12 rounded-md">
                    <div>
                        <img src="../imgs/avatar-homem.png" alt="Foto profissional" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="font-bold text-[#00853B]">ADEILSON SALES ARAGÃO</p>
                        <div class="w-[4px] h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B]">CURSO DE INFORMÁTICA E DESENV. DE SISTEMAS - BACHARELADO EM SISTEMA DE INFORMAÇÃO (UFC)</p>
                    </div>
                </div>

                <div class="w-full transition hover:shadow-md hover:cursor-pointer bg-zinc-100 p-4 flex items-center gap-12 rounded-md">
                    <div>
                        <img src="../imgs/avatar-homem.png" alt="Foto profissional" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="font-bold text-[#00853B]">EDIVALDO SOARES COELHO</p>
                        <div class="w-[4px] h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B]">CURSO DE COMÉRCIO E ADMINISTRAÇÃO - BACHARELADO EM CIÊNCIAS CONTÁBEIS E ADMINISTRAÇÃO</p>
                    </div>
                </div>

                <div class="w-full transition hover:shadow-md hover:cursor-pointer bg-zinc-100 p-4 flex items-center gap-12 rounded-md">
                    <div>
                        <img src="../imgs/avatar-homem.png" alt="Foto profissional" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="font-bold text-[#00853B]">FRANCISCO ARLYSSON DA SILVA VERISSIMO</p>
                        <div class="w-[4px] h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B]">CURSO DE ENFERMAGEM - MESTRADO EM SAÚDE PÚBLICA E EDUCAÇÃO PROFISSIONAL</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="mb-10">
                <h2 class="text-3xl font-bold text-[#204D37] titulos">Corpo Docente</h2>
                <div class="w-32 h-1 bg-[#00853B] my-2"></div>
                <p class="text-gray-700 text-lg">Professores responsáveis pelas disciplinas do ensino médio regular, como Português, Matemática, História, Geografia, entre outras.</p>
            </div>
            <div class="container w-full h-auto flex justify-center flex-col gap-6">

                <div class="w-full transition hover:shadow-md hover:cursor-pointer bg-zinc-100 p-4 flex items-center gap-12 rounded-md">
                    <div>
                        <img src="../imgs/avatar-homem.png" alt="Foto profissional" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="font-bold text-[#00853B]">ANTÔNIO ARQUIMEDES MELO</p>
                        <div class="w-[4px] h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B]">BIOLOGIA - LICENCIATURA EM PEDAGOGIA (UVA)</p>
                    </div>
                </div>

                <div class="w-full transition hover:shadow-md hover:cursor-pointer bg-zinc-100 p-4 flex items-center gap-12 rounded-md">
                    <div>
                        <img src="../imgs/avatar.png" alt="Foto profissional" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="font-bold text-[#00853B]">EVA MARIA SILVA COSTA</p>
                        <div class="w-[4px] h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B]">MATEMÁTICA - LICENCIATURA (UVA) E MESTRADO (UFPI) EM MATEMÁTICA</p>
                    </div>
                </div>

                <div class="w-full transition hover:shadow-md hover:cursor-pointer bg-zinc-100 p-4 flex items-center gap-12 rounded-md">
                    <div>
                        <img src="../imgs/avatar-homem.png" alt="Foto profissional" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="font-bold text-[#00853B]">FRANCISCO DE ASSIS CORIOLANO</p>
                        <div class="w-[4px] h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B]">HISTÓRIA - LICENCIATURA EM PEDAGOGIA (UECE)</p>
                    </div>
                </div>

                <div class="w-full transition hover:shadow-md hover:cursor-pointer bg-zinc-100 p-4 flex items-center gap-12 rounded-md">
                    <div>
                        <img src="../imgs/avatar.png" alt="Foto profissional" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="font-bold text-[#00853B]">ELENILCE AMBROSIO SOUZA</p>
                        <div class="w-[4px] h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B]">FISÍCA - LICENCIATURA EM FÍSICA (IFCE)</p>
                    </div>
                </div>

                <div class="w-full transition hover:shadow-md hover:cursor-pointer bg-zinc-100 p-4 flex items-center gap-12 rounded-md">
                    <div>
                        <img src="../imgs/avatar-homem.png" alt="Foto profissional" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="font-bold text-[#00853B]">OLAVO JÚNIOR SOARES</p>
                        <div class="w-[4px] h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B]">MATEMÁTICA - LICENCIATURA E BACHARELADO EM MATEMÁTICA (UFC)</p>
                    </div>
                </div>

                <div class="w-full transition hover:shadow-md hover:cursor-pointer bg-zinc-100 p-4 flex items-center gap-12 rounded-md">
                    <div>
                        <img src="../imgs/avatar-homem.png" alt="Foto profissional" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="font-bold text-[#00853B]">ROMÉRIO CARLOS DE SOUSA</p>
                        <div class="w-[4px] h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B]">FISÍCA - LICENCIATURA E MESTRADO EM FÍSICA (IFCE)</p>
                    </div>
                </div>

                <div class="w-full transition hover:shadow-md hover:cursor-pointer bg-zinc-100 p-4 flex items-center gap-12 rounded-md">
                    <div>
                        <img src="../imgs/avatar-homem.png" alt="Foto profissional" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="font-bold text-[#00853B]">MACIEL BOMFIM DO NASCIMENTO</p>
                        <div class="w-[4px] h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B]">PROFESSOR - LICENCIATURA E MESTRADO EM CIÊNCIAS BIOLÓGICAS (UECE)</p>
                    </div>
                </div>

                <div class="w-full transition hover:shadow-md hover:cursor-pointer bg-zinc-100 p-4 flex items-center gap-12 rounded-md">
                    <div>
                        <img src="../imgs/avatar-homem.png" alt="Foto profissional" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="font-bold text-[#00853B]">EMERSON TELES VIANA</p>
                        <div class="w-[4px] h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B]">GEOGRAFIA - GRADUAÇÃO EM HISTÓRIA (UVA) E GEOGRAFIA (ESTÁCIO)</p>
                    </div>
                </div>

                <div class="w-full transition hover:shadow-md hover:cursor-pointer bg-zinc-100 p-4 flex items-center gap-12 rounded-md">
                    <div>
                        <img src="../imgs/avatar.png" alt="Foto profissional" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="font-bold text-[#00853B]">CLAUDIANA SOARES VERAS RODRIGUES</p>
                        <div class="w-[4px] h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B]">PORTUGUÊS - LICENCIATURA EM LETRAS (IFCE)</p>
                    </div>
                </div>

                <div class="w-full transition hover:shadow-md hover:cursor-pointer bg-zinc-100 p-4 flex items-center gap-12 rounded-md">
                    <div>
                        <img src="../imgs/avatar-homem.png" alt="Foto profissional" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="font-bold text-[#00853B]">EMERSON TELES VIANA</p>
                        <div class="w-[4px] h-[16px] bg-[#00853B]"></div>
                        <p class="font-bold text-[#00853B]">GEOGRAFIA - GRADUAÇÃO EM HISTÓRIA (UVA) E GEOGRAFIA (ESTÁCIO)</p>
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