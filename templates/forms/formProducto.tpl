{include file="header.tpl"}

<div class="row justify-content-md-center">
  <div class="col-11">

  <div class="p-md-3 m-md-3 container bg-light">

    {*Se utiliza el mismo TEMPLATE el UPDATE y para NEW Producto*}

      {if isset($categorias) && !isset($producto)}
        <h3 class="text-center m-md-3 p-md-3"> Agregar Nuevo Producto </h3>
        <form action="{$base_url}addProducto" method="post">
          <div class="row mb-3">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="nombre" required >
            </div>
          </div>
          <div class="row mb-3">
            <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="descripcion" name="descripcion"  required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="precio" class="col-sm-2 col-form-label">Precio</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="precio" name="precio" required>
            </div>
          </div>
          <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Categorias</legend>
            <div class="col-sm-10">
              {foreach from=$categorias item=$categoria }
                <div class="form-check">
                  <input required class="form-check-input" type="radio" name="categoria" id="{$categoria->id_categoria}" value="{$categoria->id_categoria}" >
                  <label class="form-check-label" for="{$categoria->id_categoria}">
                    {$categoria->nombre}
                  </label>
                </div>
              {/foreach}
            </div>
          </fieldset>
          <button type="submit" class="btn btn-primary">Agregar</button>
      {/if}

      {if isset($producto) &&  isset($categorias)}
        <h3 class="text-center m-md-3 p-md-3"> Modificar  Producto </h3>
        <form action="{$base_url}updateProducto" method="post">
          <div class="row mb-3">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="nombre" required value="{$producto->nombre}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="descripcion" name="descripcion" value="{$producto->descripcion}" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Precio</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="precio" name="precio"value="{$producto->precio}" required>
            </div>
          </div>
          <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Categorias</legend>
            <div class="col-sm-10">
              {foreach from=$categorias item=$categoria }
                <div class="form-check">
                  {if $producto->fk_categoria eq $categoria->id_categoria} 
                    <input class="form-check-input" type="radio" name="categoria" id="{$categoria->id_categoria}" value="{$categoria->id_categoria}" checked>
                  {else}
                    <input class="form-check-input" type="radio" name="categoria" id="{$categoria->id_categoria}" value="{$categoria->id_categoria}" >
                  {/if} 
                  <label class="form-check-label" for="{$categoria->id_categoria}">
                    {$categoria->nombre}
                  </label>
                </div>
              {/foreach}
            </div>
          </fieldset>
          <input type="number" name="id" id="id" hidden required value="{$producto->id_producto}">
          <button type="submit" class="btn btn-primary">Modificar</button>
        </form>
      {/if}
      
    </div>
  </div>
</div>
{include file="footer.tpl"}