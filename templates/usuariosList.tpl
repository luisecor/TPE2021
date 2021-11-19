{include file="header.tpl"}
<div class="row justify-content-md-center">
    <div class="col-11">

        <div class="container text-center">
            <h2 class="text-center m-md-3 p-md-3">Lista de usuarios</h2>
        </div>
        <div class="row border p-1">
            <div class="row col-9">
                <div class="col">
                    <h5> Id Usuario </h5>
                </div>
                <div class="col">
                    <h5> Email </h5>
                </div>
                <div class="col">
                    <h5> Rol </h5>
                </div>
            </div>
            <div class="accordion accordion-flush">
                {foreach from=$usuarios item=$usuario}
                    <div class="row">
                        <div class="accordion-item">
                            <div class="accordion-button collapsed"> 
                                <div class="col"> {$usuario->id_user} </div>
                                <div class="col"> {$usuario->email} </div>
                                <div class="col"> {$usuario->roleUser} </div>
                                <div class="col-1 " scope="row">
                                    <a class="btn btn-primary" href="{$base_url}showFormUser/{$usuario->id_user}">Update</a>
                                </div>
                                <div class="col-1" scope="row">
                                    <a class="btn btn-warning" href="{$base_url}eliminarUsuario/{$usuario->id_user}">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
    </div>

{include file="footer.tpl"}