<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>EEEP Manoel Mano - Site Oficial</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=menu" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=close" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
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
            <a href="#" class="hover:text-[#00853B] transition-colors">PROCESSO SELETIVO</a>
        </div>

        <div class="relative w-full max-w-sm">
            <input type="text" placeholder="O que você busca?" class="w-full px-4 py-2 pr-10 rounded-full border border-[#204D37] focus:outline-none focus:ring-2 focus:ring-[#00853B]" />
            <i class="bi bi-search absolute top-1/2 right-4 transform -translate-y-1/2 text-white bg-[#00853B] rounded-full px-3 py-1"></i>
        </div>
    </nav>

    <div class="flex space-x-8 mx-14 mt-14 w-200 ">
        <img src="./imgs/image.png" alt="" class="w-15 h-15 mt-5">
        <div class="h-25 border-r-5 border-green-700"></div>
        <p class="text-4xl mt-2 ">Processo seletivo - <br> EEEP Manoel Mano 2025/2026</p>

    </div>

    <div class="mx-20 mt-14">
        <p class="text-lg">
            Com grande alegria que divulgamos a população dos Sertões de Crateús o processo seletivo para novatos da
            <br>Escola Estadual de Educação Profissional Manoel Mano, as inscrições para interessados começam no dia 29 de
            <br>Novembro até o dia 08 de Dezembro de 2023.
            <br><br>
            Abaixo segue o edital com mais detalhes e a arte de divulgação com a documentação necessária.
        </p>

        <div class="bg-gradient-to-r from-[#204D37] to-[#00853B] text-white font-bold rounded cursor-pointer w-55 py-2 mt-6 mx-5 text-center">
            <a href="" download>Baixar edital</a>
        </div>

    </div>
</body>

</html>