{include file="./header.tpl"}

  <div class="container text-center">
      <h2 cass="text-center">Lista de Categorías</h2>
  </div>
  <div class="row"> 
        <div class="row">
            <div class="col"> <h5> Nombre </div> 
        </div>



      
      <div class="accordion accordion-flush" id="accordionFlushExample">
      {foreach from=$categorias item=$categoria}
        <div class="row">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-heading{$categoria->id_categoria}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-{$categoria->id_categoria}" aria-expanded="false" aria-controls="flush-{$categoria->id_categoria}">
                      <div class="col">  {$categoria->nombre}  </div>
                        
                      
                    </button>
                  </h2>
                  <div id="flush-{$categoria->id_categoria}" class=" row accordion-collapse collapse" aria-labelledby="flush-heading{$categoria->id_categoria}" data-bs-parent="#accordionFlushExample">
                   

                      <div class="row"> 
                        <div class="row">
                            <div class="col"> <h6> Nombre </div> <div class="col"> <h6> Precio  </div><div class="col"><h6> Categoria  </div> 
                        </div>
                        {foreach from=$productos item=$producto}
                        <div class="row">
                        {if $producto->fk_categoria eq $categoria->id_categoria}
                          <div class="col"> {$producto->nombre} </div> <div class="col"> {$producto->precio}  </div><div class="col">{$categoria->nombre}  </div> 
                        {/if}
                        
                       
                        </div>
                          
                        {/foreach}
                        <hr class="dropdown-divider">
                        {if $logueado}
                                  <div  class="col-1 "scope="row"><a class="btn btn-primary"href="{$base_url}updateCategoriaMenu/{$categoria->id_categoria}">Update</a></div>   
                                  <div class="col-1"scope="row"><a class="btn btn-warning"href="{$base_url}eliminarCategoria/{$categoria->id_categoria}">Eliminar</a></div>    
                                  <hr class="dropdown-divider">
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

{include file="./footer.tpl"}