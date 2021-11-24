{include file="./header.tpl"}

<div class="row justify-content-md-center">
    <div class="col-11">

        <div class="container text-center">
            <h2 class="text-center m-md-3 p-md-3">Lista de Categorías</h2>
        </div>
        <div class="row border p-1">
            <div class="row">
                <div class="col">
                    <h5> Nombre </h5>
                </div>
            </div>

            <div class="accordion accordion-flush">
                {foreach from=$categorias item=$categoria}
                    <div class="row">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading{$categoria->id_categoria}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-{$categoria->id_categoria}" aria-expanded="false"
                                    aria-controls="flush-{$categoria->id_categoria}">
                                    <div class="col"> {$categoria->nombre} </div>
                                </button>
                            </h2>
                            <div id="flush-{$categoria->id_categoria}" class="row accordion-collapse collapse"
                                aria-labelledby="flush-heading{$categoria->id_categoria}">


                                <div class="row"> {* Productos *}
                                    <div class="row">
                                        <div class="col">
                                            <h6> Nombre </h6>
                                        </div>
                                        <div class="col">
                                            <h6> Precio </h6>
                                        </div>
                                        <div class="col">
                                            <h6> Categoria </h6>
                                        </div>
                                    </div>
                                    {foreach from=$productos item=$producto}
                                        <div class="row m-md-1">
                                            {if $producto->fk_categoria eq $categoria->id_categoria}
                                                <div class="col"> {$producto->nombre} </div>
                                                <div class="col"> {$producto->precio} </div>
                                                <div class="col">{$categoria->nombre} </div>
                                            {/if}
                                        </div>
                                    {/foreach}
                                    {if $logueado && $roleUser == 1}
                                       <div class="d-flex flex-row-reverse">
                                            <div class="col-1">
                                                <a class="btn btn-outline-primary btn-sm" href="{$base_url}updateCategoriaMenu/{$categoria->id_categoria}">Update</a>
                                            </div>
                                            <div class="col-1">
                                                <a class="btn btn-outline-warning btn-sm float-right" href="{$base_url}eliminarCategoria/{$categoria->id_categoria}">Eliminar</a>
                                            </div>
                                       </div>
                                    {/if}
                                </div>

                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>

            {if $error}
                <div class="container alert alert-danger" role="alert">
                    {$error}
                </div>
            {/if}
        </div>
    </div>

{include file="./footer.tpl"}