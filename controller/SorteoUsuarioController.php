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
class SorteoUsuarioController extends ControladorBase {

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
        $sorteo_usuario = new SorteoUsuario($this->adapter);

        //Conseguimos todos los usuarios
        $allusers = $sorteo_usuario->joinSorteoUsuario();

        //Cargamos la vista index y le pasamos valores
        $this->view("sorteoUsuario/indexSorteoUsuarioView", array(
            "allusers" => $allusers
        ));
    }

    public function ver() {
        if (isset($_GET["codigoEmp"]) && isset($_GET["codigoUsu"])) {
            $codigo = (int) $_GET["codigoEmp"];
            $codigo2 = (int) $_GET["codigoUsu"];
            $empresaUsuario = new EmpresaUsuario($this->adapter);
            $getEdit = $empresaUsuario->joinEmpresaUsuario2($codigo, $codigo2);
            $this->view("empresaUsuario/verEmpresaUsuarioView", array("getEdit" => $getEdit));
        }
    }

    public function nuevoRegistro() {
        $usuario = new Usuario($this->adapter);
        $getEdit = $usuario->getAll();
        $sorteo = new Sorteo($this->adapter);
        $getEdit2 = $sorteo->getAll();
        $this->view("sorteoUsuario/crearSorteoUsuarioView", array("getEdit" => $getEdit, "getEdit2" => $getEdit2));
    }

    public function crear() {
        if (isset($_POST["sorteoCodigo"])) {
            //Creamos
            $sorteo_usuario = new SorteoUsuario($this->adapter);
            $sorteo_usuario->setSor_cod($_POST["sorteoCodigo"]);
            $sorteo_usuario->setUsu_cod($_POST["usuarioCodigo"]);
            $sorteo_usuario->setContenido_observacion($_POST["comentario"]);
            $save = $sorteo_usuario->save();
        }
        $this->redirect("sorteoUsuario", "index");
    }

    public function borrar() {
        if (isset($_GET["codigoUsu"]) && isset($_GET["codigoSor"])) {
            $codigoUsu = (int) $_GET["codigoUsu"];
            $codigoSor = (int) $_GET["codigoSor"];
            $sorteoUsuario = new SorteoUsuario($this->adapter);
            $sorteoUsuario->deleteByIds($codigoSor, $codigoUsu);
        }
        $this->redirect("sorteoUsuario", "index");
    }
    public function modificar() {

        if (isset($_GET["codigoUsu"]) && isset($_GET["codigoSor"])) {
            $codigoUsu = (int) $_GET["codigoUsu"];
            $codigoSor = (int) $_GET["codigoSor"];
            $sorteo_usuario = new SorteoUsuario($this->adapter);
            $getEdit = $sorteo_usuario->getByIds("sor_cod", $codigoSor, "usu_cod", $codigoUsu);
            $this->view("sorteoUsuario/editarSorteoUsuarioView", array("getEdit" => $getEdit));
        }
    }
    public function editar() {
        if (isset($_POST["sorteoCodigo"]) && isset($_POST["usuarioCodigo"])) {
            //actualizar
            $id = (int) $_POST["sorteoCodigo"];
            $id = (int) $_POST["usuarioCodigo"];
            $sorteo_usuario = new SorteoUsuario($this->adapter);
            $sorteo_usuario->setSor_cod($_POST["sorteoCodigo"]);
            $sorteo_usuario->setUsu_cod($_POST["usuarioCodigo"]);
            $sorteo_usuario->setContenido_observacion($_POST["comentario"]);
            $sorteo_usuario->update();
        }
        $this->redirect("sorteoUsuario", "index");
    }

    public function hola() {
        echo "Sorteo Usuario";
    }

}
