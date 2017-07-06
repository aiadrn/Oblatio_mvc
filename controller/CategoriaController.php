<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdministradorController
 *
 * @author Adrian
 */
class CategoriaController extends ControladorBase {
    //put your code here
    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function index() {

        //Creamos el objeto 
        $categoria = new Categorias($this->adapter);

        //Conseguimos todos los usuarios
        $allusers = $categoria->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("categoria/indexCategoriaView", array(
            "allusers" => $allusers,
            "nombre" => "ADSI"
        ));
    }
    
     public function nuevoRegistro() {
            $this->view("categoria/crearCategoriaView");
    }
    public function crear() {
        if (isset($_POST["codigo"])) {

            //Creamos una categoria
            $categoria = new Categorias($this->adapter);
            $categoria->setcat_id($_POST["codigo"]);
            $categoria->setcat_nombre($_POST["nombre"]);
            $categoria->setcat_descripcion($_POST["descripcion"]);
            $save = $categoria->save();
        }
        $this->redirect("categoria", "index");
    }
    public function ver() {
        if (isset($_GET["codigo"])) {
            $codigo = (int) $_GET["codigo"];
            $Categoria = new Categorias($this->adapter);
            $getEdit = $Categoria->getById("cat_id", $codigo);
            $this->view("categoria/verCategoriasView", array("getEdit" => $getEdit));
        }
    }

    public function borrar() {
        if (isset($_GET["codigo"])) {
            $id = (int) $_GET["codigo"];
            $categoria = new Categorias($this->adapter);
            $categoria->deleteById("cat_id", $id);
        }
        $this->redirect("categoria", "index");
    }

    public function modificar() {

        if (isset($_GET["codigo"])) {
            $id = (int) $_GET["codigo"];
            $categoria = new Categorias($this->adapter);
            $getEdit = $categoria->getById("cat_id", $id);
            $this->view("categoria/editarCategoriaView", array("getEdit" => $getEdit));
        }
    }

    public function editar() {

        if (isset($_POST["codigo"])) {

            //actualizamos una categoria
            $id = (int) $_POST["codigo"];
            $categoria = new Categorias($this->adapter);
            $categoria->setCat_id($_POST["codigo"]);
            $categoria->setCat_nombre($_POST["nombre"]);  
            $categoria->setCat_descripcion($_POST["descripcion"]); 
            $categoria->update();
        } 
        $this->redirect("categoria", "index");
    }

    public function hola() {
        echo "Categorias";
    }
}
