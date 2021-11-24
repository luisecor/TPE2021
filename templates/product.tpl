{include file="header.tpl"}

<div class="row justify-content-md-center container ">
    <div class="col-11">
        <div class="container p-md-5 m-md-3 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                    <h2>Descripcion</h2>
                    <div class="d-grid mx-auto">
                        <h4 id="producto" data-producto="{$producto->id_producto}">Producto: {$producto->nombre}</h4>
                        <p>{$producto->descripcion}</p>
                    </div>
                    </div>
                    <div class="col-4">
                    {if $producto->imagen}
                        <img src="../{$producto->imagen}" class="rounded" style="max-width: 200px;">
                    {/if} 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-md-center container ">
    <div class="col-11">
        <div class="container p-md-2 m-md-3 bg-light">
            <div id="roleUser" data-roleUser = "{$roleUser}" hidden></div>
            {if $roleUser > 0 }
                <form id="form" action="{$base_url}sendReview" method="post">
                    <div class="form-floating m-md-3">
                        <textarea id="review" class="form-control" style="height: 100px"></textarea>
                        <label>Comenta aquí </label>
                        <div id="id_user" data-id_user="{$id_user}" class="input-group mt-2">
                            <select id="puntaje" class="form-select" id="puntaje" required>
                                <option selected value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <button  class="btn btn-outline-secondary bg-dark" type="submit">Comentar</button>
                        </div>
                    </div>
                </form>               

            {/if} 
            {include file="Vue/comentarios.tpl"}
            {if $roleUser eq 0 }
                <div> <h5> Para dejar un comentario es necesario estar logeado</h5> </div>
            {/if}
        </div>   
    </div>
</div>

<script src="../js/comentariosApp.js"></script>
  

{include file="footer.tpl"}