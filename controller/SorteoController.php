<?php

class SorteoController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function index() {
        //Creamos el objeto usuario
        $sorteo = new Sorteo($this->adapter);

        //Conseguimos 
        $allusers = $sorteo->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("sorteo/indexSorteoView", array(
            "allusers" => $allusers
        ));
    }

    public function ver() {
        if (isset($_GET["codigo"])) {
            $codigo = (int) $_GET["codigo"];
            $sorteo = new Sorteo($this->adapter);
            $getEdit = $sorteo->getById("sor_cod", $codigo);
            $this->view("sorteo/verSorteoView", array("getEdit" => $getEdit));
        }
    }

    public function nuevoRegistro() {
        $categoria = new Categorias($this->adapter);
        $getEdit = $categoria->getAll();
        $empresa = new Empresa($this->adapter);
        $getEdit2 = $empresa->getAll();
        $this->view("sorteo/crearSorteoView", array("getEdit" => $getEdit, "getEdit2" => $getEdit2));
        $this->view("sorteo/crearSorteoView");
    }

    public function crear() {
        if (isset($_POST["codigo"])) {

            //Creamos 
            $sorteo = new Sorteo($this->adapter);
            $sorteo->setSor_cod($_POST["codigo"]);
            $sorteo->setSor_fecha_inicio($_POST["fecha_inicio"]);
            $sorteo->setSor_cantidad_tickets($_POST["cantidad_tickets"]);
            $sorteo->setSor_precio_base($_POST["valorEstimado"]);
            $sorteo->setSor_precio_sorteo($_POST["valor_aleatorio"]);
            $sorteo->setSor_precio_tic($_POST["precio_ticket"]);
            $sorteo->setSor_fecha_inicio($_POST["fecha_inicio"]);
            $sorteo->setSor_fecha_confirmacion_empresa($_POST["fecha_confirmacion_empresa"]);
            $sorteo->setSor_comentario_empresa($_POST["comentario_empresa"]);
            $sorteo->setSor_fecha_confirmacion_usuario($_POST["fecha_confirmacion_usuario"]);
            $sorteo->setSor_comentario_usuario($_POST["comentario_usuario"]);
            $sorteo->setSor_titulo_sorteo($_POST["titulo_sorteo"]);
            $sorteo->setFk_pro_id($_POST["producto"]);
            $sorteo->setFk_cod_usu($_POST["usuario"]);
            $save = $sorteo->save();
        }
        $this->redirect("Sorteo", "index");
    }

    public function borrar() {
        if (isset($_GET["codigo"])) {
            $codigo = (int) $_GET["codigo"];
            $sorteo = new Sorteo($this->adapter);
            $sorteo->deleteById("sor_cod", $codigo);
        }
        $this->redirect("sorteo", "index");
    }

    public function modificar() {
        if (isset($_GET["codigo"])) {
            $codigo = (int) $_GET["codigo"];
            $sorteo = new sorteo($this->adapter);
            $getEdit = $sorteo->getById("sor_cod", $codigo);
            $this->view("sorteo/editarSorteoView", array("getEdit" => $getEdit));
        }
    }

    public function editar() {

        if (isset($_POST["codigo"])) {
            date_default_timezone_set('America/Bogota');
            $fechaHora = date("Y-m-d H:i:s");
            //actualizamos un producto
            $codigo = (int) $_POST["codigo"];
            $sorteo = new Sorteo($this->adapter);
            $sorteo->setSor_cod($_POST["codigo"]);
            $sorteo->setSor_fecha_inicio($_POST["fecha_inicio"]);
            $sorteo->setSor_cantidad_tickets($_POST["cantidad_tickets"]);
            $sorteo->setSor_precio_base($_POST["valorEstimado"]);
            $sorteo->setSor_precio_sorteo($_POST["valor_aleatorio"]);
            $sorteo->setSor_precio_tic($_POST["precio_ticket"]);
            $sorteo->setSor_fecha_fin($_POST["fecha_fin"]);
            $sorteo->setSor_fecha_confirmacion_empresa($_POST["fecha_confirmacion_empresa"]);
            $sorteo->setSor_comentario_empresa($_POST["comentario_empresa"]);
            $sorteo->setSor_fecha_confirmacion_usuario($_POST["fecha_confirmacion_usuario"]);
            $sorteo->setSor_comentario_usuario($_POST["comentario_usuario"]);
            $sorteo->setSor_titulo_sorteo($_POST["titulo_sorteo"]);
            $sorteo->setFk_pro_id($_POST["producto"]);
            $sorteo->setFk_cod_usu($_POST["usuario"]);
            $sorteo->update();
        }


        $this->redirect("Sorteo", "index");
    }

    public function hola() {
        echo "Hola ADSI";
    }

}

?>
