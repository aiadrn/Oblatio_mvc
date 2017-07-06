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
class EmpresaUsuarioController extends ControladorBase {

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
        $empresa_usuario = new EmpresaUsuario($this->adapter);

        //Conseguimos todos los usuarios
        $allusers = $empresa_usuario->joinEmpresaUsuario();

        //Cargamos la vista index y le pasamos valores
        $this->view("empresaUsuario/indexEmpresaUsuarioView", array(
            "allusers" => $allusers,
            "nombre" => "ADSI"
        ));
    }

    public function ver() {
        if (isset($_GET["codigoEmp"])&&isset($_GET["codigoUsu"])) {
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
        $empresa = new Empresa($this->adapter);
        $getEdit2 = $empresa->getAll();
        $this->view("empresaUsuario/crearEmpresaUsuarioView", array("getEdit" => $getEdit, "getEdit2" => $getEdit2));
    }

    public function crear() {
        if (isset($_POST["empresaCodigo"])) {
            date_default_timezone_set('America/Bogota');
            $fecha = date("Y-m-d");
            //Creamos
            $empresa_usuario = new EmpresaUsuario($this->adapter);
            $empresa_usuario->setEmp_cod($_POST["empresaCodigo"]);
            $empresa_usuario->setUsu_cod($_POST["usuarioCodigo"]);
            $empresa_usuario->setFecha($fecha);
            $empresa_usuario->setEstrellas($_POST["estrellas"]);
            $empresa_usuario->setComentario($_POST["comentario"]);
            $save = $empresa_usuario->save();
        }
        $this->redirect("empresaUsuario", "index");
    }

    public function borrar() {
        if (isset($_GET["codigoUsu"]) && isset($_GET["codigoEmp"])) {
            $codigoUsu = (int) $_GET["codigoUsu"];
            $codigoEmp = (int) $_GET["codigoEmp"];
            $empresaUsuario = new EmpresaUsuario($this->adapter);
            $empresaUsuario->deleteByIds($codigoEmp, $codigoUsu);
        }
        $this->redirect("empresaUsuario", "index");
    }

    public function modificar() {

        if (isset($_GET["codigoUsu"]) && isset($_GET["codigoEmp"])) {
            $codigoUsu = (int) $_GET["codigoUsu"];
            $codigoEmp = (int) $_GET["codigoEmp"];
            $empresa_usuario = new EmpresaUsuario($this->adapter);
            $getEdit = $empresa_usuario->getByIds("emp_cod", $codigoEmp, "usu_cod", $codigoUsu);
            $this->view("empresaUsuario/editarEmpresaUsuarioView", array("getEdit" => $getEdit));
        }
    }

    public function editar() {

        if (isset($_POST["empresaCodigo"]) && isset($_POST["usuarioCodigo"])) {

            //actualizar
            $id = (int) $_POST["empresaCodigo"];
            $id = (int) $_POST["usuarioCodigo"];
            $empresa_usuario = new EmpresaUsuario($this->adapter);
            $empresa_usuario->setEmp_cod($_POST["empresaCodigo"]);
            $empresa_usuario->setUsu_cod($_POST["usuarioCodigo"]);
            $empresa_usuario->setFecha($_POST["fecha"]);
            $empresa_usuario->setEstrellas($_POST["estrellas"]);
            $empresa_usuario->setComentario($_POST["comentario"]);
            $empresa_usuario->update();
        }
        $this->redirect("empresaUsuario", "index");
    }

    public function hola() {
        echo "Empresa Usuario";
    }

}
