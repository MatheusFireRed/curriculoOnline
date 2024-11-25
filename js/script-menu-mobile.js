function mostrarMenu() {
   
    let menuMobile = document.querySelector('.mobile-menu');

    if(menuMobile.classList.contains('open')){
       
        menuMobile.classList.remove('open');
        document.querySelector('.icon').src = "img/menu/list.svg";        

    }else{
       
        menuMobile.classList.add('open');
        document.querySelector('.icon').src = "img/menu/x.svg";
        document.querySelector('.icon').alt = "Fechar menu";    

    }
}