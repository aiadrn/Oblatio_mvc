<?php

class PrincipalController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();        
    }

    public function index() {
        
       $producto = new Producto($this->adapter);

        //Conseguimos 
        $allusers = $producto->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("producto/indexProductoView", array(
            "allusers" => $allusers
        ));
    }

    

}
