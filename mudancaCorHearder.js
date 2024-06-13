

const elemento = document.querySelector('header');

const cores = [ 'linear-gradient(to right, gray, black)', 'linear-gradient(to right, black, gray)']


function mudarCorDeFundo(){

    const indiceCor = Math.floor(Math.random() * cores.length);

    elemento.style.backgroundImage = cores[indiceCor];
    elemento.style.transition = 'background-image 0.5s ease';
}

setInterval(mudarCorDeFundo, 3000);

