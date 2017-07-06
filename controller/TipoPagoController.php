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
class TipoPagoController extends ControladorBase {

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
        $tipoPago = new TipoPago($this->adapter);

        //Conseguimos todos los usuarios
        $allusers = $tipoPago->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("tipoPago/indexTipoPagoView", array(
            "allusers" => $allusers,
            "nombre" => "ADSI"
        ));
    }

    public function nuevoRegistro() {
        $this->view("tipoPago/crearTipoPagoView");
    }

    public function crear() {
        if (isset($_POST["codigo"])) {

            //Creamos un departamento
            $tipoPago = new TipoPago($this->adapter);
            $tipoPago->setTip_cod($_POST["codigo"]);
            $tipoPago->setTip_medio_pago($_POST["tipoMedioPago"]);
            $save = $tipoPago->save();
        }
        $this->redirect("tipoPago", "index");
    }

    public function borrar() {
        if (isset($_GET["codigo"])) {
            $id = (int) $_GET["codigo"];
            $tipoPago = new TipoPago($this->adapter);
            $tipoPago->deleteById("tip_cod", $id);
        }
        $this->redirect("tipoPago", "index");
    }

    public function modificar() {

        if (isset($_GET["codigo"])) {
            $id = (int) $_GET["codigo"];
            $tipoPago = new TipoPago($this->adapter);
            $getEdit = $tipoPago->getById("tip_cod", $id);
            $this->view("tipoPago/editarTipoPagoView", array("getEdit" => $getEdit));
        }
    }

    public function editar() {

        if (isset($_POST["codigo"])) {

            //actualizamos un usuario
            $id = (int) $_POST["codigo"];
            $tipoPago = new TipoPago($this->adapter);
            $tipoPago->setTip_cod($_POST["codigo"]);
            $tipoPago->setTip_medio_pago($_POST["tipoMedioPago"]);
            $tipoPago->update();
        }
        $this->redirect("tipoPago", "index");
    }

    public function hola() {
        echo "Tipo Medio Pago";
    }

}
