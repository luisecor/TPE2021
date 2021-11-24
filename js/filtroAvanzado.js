"use strict"

let form = document.querySelector('#filtroAvanzado');
    form.addEventListener('submit',filtrar);

function filtrar(e){
    preventDefault();
    let categoria = document.querySelector("#categorias").value;
    let precio = document.querySelector("#precio").value;
    console.log(precio +  " Categoria selected  " + categoria);
}