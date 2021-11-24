{literal}

    <h3  class="m-md-3">Comentarios</h3>
    <div class="row">
         <div id="filtros" class="btn-group me-2" role="group" aria-label="First group">
                <span class =col-4> Filtrar comentarios por:   </span>
                <button type="button" id="filtro-antiq" class="btn asc btn-outline-secondary">Antigüedad</button>
                <button type="button" id="filtro-puntaje" class="btn asc btn-outline-secondary">Puntaje</button>
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