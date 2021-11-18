<?php

require_once 'Vuew/ApiView.php';
//agrego el model 

class ApiController {

    private $model;
    private $view;

    function __construct(){
        //$this->model = new Model();
        $this->view = new ApiView();
    }

    //Leer cuerpo del mensaje. Devuelve el body del request
    //Permite leer la entrada enviada en formato RAW
    //Similar a $_POST, excepto que:
    //No es un arreglo, es un string de los datos crudos
    //No importa que verbo se uso (POST, GET, PUT, ...)
    protected function getBody(){
        $bodyString = file_get_contents("php://input");//Convertir el string recibido a JSON
        return json_decode($bodyString); //Devuelve un objeto JSON
    }

}