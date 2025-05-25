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

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="mb-10">
                <h2 class="text-3xl font-bold text-[#204D37] titulos">Nossa História</h2>
                <div class="w-32 h-1 bg-[#00853B] mt-2"></div>
            </div>

            <div class="flex items-center gap-12">
                <div class="w-1/2">
                    <p class="text-lg text-gray-700">
                        A EEEP Manoel Mano foi nomeada em homenagem a Manoel Bezerra Lima,
                        conhecido como Manoel Mano, agricultor nascido em Crateús (CE) em 1889,
                        que valorizava a educação como meio de transformação.
                        Teve 13 filhos, entre eles Manoel Bezerra de Melo,
                        que se destacou como padre, professor, político e fundador da Universidade de Mogi das Cruzes.
                        Durante seu mandato, fundou o Colégio Manoel Mano em sua cidade natal, homenageando o pai.
                        Em 2008, o colégio passou a ser administrado pelo Governo do Estado do Ceará, atuando na modalidade de
                        Ensino Médio Integrado à Educação Profissional.
                        A escola alcançou destaque no Enem de 2011 e, em 2022,
                        foi inaugurada oficialmente com estrutura moderna, atendendo até 540 alunos em tempo integral.
                    </p>
                </div>
                <div>
                    <img src="../imgs/patio-escola.jpeg" alt="Img escola" class="w-auto h-80 rounded-md">
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="mb-10">
                <h2 class="text-3xl font-bold text-[#204D37] titulos">Nossa Infraestrutura</h2>
                <div class="w-32 h-1 bg-[#00853B] mt-2"></div>
            </div>
            <div class="container flex items-center flex-wrap justify-center gap-4">
                <div onclick="openModal('laboratorioModal')" class="bg-zinc-30 hover:cursor-pointer transition hover:scale-110 w-72 rounded-lg overflow-hidden shadow-xl">
                    <div class="h-48 flex items-center justify-center">
                        <img src="../imgs/card-lab.JPG" alt="">
                    </div>
                    <div class="p-6 bg-[#204D37] text-white">
                        <h3 class="text-xl font-bold mb-2">Laboratórios</h3>
                        <p>Laboratórios modernos e bem equipados para as aulas práticas de todos os cursos técnicos.</p>
                    </div>
                </div>

                <div onclick="openModal('bibliotecaModal')" class="bg-zinc-30 hover:cursor-pointer transition hover:scale-110 w-72 rounded-lg overflow-hidden shadow-xl">
                    <div class="h-48 flex items-center justify-center">
                        <img src="../imgs/card-biblioteca.JPG" alt="">
                    </div>
                    <div class="p-6 bg-[#204D37] text-white">
                        <h3 class="text-xl font-bold mb-2">Biblioteca</h3>
                        <p>Amplo acervo de livros, revistas e materiais didáticos para pesquisa e aprofundamento dos estudos.</p>
                    </div>
                </div>

                <div onclick="openModal('refeitorioModal')" class="bg-zinc-30 hover:cursor-pointer transition hover:scale-110 w-72 rounded-lg overflow-hidden shadow-xl">
                    <div class="h-48 flex items-center justify-center">
                        <img src="../imgs/card-ref.jpg" alt="">
                    </div>
                    <div class="p-6 bg-[#204D37] text-white">
                        <h3 class="text-xl font-bold mb-2">Refeitório</h3>
                        <p>Espaço amplo e confortável para as refeições dos alunos, com alimentação balanceada.</p>
                    </div>
                </div>

                <div onclick="openModal('quadraModal')" class="bg-zinc-30 hover:cursor-pointer transition hover:scale-110 w-72 rounded-lg overflow-hidden shadow-xl">
                    <div class="h-48 flex items-center justify-center">
                        <img src="../imgs/card-quadra.JPG" alt="">
                    </div>
                    <div class="p-6 bg-[#204D37] text-white">
                        <h3 class="text-xl font-bold mb-2">Quadra Poliesportiva</h3>
                        <p>Espaço para práticas esportivas e atividades físicas, promovendo saúde e bem-estar.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="laboratorioModal" class="fixed inset-0 bg-black/60 bg-opacity-100 hidden justify-center items-center z-50">
            <div class="bg-white rounded-lg max-w-2xl w-full relative">
                <button onclick="closeModal('laboratorioModal')" class="absolute top-2 right-2 text-black text-3xl cursor-pointer">&times;</button>
                <div class="p-8">
                    <div class="relative">
                        <img id="laboratorioImage" src="../imgs/laboratorio1.jpg" class="w-full h-80 object-cover rounded" alt="">
                        <button onclick="prevSlide('laboratorio')" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-[#204D37] text-white py-2 px-3 text-white rounded-full"><i class="bi bi-chevron-left"></i></button>
                        <button onclick="nextSlide('laboratorio')" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-[#204D37] text-white py-2 px-3 text-white rounded-full"><i class="bi bi-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div id="bibliotecaModal" class="fixed inset-0 bg-black/60 bg-opacity-100 hidden justify-center items-center z-50">
            <div class="bg-white rounded-lg max-w-2xl w-full relative">
                <button onclick="closeModal('bibliotecaModal')" class="absolute top-2 right-2 text-black text-3xl cursor-pointer">&times;</button>
                <div class="p-8">
                    <div class="relative">
                        <img id="bibliotecaImage" src="../imgs/biblioteca1.jpg" class="w-full h-80 object-cover rounded" alt="">
                        <button onclick="prevSlide('biblioteca')" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-[#204D37] text-white py-2 px-3 text-white rounded-full"><i class="bi bi-chevron-left"></i></button>
                        <button onclick="nextSlide('biblioteca')" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-[#204D37] text-white py-2 px-3 text-white rounded-full"><i class="bi bi-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div id="refeitorioModal" class="fixed inset-0 bg-black/60 bg-opacity-100 hidden justify-center items-center z-50">
            <div class="bg-white rounded-lg max-w-2xl w-full relative">
                <button onclick="closeModal('refeitorioModal')" class="absolute top-2 right-2 text-black text-3xl cursor-pointer">&times;</button>
                <div class="p-8">
                    <div class="relative">
                        <img id="refeitorioImage" src="../imgs/refeitorio1.jpg" class="w-full h-80 object-cover rounded" alt="">
                        <button onclick="prevSlide('refeitorio')" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-[#204D37] text-white py-2 px-3 text-white rounded-full"><i class="bi bi-chevron-left"></i></button>
                        <button onclick="nextSlide('refeitorio')" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-[#204D37] text-white py-2 px-3 text-white rounded-full"><i class="bi bi-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div id="quadraModal" class="fixed inset-0 bg-black/60 bg-opacity-100 hidden justify-center items-center z-1000">
            <div class="bg-white rounded-lg max-w-2xl w-full relative">
                <button onclick="closeModal('quadraModal')" class="absolute top-2 right-2 text-black text-3xl cursor-pointer">&times;</button>
                <div class="p-8">
                    <div class="relative">
                        <img id="quadraImage" src="" class="w-full h-80 object-cover rounded" alt="">
                        <button onclick="prevSlide('quadra')" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-[#204D37] text-white py-2 px-3 rounded-full"><i class="bi bi-chevron-left"></i></button>
                        <button onclick="nextSlide('quadra')" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-[#204D37] text-white py-2 px-3 rounded-full"><i class="bi bi-chevron-right"></i></button>
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

    <script>
        const laboratorioImages = [
            '../imgs/laboratorio1.jpg',
            '../imgs/laboratorio2.jpg',
            '../imgs/laboratorio3.jpg'
        ];
        const bibliotecaImages = [
            '../imgs/biblioteca1.jpg',
            '../imgs/biblioteca2.jpg',
            '../imgs/biblioteca3.jpg'
        ];
        const refeitorioImages = [
            '../imgs/refeitorio1.jpg',
            '../imgs/refeitorio2.jpg',
            '../imgs/refeitorio3.jpg'
        ];
        const quadraImages = [
            '../imgs/quadra1.jpg',
            '../imgs/quadra2.jpg',
            '../imgs/quadra3.jpg'
        ];

        let current = {
            laboratorio: 0,
            biblioteca: 0,
            refeitorio: 0,
            quadra: 0
        };

        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
            document.getElementById(id).classList.add('flex');
        }

        function closeModal(id) {
            document.getElementById(id).classList.remove('flex');
            document.getElementById(id).classList.add('hidden');
        }

        function nextSlide(gallery) {
            const images = getImagesArray(gallery);
            current[gallery] = (current[gallery] + 1) % images.length;
            document.getElementById(`${gallery}Image`).src = images[current[gallery]];
        }

        function prevSlide(gallery) {
            const images = getImagesArray(gallery);
            current[gallery] = (current[gallery] - 1 + images.length) % images.length;
            document.getElementById(`${gallery}Image`).src = images[current[gallery]];
        }

        function getImagesArray(gallery) {
            return {
                laboratorio: laboratorioImages,
                biblioteca: bibliotecaImages,
                refeitorio: refeitorioImages,
                quadra: quadraImages
            } [gallery];
        }
    </script>

</body>

</html>