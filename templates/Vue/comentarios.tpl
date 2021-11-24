{literal}

    <h3  class="m-md-3">Comentarios</h3>
    <div id="filtros" class="row">
         <div  class="btn-group me-2" role="group" aria-label="First group">
                <span class =col-4> Ordernar comentarios por:   </span>
                <button type="button" id="filtro-antiq" class="orden btn btn-outline-secondary">Antigüedad</button>
                <button type="button" id="filtro-puntaje" class="orden btn btn-outline-secondary">Puntaje</button>
        </div>
        <div class="btn-group me-2" role="group" aria-label="First group">
                <span class =col-4> Filtrar comentarios segun puntaje   </span>
                <button type="button" id="filtro-puntaje-1" class="filtro btn btn-outline-secondary">1</button>
                <button type="button" id="filtro-puntaje-2" class="filtro btn btn-outline-secondary">2</button>
                <button type="button" id="filtro-puntaje-3" class="filtro btn btn-outline-secondary">3</button>
                <button type="button" id="filtro-puntaje-4" class="filtro btn btn-outline-secondary">4</button>
                <button type="button" id="filtro-puntaje-5" class="filtro btn btn-outline-secondary">5</button>
        </div>
    </div>
     
            
    <div id="comentariosApp">
                        <div v-for="comentario in comentarios">
                        <div class="comentario card text-white  bg-dark mb-3" >
                                <div class="card-header">{{comentario.user}}</div>
                                <div class="card-body">
                                    <p class="card-text text-center">{{comentario.review }}</p>
                                    <h5 class="card-title text-end">Puntuacion : {{comentario.puntaje }} </h5>
                                    <div id="id_comentario" hidden>{{comentario.id_review }}</div>


                                        <button v-if="roleUser == 1" type="button" v-bind:id="'deleteButton-' + comentario.id_review" class="btn btn-light">Eliminar Comentario </button>
                                   
                                </div>
                            </div>
                        </div>

</div>
    
                
{/literal}