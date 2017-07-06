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
class InfoController extends ControladorBase {

    //put your code here
    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function index() {
        //Cargamos la vista index y le pasamos valores
        $this->view("informacion/infoView");
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

    public function hola() {
        echo "info";
    }

}
