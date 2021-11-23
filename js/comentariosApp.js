"use strict"

const API_URL = "api/reviews/product";
const ID_PRODUCTO = document.getElementById('producto').getAttribute('data-producto');
const ID_USER = document.getElementById('id_user').getAttribute('data-id_user');


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

async function addComment() {
    let newComment = {
        puntaje: "",
        review:"",
        id_user: ID_USER,
        id_producto: ID_PRODUCTO 
    }

    try {
        let res = await fetch(`${API_URL}`, {
            "method": "POST",
            "headers": { "Content-type": "application/json" },
            "body": JSON.stringify(newComment),
        })
        if (res.ok) {
            console.log("Se ha agregado con exito");
        }
    } catch (error) {
        console.log(error);
    }
}



getComentarios();
