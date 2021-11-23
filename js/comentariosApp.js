"use strict"

const API_URL = "api/reviews/product";
const API_URL_DELETE = document.location.href.split("verProducto")[0]+ "api/reviews";
const URL_SPLITED = document.location.href.split("verProducto")[0]+API_URL;
const ID_PRODUCTO = document.getElementById('producto').getAttribute('data-producto');
const ROLEUSER = document.querySelector("#roleUser").getAttribute("data-roleUser");


if (ROLEUSER >0 ){
    let form = document.querySelector('#form');
    form.addEventListener('submit',addComment);
}


function eliminar (){
    console.log("HOLA");
}


let comentariosApp = new Vue({
    el: "#comentariosApp",
    data : {
        comentarios: [],
        roleUser: ROLEUSER
    }
    
})


async function getComentarios(){
    try {
        let response = await fetch(`${URL_SPLITED}/${ID_PRODUCTO}`);
        if (response.ok){
            if (response.status == 200){
                let comentarios = await response.json();
                console.log(comentarios);
                comentariosApp.comentarios = comentarios;
            }   else {
                if (response.status == 204){
                    comentariosApp.comentarios = "";
                }
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
            window.location.reload();
        }
    } catch (error) {
        console.log(error);
    }
}


async function deleteComment(id_review){
    try {
        let response = await fetch (`${API_URL_DELETE}/${id_review}`,{
            "method" : "DELETE"
        });

        if (response.status == 200){
            await getComentarios();
        }

    } catch(e){
        console.log(e);
    }
}



document.addEventListener('DOMContentLoaded', async() =>{
    await getComentarios();
    //Una vez que esta la pagina totalente cargada-->Que ya paso por el VUE
    if (ROLEUSER == 1){
        console.log("USUARIO ADMIN");
        
        let botones = document.querySelectorAll("#comentariosApp button");

        for (const boton of botones){
            boton.addEventListener("click", async ()=>{
                const id_review = boton.id.split("-")[1];
                console.log(id_review);
                await deleteComment(id_review);        
            })
        }
        // botones.forEach(boton => {boton.addEventListener("click",async (e)=>{
        //     console.log(boton);    
        // })});
    }  
    
    })


