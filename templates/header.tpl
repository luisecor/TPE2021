<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>TecnoShop!</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TecnoShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{BASE_URL}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{BASE_URL}verProductos">Productos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"> Categorias </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            {foreach from=$CATEGORIAS item=$categoria}
                                <li> <a class="dropdown-item" href="{BASE_URL}verCategoria/{$categoria->id_categoria}">
                                        {$categoria->nombre} </a></li>
                            {/foreach}
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item" href="{BASE_URL}verCategorias"> Ver Categrias </a></li>
                        </ul>
                    </li>

                    {if $logueado}
                        {if $roleUser == 1}
                            <li class="nav-item">
                                <a class="nav-link" href="{BASE_URL}showFormProduct">Agregar Producto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{BASE_URL}showFormCategoria">Agregar Categoria</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{BASE_URL}showUsuarios">Usuarios</a>
                            </li>
                        {/if}
                        <li class="nav-item">
                            <a class="nav-link" href="{BASE_URL}logout">Logout</a>
                        </li>
                    {else}
                        <li class="nav-item">
                            <a class="nav-link" href="{BASE_URL}login">Login</a>
                        </li>
                           <li class="nav-item">
                            <a class="nav-link" href="{BASE_URL}signIn">Sign In</a>
                        </li>
                    {/if}
                </ul>
            </div>
        </div>
    </nav>

<div class="container-fluid">