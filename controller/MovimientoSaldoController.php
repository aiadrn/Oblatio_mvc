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
class MovimientoSaldoController extends ControladorBase {

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
        $movimiento_saldo = new MovimientoSaldo($this->adapter);

        //Conseguimos todos los usuarios
        $allusers = $movimiento_saldo->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("movimientoSaldo/indexMovimientoSaldoView", array(
            "allusers" => $allusers
        ));
    }

    public function ver() {
        if (isset($_GET["codigo"])) {
            $codigo = (int) $_GET["codigo"];
            $movimientoSaldo = new MovimientoSaldo($this->adapter);
            $getEdit = $movimientoSaldo->getById($codigo, 'mov_id');
            $this->view("movimientoSaldo/verMovimientoSaldoView", array("getEdit" => $getEdit));
        }
    }

    public function nuevoRegistro() {
        $usuario = new Usuario($this->adapter);
        $getEdit = $usuario->getAll();
        $tipoPago = new TipoPago($this->adapter);
        $getEdit2 = $tipoPago->getAll();
        $sorteo = new Sorteo($this->adapter);
        $getEdit3 = $sorteo->getAll();
        $this->view("movimientoSaldo/crearMovimientoSaldoView", array("getEdit" => $getEdit, "getEdit2" => $getEdit2, "getEdit3" => $getEdit3));
    }

    public function crear() {
        if (isset($_POST["mov_id"])) {
            //Creamos
            $movimientoSaldo = new MovimientoSaldo($this->adapter);
            $movimientoSaldo->setMov_id($_POST["mov_id"]);
            $movimientoSaldo->setMov_tipo($_POST["mov_tipo"]);
            $movimientoSaldo->setMov_fecha("mov_fecha");
            $movimientoSaldo->setMov_valor($_POST["mov_valor"]);
            $movimientoSaldo->setMov_comprobante($_POST["mov_comprobante"]);
            $movimientoSaldo->setMov_pista_sorteo($_POST["mov_pista_sorteo"]);
            $movimientoSaldo->setFk_usu_cod($_POST["fk_usu_cod"]);
            $movimientoSaldo->setFk_tip_cod($_POST["fk_tip_cod"]);
            $movimientoSaldo->setFk_sor_cod($_POST["fk_sor_cod"]);
            $save = $movimientoSaldo->save();
        }
        $this->redirect("movimientoSaldo", "index");
    }

    public function borrar() {
        if (isset($_GET["codigo"])) {
            $codigo = (int) $_GET["codigo"];
            $movimientoSaldo = new MovimientoSaldo($this->adapter);
            $movimientoSaldo->deleteById($codigo, 'mov_id');
        }
        $this->redirect("movimientoSaldo", "index");
    }

    public function modificar() {

        if (isset($_GET["codigo"])) {
            $codigo = (int) $_GET["codigo"];
            $movimientoSaldo = new MovimientoSaldo($this->adapter);
            $getEdit = $movimientoSaldo->getById($codigo, 'mov_id');
            $this->view("movimientoSaldo/editarMovimientoSaldoView", array("getEdit" => $getEdit));
        }
    }

    public function editar() {
        if (isset($_POST["mov_id"])) {
            //actualizar
            $movimientoSaldo = new MovimientoSaldo($this->adapter);
            $movimientoSaldo->setMov_id($_POST["mov_id"]);
            $movimientoSaldo->setMov_tipo($_POST["mov_tipo"]);
            $movimientoSaldo->setMov_fecha("mov_fecha");
            $movimientoSaldo->setMov_valor($_POST["mov_valor"]);
            $movimientoSaldo->setMov_comprobante($_POST["mov_comprobante"]);
            $movimientoSaldo->setMov_pista_sorteo($_POST["mov_pista_sorteo"]);
            $movimientoSaldo->setFk_usu_cod($_POST["fk_usu_cod"]);
            $movimientoSaldo->setFk_tip_cod($_POST["fk_tip_cod"]);
            $movimientoSaldo->setFk_sor_cod($_POST["fk_sor_cod"]);
            $movimientoSaldo->update();
        }
        $this->redirect("movimientoSaldo", "index");
    }

    public function hola() {
        echo "Movimiento Saldo";
    }

}
