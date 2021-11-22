{literal}
        
   <h3 class="m-md-3">Review</h3>

                    <div id="comentariosApp"class="card text-white bg-dark mb-3" style="max-width: 18rem">
                        
                        <div v-for="comentario in comentarios">

                            <div class="card-header border-light">{{comentario.id_user}}</div>
                            <div class="card-body">
                                <p class="card-text"> {{comentario.review }} </p>
                            </div>

                        
                        </div>
                       
                    </div>

                
{/literal}