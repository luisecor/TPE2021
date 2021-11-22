"use strict"

const API_URL = "api/reviews/product";
const ID_PRODUCTO = document.getElementById('producto').getAttribute('data-producto');


let comentariosApp = new Vue({
    el: "#comentariosApp",
    data : {
        comentarios: []
    }
    
})


async function getComentarios(){
    try {
        let response = await fetch("http://localhost/proyectos/web2-2021/TPE-Bootstrap/ANITA/TPE-master/api/reviews/product/7");
        let comentarios = await response.json();
        comentariosApp.comentarios = comentarios;

    } catch (e){
        console.log(e);
    }
    
}


getComentarios();
