{include file="header.tpl"}

<div class="row justify-content-md-center">
  <div class="col-11">

  <div class="p-md-3 m-md-3 container bg-light">

        <h3 class="text-center m-md-3 p-md-3"> Agregar Nuevo Producto </h3>
        <form action="{$base_url}addProducto" method="post" enctype="multipart/form-data">
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
          
          <div class="row mb-3">
            <label for="precio" class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" id="imagen" name="input_name">
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
          imagen
          <button type="submit" class="btn btn-primary">Agregar</button>
        </form>

    </div>
  </div>
</div>
{include file="footer.tpl"}