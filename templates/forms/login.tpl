{include file="../header.tpl"}


    <div class="container p-md-5 m-md-3 text-center bg-light">
        <h1>{$titulo}</h1>
        <form class="text-center"action="verify" method="post">
            <div class="col">
                <input type="email" class="form-control " name="email" id="email" placeholder="Email" required>
            </div>
            <div class="col">
                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
            </div>
            <div class="float-start">
            <input type="submit" class="btn btn-primary" value="Entrar">
            </div>
        </form>       
    </div>


{include file="../footer.tpl"}