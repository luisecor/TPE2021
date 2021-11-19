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

<div class="row justify-content-md-center container ">
    <div class="col-11">
        <div class="container p-md-2 m-md-3 bg-light">
            <form action="{$base_url}sendReview" method="post">
                <div class="form-floating">
                    <textarea class="form-control" style="height: 100px"></textarea>
                    <label>Comenta aquí</label>
                </div> 
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary m-md-2" type="submit">Send</button>
                </div>
            </form>
            <h3 class="m-md-3">Review</h3>
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header border-light">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>   
    </div>
</div>

{include file="footer.tpl"}