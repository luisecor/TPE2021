{include file="header.tpl"}




    {if $categoria}
        <h3 class="text-center"> Modificar categoria </h3>

        <form action="{$base_url}updateCategoria" method="post">

            <div class="row mb-3">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre" name="nombre" required value="{$categoria->nombre}">
                </div>
            </div>
   
            <input type="number" name="id" id="id" hidden  required value="{$categoria->id_categoria}">  
            <button type="submit" class="btn btn-primary">Modificar</button>
           

        </form>

    {else}
        <h3 class="text-center"> Agregar nueva categoria </h3>
         <form  action="{$base_url}addCategoria" method="post">

          <div class="row mb-3">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre" name="nombre" required  placeholder="Nombre Categoria Nueva">
                </div>
            </div>
   
             <button type="submit" class="btn btn-primary">Agregar</button>
            

        </form>
    {/if}
        
        




{include file="footer.tpl"}