{include file="header.tpl"}
<div class="row justify-content-md-center">
  <div class="col-11">

    <div class="container text-center">
        <h2 class="text-center m-md-3 p-md-3">Lista de productos</h2>
    </div>
    <div class="row border p-1"> 
      <div class="row">
        <div class="col"> <h5> Nombre </h5></div> 
        <div class="col"> <h5> Precio  </h5></div>
        <div class="col"><h5> Categoria  </h5></div> 
      </div>

        <div class="accordion accordion-flush" id="accordionFlushExample">
          {foreach from=$productos item=$producto}
            <div class="row">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading{$producto->id_producto}">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-{$producto->id_producto}" aria-expanded="false" aria-controls="flush-{$producto->id_producto}">
                    <div class="col"> {$producto->nombre} </div> <div class="col"> {$producto->precio} </div><div class="col">{$producto->categoria} </div>
                  </button>
                </h2>
                <div id="flush-{$producto->id_producto}" class=" row accordion-collapse collapse" aria-labelledby="flush-heading{$producto->id_producto}" data-bs-parent="#accordionFlushExample">
                  <hr class="dropdown-divider">
                  <div class=" col-10"> <h5> Descripcion </h5>{$producto->descripcion}</div>
                    {if $logueado}
                      <div  class="col-1 "scope="row"><a class="btn btn-primary"href="{$base_url}updateProductoMenu/{{$producto->id_producto}}">Update</a></div>   
                      <div class="col-1"scope="row"><a class="btn btn-warning"href="{$base_url}eliminarProducto/{{$producto->id_producto}}">Eliminar</a></div>      
                    {/if}
                  </div>
                </div>
              </div>
          {/foreach}
        </div>
  </div>
</div>

{include file="footer.tpl"}