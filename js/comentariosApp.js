"use strict"

const API_URL = "api/reviews/product";
const URL_SPLITED = document.location.href.split("verProducto")[0]+API_URL;
const ID_PRODUCTO = document.getElementById('producto').getAttribute('data-producto');

let form = document.querySelector('#form');
form.addEventListener('submit',addComment);



let comentariosApp = new Vue({
    el: "#comentariosApp",
    data : {
        comentarios: [],
    }
    
})


async function getComentarios(){
    try {
        let response = await fetch(`${URL_SPLITED}/${ID_PRODUCTO}`);
        if (response.ok){
            let comentarios = await response.json();
            console.log(comentarios);
            if ( response.status == 200){
                comentariosApp.comentarios = comentarios;
            }
            
        }
       

    } catch (e){
        console.log(e);
    }
    
}

async function addComment(e) {
    let ID_USER = document.getElementById('id_user').getAttribute('data-id_user');

    e.preventDefault();
    let puntaje = document.querySelector('#puntaje').value;
    let review = document.querySelector('#review').value ;

    console.log("Puntaje " + puntaje);
    console.log("Review " + review);
    console.log("ID User " + ID_USER);
    console.log("Id producto " + ID_PRODUCTO); 

    
    let newComment = {
        puntaje: puntaje,
        review: review,
        id_user: ID_USER,
        id_producto: ID_PRODUCTO 
    }

    

    try {
        let res = await fetch(`${URL_SPLITED}/${ID_PRODUCTO}`, {
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
