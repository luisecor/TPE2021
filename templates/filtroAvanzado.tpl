 </div>
    <div class ="row" id="filtroAvanzado">

        <p>
            <a class="btn btn-outline-primary btn-sm float-end" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Filtros de Productos
            </a>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <form action="filtroAvanzado" method="get" id="filtroAvanzado">
                <fieldset >
                    <legend>Filtro de Productos</legend>
                    
                    <div class="mb-3">
                        <label for="categorias" class="form-label">Categorias</label>
                        <select name="categoria" id="categorias" class="form-select">
                        <option id="0" value ="0">TODAS</option>
                        {foreach from=$CATEGORIAS item=$categoria}
                            
                            <option id="{$categoria->id_categoria}" value="{$categoria->id_categoria}">{$categoria->nombre}</option>
                            
                        {/foreach}
                        </select>                        
                    </div>
                    <div class="mb-3">
                    <div class="form-check">
                        <label for="customRange3" class="form-label">Precio</label>
                    <input name="maxPrice" id="precio" type="range" class="form-range" min="0" max="{$maxPrice}" step="0.5" id="customRange3">
                    </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary float-end">Filtrar</button>
                </fieldset>
            </form>
        </div>
    </div>

    <script src="{BASE_URL}/js/filtroAvanzado.js"></script>