menu = document.querySelector("#menu")
btnMenu = document.querySelector("#btnMenu")
listaMenu = document.querySelectorAll(".item")
bgMenu = document.querySelector("nav")
corpo = document.querySelector("main")
btnModal = document.querySelector("#btnModal")
modal = document.querySelector("#modal")
modais = document.querySelectorAll(".imgModal")
cards = document.querySelectorAll(".card")
secoes = document.querySelectorAll("section")

btnMenu.checked = false


// Evita repeticoes exageradas de eventos

const debounce = (func, wait, immediate) => {
    let timeout;
    return (...args) => {
        const context = this;
        const later = () => {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};


// Link do botão whatsapp

document.querySelector("#btnWhatsapp").addEventListener("click", () => {
    document.location.href = "https://api.whatsapp.com/send?phone=5561995452063"
})


// oculta o form ao clicar fora / bloqueia rolagem da pagina

document.querySelector("#bgForm").addEventListener("click", () => {
    document.querySelector("form").classList.toggle("oculta")
    document.querySelector("html").classList.toggle("rolar")
})

// Mostra o form / bloqueia a rolagem da pagina

document.querySelector("#btnEmail").addEventListener("click", () => {
    document.querySelector("form").classList.toggle("oculta")
    document.querySelector("html").classList.toggle("rolar")
})


// Esconde a tela de load e mostra a tela inicial após x segundos
let tempo;
let body = document.querySelector("body");

body.addEventListener('load', myFunction())


function myFunction() {
    tempo = setTimeout(showPage, 1000);
}

function showPage() {
    document.getElementById("bgLoader").style.animation = "fadeOut 1s";

    setTimeout(() => {
        document.getElementById("bgLoader").style.display = "none";
        document.querySelector(".container").style.display = "block";
        document.querySelector("nav").style.display = "flex";
    }, 1000);

}


// Apenas para a versao mobile do site

if (screen.width <= 860) {

    btnMenu.addEventListener("click", () => {
        menu.classList.toggle("mostra")
        bgMenu.classList.toggle("degrade")

    })

    listaMenu.forEach(item => {
        item.addEventListener("click", () => {

            menu.classList.toggle("mostra")
            bgMenu.classList.toggle("degrade")
            btnMenu.checked = false

        })
    })

    corpo.addEventListener("click", () => {
        menu.classList.remove("mostra")
        bgMenu.classList.remove("degrade")
        btnMenu.checked = false
    })

}



// Animacões mostrar/ocultar elementos conforme o scroll

const target = document.querySelectorAll("section");
let portifolio = document.querySelector('#trabalhos');
let contato = document.querySelector('#contato');
let sobre = document.querySelector('#sobre');

function animeScroll() {


    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);

    windowTop > sobre.getBoundingClientRect().top ?
        (document.querySelector("#tituloSobre").classList.add("left"), document.querySelector("#textoSobre").classList.add("up")) :
        (document.querySelector("#tituloSobre").classList.remove("left"), document.querySelector("#textoSobre").classList.remove("up"));

    screen.width <= 860 ?
        (windowTop > portifolio.getBoundingClientRect().top ?
            document.querySelector("#trabalhos").classList.add("right") :
            document.querySelector("#trabalhos").classList.remove("right")) :
        (windowTop > portifolio.getBoundingClientRect().top ?
            document.querySelector("#trabalhos").classList.add("left") :
            document.querySelector("#trabalhos").classList.remove("left"))

    screen.width <= 860 ?
        (contato.getBoundingClientRect().height >= contato.getBoundingClientRect().bottom / 1.8 ?
            document.querySelector("#contato").classList.add("left") :
            document.querySelector("#contato").classList.remove("left")) :
        (contato.getBoundingClientRect().height >= contato.getBoundingClientRect().bottom / 1.5 ?
            document.querySelector("#contato").classList.add("left") :
            document.querySelector("#contato").classList.remove("left"))


}

//Animacao

if (target.length) {
    corpo.addEventListener('scroll', debounce(() => {
        animeScroll();
    }, 100))
}



//Esconde a galeria

escondeModal = () => {
    modais.forEach(item => {
        if (!item.classList.contains("oculta")) {
            item.classList.toggle("oculta")
            modal.classList.toggle("oculta")
            document.querySelector("main").classList.toggle("rolar")
            document.querySelector("html").classList.toggle("rolar")
        }
    })
}

for (let i = 0; i <= cards.length; i++) {
    cards[i].addEventListener("click", () => {

        modal.classList.toggle("oculta")
        modais[i].classList.toggle("oculta")
        document.querySelector("main").classList.toggle("rolar")
        document.querySelector("html").classList.toggle("rolar")

        btnModal.addEventListener("click", () => {
            escondeModal()
        })
    })
}





