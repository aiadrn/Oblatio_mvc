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
class AdministradorController extends ControladorBase {

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
        $administrador = new Administrador($this->adapter);

        //Conseguimos todos los usuarios
        $allusers = $administrador->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("administrador/indexAdministradorView", array(
            "allusers" => $allusers,
            "nombre" => "ADSI"
        ));
    }

    public function nuevoRegistro() {
        $this->view("administrador/crearAdministradorView");
    }   
    
    public function ver() {
        if (isset($_GET["codigo"])) {
            $codigo = (int) $_GET["codigo"];
            $administrador = new Administrador($this->adapter);
            $getEdit = $administrador->getById("adm_id", $codigo);
            $this->view("administrador/verAdministradorView", array("getEdit" => $getEdit));
        }
    }
    public function crear() {
        if (isset($_POST["codigo"])) {

            //Creamos un usuario
            $administrador = new Administrador($this->adapter);
            $administrador->setAdm_id($_POST["codigo"]);
            $administrador->setAdm_nombre($_POST["nombre"]);
            $administrador->setAdm_apellidos($_POST["apellidos"]);
            $administrador->setAdm_telefono($_POST["telefono"]);
            $administrador->setAdm_correo($_POST["correo"]);
            $administrador->setAdm_alias($_POST["alias"]);
            $administrador->setAdm_contrasena(sha1($_POST["contrasena"]));
            $administrador->setAdm_tipo_administrador(0);
            $save = $administrador->save();
        }
        $this->redirect("Administrador", "index");
    }

    public function borrar() {
        if (isset($_GET["codigo"])) {
            $codigo = (int) $_GET["codigo"];
            $administrador = new Administrador($this->adapter);
            $administrador->deleteById("adm_id", $codigo);
        }
        $this->redirect("Administrador", "index");
    }

    public function modificar() {

        if (isset($_GET["codigo"])) {
            $codigo = (int) $_GET["codigo"];
            $administrador = new Administrador($this->adapter);
            $getEdit = $administrador->getById("adm_id", $codigo);
            $this->view("administrador/editarAdministradorView", array("getEdit" => $getEdit));
        }
    }

    public function editar() {

        if (isset($_POST["codigo"])) {

            //actualizamos 
            $codigo = (int) $_POST["codigo"];
            $administrador = new Administrador($this->adapter);
            $administrador->setAdm_id($_POST["codigo"]);
            $administrador->setAdm_nombre($_POST["nombre"]);
            $administrador->setAdm_apellidos($_POST["apellidos"]);
            $administrador->setAdm_telefono($_POST["telefono"]);
            $administrador->setAdm_correo($_POST["correo"]);
            $administrador->setAdm_alias($_POST["alias"]);
            $administrador->setAdm_contrasena(sha1($_POST["contrasena"]));
            $administrador->update();
        }
        $this->redirect("Administrador", "index");
    }

    public function hola() {
        echo "Hola administrador ADSI";
    }

}
