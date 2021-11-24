{include file="header.tpl"}
<div class="row justify-content-md-center">
    <div class="col-11">

    

        <div class="container text-center">
            <h2 class="text-center m-md-3 p-md-3">Lista de productos</h2>
        </div>
        <div class="row border p-1">
            <div class="row">
                <div class="col">
                    <h5> Nombre </h5>
                </div>
                <div class="col">
                    <h5> Precio </h5>
                </div>
                <div class="col">
                    <h5> Categoria </h5>
                </div>
                <div class="col">
                    <h5> Descripcion </h5>
                </div>
            </div>
            {if $error}
                <div class="container alert alert-danger p-md-2 m-md-3" role="alert">
                    {$error}
                </div>
            {/if}    
            <div class="accordion accordion-flush">
                {foreach from=$productos item=$producto}
                    <div class="row">
                        <div class="accordion-item">
                            <div class="row"> 
                                <div class="col"> {$producto->nombre} </div>
                                <div class="col"> {$producto->precio} </div>
                                <div class="col">{$producto->categoria} </div>
                                <div class="col"><a class="btn btn-outline-secondary btn-sm" href="{$base_url}verProducto/{$producto->id_producto}"> Descripción </a> 
                                {if $logueado && $roleUser == 1}
                                        <a class="btn btn-outline-primary btn-sm" href="{$base_url}updateProductoMenu/{$producto->id_producto}">Update</a>
                                        <a class="btn btn-outline-warning btn-sm" href="{$base_url}eliminarProducto/{$producto->id_producto}">Eliminar</a>
                                {/if}
                                </div>
                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
    </div>

{include file="footer.tpl"}