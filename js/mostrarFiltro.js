document.getElementById('btnFiltro').addEventListener('click', function(){

    const containerLinguagens = document.querySelector('.container-linguagens');
    const seta = document.querySelector('.seta-filtro');


    containerLinguagens.classList.toggle('mostrar');

    if(containerLinguagens.classList.contains('mostrar')){
        seta.style.transform = 'rotate(180deg)';
    }else{
        seta.style.transform = 'rotate(0deg)';
    }
});