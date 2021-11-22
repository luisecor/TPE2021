{include file="header.tpl"}

<div class="row justify-content-md-center container ">
    <div class="col-11">
        <div class="container p-md-5 m-md-3 bg-light">
            <h2>Descripcion</h2>
            <div class="d-grid mx-auto">
                <h4 id="producto" data-producto="{$producto->id_producto}">Producto: {$producto->nombre}</h4>
                <p>{$producto->descripcion}</p>
            </div>      
        </div>
    </div>
</div>

{if $userRole eq 0 }

    <h5> Usuario no logueado --> Publico

{/if}

{if $userRole eq 1 }

    <h5> Administrador

{/if}

{if $userRole > 1 }

    <h5> Usuarios Normales

{/if}
        <div class="row justify-content-md-center container ">
            <div class="col-11">
                <div class="container p-md-2 m-md-3 bg-light">
                    <form action="{$base_url}sendReview" method="post">
                        <div class="form-floating m-md-3">
                            <textarea class="form-control" style="height: 100px"></textarea>
                            <label>Comenta aquí</label>
                            <div class="input-group mt-2">
                                <select class="form-select" id="puntaje" required>
                                    <option selected value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <button class="btn btn-outline-secondary bg-dark" type="submit">Send</button>
                            </div>
                        </div>
                        {if $userRole == 1} <!--//esto se hace con vue.js
                            <a class="btn btn-warning" href="{$base_url}eliminarComentario/{$comentario->id_review}">Eliminar</a>
                            -->
                        {/if}
                    </form>
                   {include file="Vue/comentarios.tpl"} 
                  
                </div>   
            </div>
        </div>
    <script src="../js/comentariosApp.js"></script>

{include file="footer.tpl"}