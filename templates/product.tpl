{include file="header.tpl"}

<div class="row justify-content-md-center container ">
    <div class="col-11">
        <div class="container p-md-5 m-md-3 bg-light">
            <h2>Descripcion</h2>
            <div class="d-grid mx-auto">
                <h4>Producto: {$producto->nombre}</h4>
                <p>{$producto->descripcion}</p>
            </div>      
        </div>
    </div>
</div>

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
            <h3 class="m-md-3">Review</h3>
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header border-light">Usuario</div>
                <div class="card-body">
                    <p class="card-text"> Comment comment comment comment comment comment comment comment comment comment comment comment. </p>
                </div>
            </div>
        </div>   
    </div>
</div>

{include file="footer.tpl"}