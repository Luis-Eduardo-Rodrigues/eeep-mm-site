<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEEP Manoel Mano - Site Oficial</title>
    <link rel="shortcut icon" href="imgs/logos-escola/logo-escola-s.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
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
            <a href="index.php" class="flex items-center gap-2">
                <img src="./imgs/logos-escola/logo-escola-s.png" alt="Logo da Escola Manoel Mano" class="w-auto h-16 md:h-20" />
                <img src="./imgs/logos-escola/brasao.svg" alt="Brasão" class="w-16 h-16 md:w-20 md:h-20" />
            </a>
            <div class="flex flex-wrap justify-center gap-3">
                <a href="./escola/index.php" class="hover:text-[#00853B] transition-colors text-sm md:text-base">ESCOLA</a>
                <div class="hidden md:block w-[3px] h-[18px] bg-[#00853B]"></div>
                <a href="./grupo_gestor/index.php" class="hover:text-[#00853B] transition-colors text-sm md:text-base">GRUPO GESTOR</a>
                <div class="hidden md:block w-[3px] h-[18px] bg-[#00853B]"></div>
                <a href="./processo-seletivo/index.php" class="hover:text-[#00853B] transition-colors text-sm md:text-base">PROCESSO SELETIVO</a>
            </div>
        </div>

        <div id="barra-pesquisa" class="relative w-full max-w-sm mt-4 md:mt-0">
            <input id="procurar" type="text" placeholder="O que você busca?" class="w-full px-4 py-2 pr-10 rounded-full border border-[#204D37] focus:outline-none focus:ring-2 focus:ring-[#00853B]" />
            <i class="fas fa-search absolute top-1/2 right-4 transform -translate-y-1/2 text-white bg-[#00853B] rounded-full p-2"></i>
        </div>
    </nav>

    <section class="relative shadow-xl">
        <div class="w-full h-[300px] md:h-[400px] lg:h-[500px] bg-gray-200 relative overflow-hidden">
            <img id="hero-image" src="" alt="EEEP Manoel Mano" class="object-cover w-full h-full transition-opacity duration-1000" />

            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>

            <div class="absolute bottom-0 left-0 right-0 text-white p-4 md:p-6">
                <div class="container mx-auto flex flex-col md:flex-row items-center gap-4">
                    <div class="hidden md:block">
                        <img src="imgs/logos-escola/logo-escola-s.png" alt="Logo da Escola Manoel Mano" class="w-auto h-24" />
                    </div>
                    <div class="text-center md:text-left">
                        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-2">EEEP Manoel Mano</h1>
                        <p class="text-base md:text-lg lg:text-xl">Educação profissional de qualidade para um futuro brilhante.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-8 md:py-12">
        <div class="container mx-auto px-4 md:px-6">
            <div class="mb-8 md:mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-[#204D37]">Nossos cursos</h2>
                <div class="w-32 h-1 bg-[#00853B] mt-2"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">

                <a href="./cursos/enfermagem.php" id="enfCard">
                    <div class="group cursor-pointer">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 group-hover:transform group-hover:scale-105 h-full flex flex-col">
                            <div class="h-40 relative overflow-hidden">
                                <img src="imgs/logo_cursos-pb/enfermagem.png" id="enfCardImg" alt="ENFERMAGEM" class="object-contain p-4 relative z-10 transition-transform duration-500 group-hover:scale-110 w-full h-full" />
                                <div class="absolute inset-0 bg-gradient-to-t from-[#204D37] to-[#00853B] opacity-0 group-hover:opacity-20 transition-opacity duration-300 z-0"></div>
                            </div>
                            <div class="p-4 text-center bg-[#204D37] text-white">
                                <h3 class="font-bold text-sm md:text-base">ENFERMAGEM</h3>
                            </div>
                        </div>
                    </div>
                </a>
                
                <a href="./cursos/informatica.php" id="InfCard">
                    <div class="group cursor-pointer">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 group-hover:transform group-hover:scale-105 h-full flex flex-col">
                            <div class="h-40 relative overflow-hidden">
                                <img src="imgs/logo_cursos-pb/informatica.png" id="InfCardImg" alt="INFORMÁTICA" class="object-contain p-4 relative z-10 transition-transform duration-500 group-hover:scale-110 w-full h-full" />
                                <div class="absolute inset-0 bg-gradient-to-t from-[#204D37] to-[#00853B] opacity-0 group-hover:opacity-20 transition-opacity duration-300 z-0"></div>
                            </div>
                            <div class="p-4 text-center bg-[#204D37] text-white">
                                <h3 class="font-bold text-sm md:text-base">INFORMÁTICA</h3>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="./cursos/comercio.php" id="comCard">
                    <div class="group cursor-pointer">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 group-hover:transform group-hover:scale-105 h-full flex flex-col">
                            <div class="h-40 relative overflow-hidden">
                                <img src="imgs/logo_cursos-pb/comercio.png" id="comCardImg" alt="COMÉRCIO" class="object-contain p-4 relative z-10 transition-transform duration-500 group-hover:scale-110 w-full h-full" />
                                <div class="absolute inset-0 bg-gradient-to-t from-[#204D37] to-[#00853B] opacity-0 group-hover:opacity-20 transition-opacity duration-300 z-0"></div>
                            </div>
                            <div class="p-4 text-center bg-[#204D37] text-white">
                                <h3 class="font-bold text-sm md:text-base">COMÉRCIO</h3>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="./cursos/desenvolvimento.php" id="dsCard">
                    <div class="group cursor-pointer">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 group-hover:transform group-hover:scale-105 h-full flex flex-col">
                            <div class="h-40 relative overflow-hidden">
                                <img src="imgs/logo_cursos-pb/ds.png" id="dsCardImg" alt="DESENVOLVIMENTO DE SISTEMAS" class="object-contain p-4 relative z-10 transition-transform duration-500 group-hover:scale-110 w-full h-full" />
                                <div class="absolute inset-0 bg-gradient-to-t from-[#204D37] to-[#00853B] opacity-0 group-hover:opacity-20 transition-opacity duration-300 z-0"></div>
                            </div>
                            <div class="p-4 text-center bg-[#204D37] text-white">
                                <h3 class="font-bold text-sm md:text-base">DESENV. DE SISTEMAS</h3>
                            </div>
                        </div>
                    </div>
                </a>
                
                <a href="./cursos/administracao.php" id="admCard">
                    <div class="group cursor-pointer">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 group-hover:transform group-hover:scale-105 h-full flex flex-col">
                            <div class="h-40 relative overflow-hidden">
                                <img src="imgs/logo_cursos-pb/adm.png" alt="ADMINISTRAÇÃO" id="admCardImg" class="object-contain p-4 relative z-10 transition-transform duration-500 group-hover:scale-110 w-full h-full" />
                                <div class="absolute inset-0 bg-gradient-to-t from-[#204D37] to-[#00853B] opacity-0 group-hover:opacity-20 transition-opacity duration-300 z-0"></div>
                            </div>
                            <div class="p-4 text-center bg-[#204D37] text-white">
                                <h3 class="font-bold text-sm md:text-base">ADMINISTRAÇÃO</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="py-8 md:py-16">
        <div class="container mx-auto px-4 md:px-6">
            <div class="mb-6 md:mb-10">
                <h2 class="text-2xl md:text-3xl font-bold text-[#204D37]">ENEM e Vestibulares</h2>
                <div class="w-32 h-1 bg-[#00853B] mt-2"></div>
            </div>

            <div class="flex flex-col lg:flex-row items-center gap-6 md:gap-10">
                <div class="w-full lg:w-1/2">
                    <img src="" alt="Estudantes se preparando para o ENEM" class="rounded-lg shadow-lg w-full h-auto object-cover" />
                </div>
                <div class="w-full lg:w-1/2">
                    <p class="text-base md:text-lg leading-relaxed text-gray-700 mb-6">
                        A EEEP Manoel Mano fornece para os seus alunos, além do ensino técnico, o melhor aprendizado na base comum,
                        para que esses tenham um ótimo desempenho no Exame Nacional do Ensino Médio (ENEM) e em outros vestibulares.
                        Ao clicar no botão abaixo, você será direcionado(a) para a página do Índice de Desenvolvimento da Educação
                        Básica (Ideb). Assim, poderás ver os nossos resultados e conhecer um pouco mais sobre nós!
                    </p>
                    <a href="https://qedu.org.br/escola/23085592-eeep-manoel-mano/ideb" target="__blank" class="inline-block bg-gradient-to-r from-[#204D37] to-[#00853B] text-white font-bold rounded-md px-6 py-3 hover:opacity-90 transition-opacity text-sm md:text-base">
                        Classificação IDEB
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-r from-[#204D37] to-[#00853B] py-8 md:py-12 px-4 md:px-12 mt-4">
        <div class="text-center md:text-left mb-6 md:mb-8">
            <h2 class="text-2xl md:text-3xl font-bold text-white">Aprovações</h2>
            <div class="w-32 h-1 bg-white mt-2 mx-auto md:mx-0"></div>
        </div>

        <div class="flex items-center justify-between">
            <button class="text-xl md:text-3xl cursor-pointer text-white bg-white/20 p-2 rounded-full text-center hidden md:block" id="prevBtn">
                <i class="fas fa-chevron-left"></i>
            </button>

            <div class="overflow-hidden w-full mx-2 md:mx-4">
                <div id="carousel" class="flex transition-transform duration-300 ease-in-out gap-4 md:gap-8 items-center"></div>
            </div>

            <button class="text-xl md:text-3xl cursor-pointer text-white bg-white/20 p-2 rounded-full text-center hidden md:block" id="nextBtn">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <div class="mt-6 md:mt-8 flex justify-center gap-2" id="indicador"></div>
    </section>

    <section class="py-8 md:py-16">
        <div class="container mx-auto px-4 md:px-6">
            <div class="mb-6 md:mb-10">
                <h2 class="text-2xl md:text-3xl font-bold text-[#204D37]">Acesse também</h2>
                <div class="w-32 h-1 bg-[#00853B] mt-2"></div>
            </div>

            <div class="flex flex-wrap justify-center gap-6 md:gap-12">
                <a href="./equipe/index.php" class="group w-full sm:w-auto">
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 md:w-20 md:h-20 lg:w-24 lg:h-24 rounded-full bg-gradient-to-r from-[#204D37] to-[#00853B] flex items-center justify-center mb-3 md:mb-4 transition-transform duration-300 group-hover:scale-110">
                            <img src="imgs/equipe.png" alt="Time de desenvolvimento" class="w-8 h-8 md:w-10 md:h-10 lg:w-12 lg:h-12" />
                        </div>
                        <h3 class="text-base md:text-lg font-bold text-[#204D37] text-center">Time de desenvolvimento</h3>
                    </div>
                </a>

                <a href="./faq/index.php" class="group w-full sm:w-auto">
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 md:w-20 md:h-20 lg:w-24 lg:h-24 rounded-full bg-gradient-to-r from-[#204D37] to-[#00853B] flex items-center justify-center mb-3 md:mb-4 transition-transform duration-300 group-hover:scale-110">
                            <img src="imgs/faq.png" alt="FAQ" class="w-8 h-8 md:w-10 md:h-10 lg:w-12 lg:h-12" />
                        </div>
                        <h3 class="text-base md:text-lg font-bold text-[#204D37] text-center">FAQ</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <footer class="bg-gray-100 py-8 md:py-12 mt-auto">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">

                <div class="flex flex-col items-center md:items-start">
                    <img src="imgs/logos-escola/logo-escola-vertical.png" alt="Logo EEEP Manoel Mano" class="h-24 md:h-32 mb-4" />
                </div>

                <div>
                    <h4 class="font-bold text-lg text-[#204D37] mb-3 md:mb-4">Cursos</h4>
                    <ul class="space-y-2">
                        <li><a href="./cursos/enfermagem.php" class="text-gray-600 hover:text-[#00853B] transition-colors text-sm md:text-base">Enfermagem</a></li>
                        <li><a href="./cursos/informatica.php" class="text-gray-600 hover:text-[#00853B] transition-colors text-sm md:text-base">Informática</a></li>
                        <li><a href="./cursos/comercio.php" class="text-gray-600 hover:text-[#00853B] transition-colors text-sm md:text-base">Comércio</a></li>
                        <li><a href="./cursos/desenvolvimento.php" class="text-gray-600 hover:text-[#00853B] transition-colors text-sm md:text-base">Desenvolvimento de Sistemas</a></li>
                        <li><a href="./cursos/administracao.php" class="text-gray-600 hover:text-[#00853B] transition-colors text-sm md:text-base">Administração</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-lg text-[#204D37] mb-3 md:mb-4">Links Úteis</h4>
                    <ul class="space-y-2">
                        <li><a href="grupo_gestor/index.php" class="text-gray-600 hover:text-[#00853B] transition-colors text-sm md:text-base">Professores e grupo gestor</a></li>
                        <li><a href="escola/index.php" class="text-gray-600 hover:text-[#00853B] transition-colors text-sm md:text-base">Ambiente da escola</a></li>
                        <li><a href="equipe/index.php" class="text-gray-600 hover:text-[#00853B] transition-colors text-sm md:text-base">Time de Desenvolvimento</a></li>
                        <li><a href="faq/index.php" class="text-gray-600 hover:text-[#00853B] transition-colors text-sm md:text-base">FAQ</a></li>
                        <li><a href="processo-seletivo/index.php" class="text-gray-600 hover:text-[#00853B] transition-colors text-sm md:text-base">Processo Seletivo</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-lg text-[#204D37] mb-3 md:mb-4">Contato</h4>
                    <p class="text-gray-600 mb-2 md:mb-4 text-sm md:text-base">Av. Professora Machadinha Lima - Crateús, CE</p>
                    <p class="text-gray-600 mb-4 text-sm md:text-base">(00) 1234-5678</p>
                    <div class="flex space-x-4">
                        <a href="https://www.instagram.com/eeepmanoelmano/" target="_blank" class="text-[#204D37] hover:text-[#00853B] transition-colors">
                            <i class="fab fa-instagram text-xl md:text-2xl"></i>
                        </a>
                        <a href="https://www.youtube.com/@eeepmanoelmanocrateus-ce8055/" target="_blank" class="text-[#204D37] hover:text-[#00853B] transition-colors">
                            <i class="fab fa-youtube text-xl md:text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-200 mt-8 pt-6 text-center">
                <p class="text-gray-600 text-sm md:text-base">
                    © <script>
                        const pessoas = [{
  nome: "Luis Eduardo Rodrigues",
  curso: "Análise e Desenvolvimento de Sistemas",
  universidade: "FPO",
  foto: "https://github.com/Luis-Eduardo-Rodrigues.png"
},
{
  nome: "João Paulo Alves",
  curso: "Sistema de Informação",
  universidade: "UFC",
  foto: "https://github.com/Joao-Paulo2008.png"
},
{
  nome: "Ithyel Cavalcante",
  curso: "Ciência da Computação",
  universidade: "UFC",
  foto: "https://github.com/Ithyel-Cavalcante.png"
},
{
  nome: "Carlos henrique Oliveira",
  curso: "Análise e Desenvolvimento de Sistemas",
  universidade: "FPO",
  foto: "https://github.com/chhenri.png"
},
{
  nome: "Luis Eduardo Rodrigues",
  curso: "Análise e Desenvolvimento de Sistemas",
  universidade: "FPO",
  foto: "https://github.com/Luis-Eduardo-Rodrigues.png"
},
{
  nome: "João Paulo Alves",
  curso: "Sistema de Informação",
  universidade: "UFC",
  foto: "https://github.com/Joao-Paulo2008.png"
},
{
  nome: "Ithyel Cavalcante",
  curso: "Ciência da Computação",
  universidade: "UFC",
  foto: "https://github.com/Ithyel-Cavalcante.png"
},
{
  nome: "Carlos henrique Oliveira",
  curso: "Análise e Desenvolvimento de Sistemas",
  universidade: "FPO",
  foto: "https://github.com/chhenri.png"
}
];

const container = document.getElementById('carousel');
const passador = document.getElementById('indicador');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let contador = 0;
const totalCards = pessoas.length;
const cardsPerPage = 3;
const totalPaginas = Math.ceil(totalCards / cardsPerPage);

function criarIndicadores() {
passador.innerHTML = '';
for (let i = 0; i < totalCards - 2; i++) {
  const com = document.createElement('label');
  com.classList.add(
      'border-2',
      'border-white',
      'p-[5px]',
      'rounded-[20px]',
      'cursor-pointer',
      'mx-1',
      'transition-colors',
      'duration-300'
  );
  com.setAttribute('data-indice', i);
  passador.appendChild(com);
}
}

function atualizarIndicadores() {
const labels = passador.querySelectorAll('label');
labels.forEach((label, index) => {
  if (index === Math.floor(contador)) {
      label.classList.add('bg-white');
  } else {
      label.classList.remove('bg-white');
  }
});
}

function renderCards(contador) {
container.innerHTML = '';

for (let i = contador; i < contador + cardsPerPage && i < totalCards; i++) {
  const pessoa = pessoas[i];
  const card = document.createElement('div');

  card.classList.add('min-w-[400px]', 'flex', 'flex-col', 'items-center', 'gap-2', 'p-4', 'cards');

  card.innerHTML = `
<div class=" w-72 h-72">
<img src="${pessoa.foto}" alt="${pessoa.nome}">
</div>
<div class="text-center">
<p class="font-bold text-lg text-white">${pessoa.nome}</p>
<p class="font-bold text-lg text-white">${pessoa.curso}</p>
<p class="font-bold text-lg text-white">${pessoa.universidade}</p>
</div>
`;

  container.appendChild(card);
}

atualizarIndicadores();
}

criarIndicadores();
renderCards(contador);
prevBtn.style.display = "none";

nextBtn.addEventListener('click', () => {
if (contador + cardsPerPage < totalCards) {
  contador += 1;
  container.style.transition = 'transform 0.5s ease';
  renderCards(contador);

  if (contador >= totalCards - cardsPerPage) {
      nextBtn.style.display = "none";
  }
  if (contador > 0) {
      prevBtn.style.display = "block";
  }
}
});

prevBtn.addEventListener('click', () => {
if (contador > 0) {
  contador -= 1;
  container.style.transition = 'transform 0.5s ease';
  renderCards(contador);

  if (contador == 0) {
      prevBtn.style.display = "none";
  }
  if (contador < totalCards - cardsPerPage) {
      nextBtn.style.display = "block";
  }
}
});

                    
                    document.write(new Date().getFullYear());</script> EEEP Manoel Mano. Todos os direitos reservados.
                </p>
            </div>
        </div>
    </footer>

    <script src="./script.js"></script>
</body>

</html>