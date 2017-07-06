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
class DepartamentoController extends ControladorBase {
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
        $departamento = new Departamento($this->adapter);

        //Conseguimos todos los usuarios
        $allusers = $departamento->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("departamento/indexDepartamentoView", array(
            "allusers" => $allusers,
            "nombre" => "ADSI"
        ));
    }
    
     public function nuevoRegistro() {
            $this->view("departamento/crearDepartamentoView");
    }

    public function crear() {
        if (isset($_POST["codigo"])) {

            //Creamos un departamento
            $departamento = new Departamento($this->adapter);
            $departamento->setDep_id($_POST["codigo"]);
            $departamento->setDep_nombre($_POST["nombre"]);            
            $save = $departamento->save();
        }
        $this->redirect("Departamento", "index");
    }

    public function borrar() {
        if (isset($_GET["codigo"])) {
            $id = (int) $_GET["codigo"];
            $departamento = new Departamento($this->adapter);
            $departamento->deleteById("dep_id", $id);
        }
        $this->redirect("Departamento", "index");
    }

    public function modificar() {

        if (isset($_GET["codigo"])) {
            $id = (int) $_GET["codigo"];
            $departartamento = new Departamento($this->adapter);
            $getEdit = $departartamento->getById("dep_id", $id);
            $this->view("departamento/editarDepartamentoView", array("getEdit" => $getEdit));
        }
    }

    public function editar() {

        if (isset($_POST["codigo"])) {

            //actualizamos un usuario
            $id = (int) $_POST["codigo"];
            $departamento = new Departamento($this->adapter);
            $departamento->setDep_id($_POST["codigo"]);
            $departamento->setDep_nombre($_POST["nombre"]);            
            $departamento->update();
        } 
        $this->redirect("Departamento", "index");
    }

    public function hola() {
        echo "Departamento";
    }
}
