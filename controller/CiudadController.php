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
class CiudadController extends ControladorBase {

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
        $ciudad = new Ciudad($this->adapter);

        //Conseguimos todos los registros
        $allusers = $ciudad->joinCiudadDepartamento();

        //Cargamos la vista index y le pasamos valores
        $this->view("ciudad/indexCiudadView", array(
            "allusers" => $allusers
        ));
    }

    public function nuevoRegistro() {
        $departamento = new Departamento($this->adapter);
        $getEdit = $departamento->getAll();
        $this->view("ciudad/crearCiudadView", array("getEdit" => $getEdit));
    }

    public function crear() {
        if (isset($_POST["codigo"])) {

            //Creamos una ciudad
            $ciudad = new Ciudad($this->adapter);
            $ciudad->setCiu_id($_POST["codigo"]);
            $ciudad->setCiu_nombre($_POST["nombre"]);
            $ciudad->setFk_dep_id($_POST["fk_dep_id"]);
            $save = $ciudad->save();
        }

        $this->redirect("Ciudad", "index");
    }

    public function borrar() {
        if (isset($_GET["codigo"])) {
            $id = (int) $_GET["codigo"];
            $ciudad = new Ciudad($this->adapter);
            $ciudad->deleteById("ciu_id", $id);
        }
        $this->redirect("Ciudad", "index");
    }

    public function modificar() {

        if (isset($_GET["codigo"])) {
            $id = (int) $_GET["codigo"];
            $ciudad = new Ciudad($this->adapter);
            $getEdit = $ciudad->getById("ciu_id", $id);
            $departamento = new Departamento($this->adapter);
            $getEdit2 = $departamento->getAll();
            $this->view("ciudad/editarCiudadView", array("getEdit" => $getEdit, "getEdit2" => $getEdit2));
        }
    }

    public function editar() {

        if (isset($_POST["codigo"])) {

            //actualizamos una ciudad
            $id = (int) $_POST["codigo"];
            $ciudad = new Ciudad($this->adapter);
            $ciudad->setCiu_id($_POST["codigo"]);
            $ciudad->setCiu_nombre($_POST["nombre"]);
            $ciudad->setFk_dep_id($_POST["fk_dep_id"]);
            $ciudad->update();
        }
        $this->redirect("Ciudad", "index");
    }

    public function hola() {
        echo "Ciudad";
    }

}
