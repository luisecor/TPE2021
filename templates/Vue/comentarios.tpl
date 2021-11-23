{literal}
<div id="comentariosApp">
    <h3  class="m-md-3">Comentarios</h3>
                        <div v-for="comentario in comentarios">
                        <div class="card text-white  bg-dark mb-3" >
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