const iconoMenu = document.querySelector('#icono-menu'),
 menu = document.querySelector('#menu');

 iconoMenu.addEventListener('click', (e) => {

    //Alternamos estilos para el menu y body
    menu.classList.toggle('active');
    document.body.classList.toggle('opacity');

    //Alternamos su atributo 'src' para el ícono del menu
    const rutaActual = e.target.gettAttribute('src');

    if(rutaActual =='icono.jpg'){
        e.target.setAttribute('src', 'icono.jpg');
    }else{
        e.target.setAttribute('src', 'icono.jpg');  
    }


 });