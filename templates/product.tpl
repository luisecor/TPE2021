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
{include file="footer.tpl"}