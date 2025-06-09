const imageElement = document.getElementById("hero-image");
const images = [
  "imgs/carrossel/1.jpeg",
  "imgs/carrossel/2.JPG",
  "imgs/carrossel/3.JPG",
  "imgs/carrossel/4.JPG",
  "imgs/carrossel/5.JPG",
];

imageElement.setAttribute("src", images[0]);

let currentIndex = 0;

setInterval(() => {
  currentIndex = (currentIndex + 1) % images.length;
  imageElement.classList.add("opacity-0");

  setTimeout(() => {
    imageElement.src = images[currentIndex];
    imageElement.classList.remove("opacity-0");
  }, 500);
}, 5000);

let pesquisarbox = document.querySelector("#barra-pesquisa");
let btnfechar = document.querySelector("#fechar");
var cordenadas = pesquisarbox.getBoundingClientRect();

function pesquisar(event) {
  let pesquisa = document.getElementById("procurar").value.toLowerCase();
  let x = document.getElementsByClassName("titulos");

  if (event.key === "Enter") {
    for (let i = 0; i < x.length; i++) {
      if (!x[i].innerHTML.toLowerCase().includes(pesquisa)) {
        x[i].style.background = "none";
        x[i].classList.remove("scroll-highlight");
      } else if (pesquisa === "") {
        x[i].style.background = "none";
        x[i].classList.remove("scroll-highlight");
      } else {
        x[i].classList.add("scroll-highlight");
        var coordenadas = x[i].getBoundingClientRect();
        console.log(coordenadas);
        window.scroll(
          0,
          coordenadas.y + window.scrollY - window.innerHeight / 3
        );
        setTimeout(function () {
          x[i].classList.remove("scroll-highlight");
        }, 1000);
      }
    }
  } else if (pesquisa === "") {
    for (let i = 0; i < x.length; i++) {
      x[i].style.background = "none";
      x[i].classList.remove("scroll-highlight");
    }
  }
}

document.getElementById("procurar").addEventListener("keyup", pesquisar);

function fechar() {
  let btnfechar = document.querySelector(".fechar");
  let titulos = document.getElementsByClassName("titulos");
  btnfechar.addEventListener("click", () => {
    for (let i = 0; i < titulos.length; i++) {
      titulos[i].classList.remove("scroll-highlight");
      titulos[i].style.background = "none";
    }
    document.getElementById("procurar").value = "";
  });
}

//Enfermagem
const enfCard = document.getElementById("enfCard");

enfCard.addEventListener("mouseover", () => {
  const enfCardImg = document.getElementById("enfCardImg");

  enfCardImg.setAttribute("src", "./imgs/logos_curso_coloridas/enfermagem.png");
});

enfCard.addEventListener("mouseout", () => {
  const enfCardImg = document.getElementById("enfCardImg");

  enfCardImg.setAttribute("src", "./imgs/logo_cursos-pb/enfermagem.png");
});

//Informatica
const InfCard = document.getElementById("InfCard");

InfCard.addEventListener("mouseover", () => {
  const InfCardImg = document.getElementById("InfCardImg");

  InfCardImg.setAttribute(
    "src",
    "./imgs/logos_curso_coloridas/informatica.png"
  );
});

InfCard.addEventListener("mouseout", () => {
  const InfCardImg = document.getElementById("InfCardImg");

  InfCardImg.setAttribute("src", "./imgs/logo_cursos-pb/informatica.png");
});

//Comercio

const comCard = document.getElementById("comCard");

comCard.addEventListener("mouseover", () => {
  const comCardImg = document.getElementById("comCardImg");

  comCardImg.setAttribute("src", "./imgs/logos_curso_coloridas/comercio.png");
});

comCard.addEventListener("mouseout", () => {
  const comCardImg = document.getElementById("comCardImg");

  comCardImg.setAttribute("src", "./imgs/logo_cursos-pb/comercio.png");
});

//D. de Sistema

const dsCard = document.getElementById("dsCard");

dsCard.addEventListener("mouseover", () => {
  const dsCardImg = document.getElementById("dsCardImg");

  dsCardImg.setAttribute(
    "src",
    "./imgs/logos_curso_coloridas/desenvolvimento.png"
  );
});

dsCard.addEventListener("mouseout", () => {
  const dsCardImg = document.getElementById("dsCardImg");

  dsCardImg.setAttribute("src", "./imgs/logo_cursos-pb/ds.png");
});

//adm

const admCard = document.getElementById("admCard");

admCard.addEventListener("mouseover", () => {
  const admCardImg = document.getElementById("admCardImg");

  admCardImg.setAttribute(
    "src",
    "./imgs/logos_curso_coloridas/administracao.png"
  );
});

admCard.addEventListener("mouseout", () => {
  const admCardImg = document.getElementById("admCardImg");

  admCardImg.setAttribute("src", "./imgs/logo_cursos-pb/adm.png");
});
