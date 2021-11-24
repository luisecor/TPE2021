"use strict"

const API_URL = "api/reviews/product";
const API_URL_DELETE = document.location.href.split("verProducto")[0]+ "api/reviews";
const URL_SPLITED = document.location.href.split("verProducto")[0]+API_URL;
const ID_PRODUCTO = document.getElementById('producto').getAttribute('data-producto');
const ROLEUSER = document.querySelector("#roleUser").getAttribute("data-roleUser");
document.querySelectorAll("#filtros")[0].setAttribute("hidden", true); // Haya o no haya comentarios oculto los filtros


if (ROLEUSER >0 ){
    let form = document.querySelector('#form');
    form.addEventListener('submit',addComment);
}


let comentariosApp = new Vue({
    el: "#comentariosApp",
    data : {
        comentarios: [],
        roleUser: ROLEUSER
    }
    
})

async function getComentariosXFiltro(filtro = null){
    if (filtro && filtro>=0 && filtro <=5){
        //console.log(filtro);
        await getComentarios(null,null,filtro);

    } else {
        await getComentarios();
    }
}

async function getComentarios(filtro = null, order = null, condicion = null){
    //console.log(order);
    //console.log("getComentarios" + condicion);
    try {
        let response;
        if (!filtro){
           // console.log("Sin filtro - Sin ORDEN "+`${URL_SPLITED}/${ID_PRODUCTO}`);
            response = await fetch(`${URL_SPLITED}/${ID_PRODUCTO}`);
            if (condicion){
                response = await fetch(`${URL_SPLITED}/${ID_PRODUCTO}?where=${condicion}`);
            }

        } else {
            if (!order){
               // console.log("Ccon filtro y sin ORDEN "+`${URL_SPLITED}/${ID_PRODUCTO}`);
                response = await fetch(`${URL_SPLITED}/${ID_PRODUCTO}?filtro=${filtro}`);
            }
                else{
               // console.log("CON filtro con ORDEN "+`${URL_SPLITED}/${ID_PRODUCTO}?filtro=${filtro}&order=${order}`);
                response = await fetch(`${URL_SPLITED}/${ID_PRODUCTO}?filtro=${filtro}&order=${order}`);
                }
        }
        if (response.ok){
            if (response.status == 200){
                let comentarios = await response.json();
               // console.log(comentarios);
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
            if (res.status == 200 ){
                console.log("Se ha agregado con exito");
                window.location.reload();
            }
            
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

        let botones = document.querySelectorAll("#comentariosApp button");

        for (const boton of botones){
            boton.addEventListener("click", async ()=>{
                const id_review = boton.id.split("-")[1];
                await deleteComment(id_review);        
            })
        }
    }  

    if (document.querySelectorAll(".comentario").length > 0){
        document.querySelectorAll("#filtros")[0].toggleAttribute("hidden")
        //Si tengo comentarios muestro los filtos
        let ordenadores = document.querySelectorAll("#filtros .orden");
        for (const ordenador of ordenadores){
            ordenador.addEventListener("click", async ()=>{
                let order = "desc";
                if (ordenador.hasAttribute("asc")){
                    ordenador.toggleAttribute("asc");
                     order = "asc";
                } else {
                    ordenador.toggleAttribute("asc");
                }
               // console.log(filtro.id.split("-")[1] + " order by " +order);
                await getComentarios( ordenador.id.split("-")[1], order); 
            })
        }

        let filtros = document.querySelectorAll("#filtros .filtro");
        for (let filtro of filtros){
            filtro.addEventListener("click", async ()=> {
                let identidicador = filtro.id.split("-")[2];
                //console.log(identidicador);
                await getComentariosXFiltro(identidicador);
            })
        }

    }
    
    })


