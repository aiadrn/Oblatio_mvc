<?php

class ProductoController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();        
            
        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
        
    }

    public function index() {          
        //Creamos el objeto usuario
        $producto = new Producto($this->adapter);

        //Conseguimos 
        $allusers = $producto->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("producto/indexProductoView", array(
            "allusers" => $allusers
        ));
    }

    public function ver() {
        if (isset($_GET["codigo"])) {
            $codigo = (int) $_GET["codigo"];
            $producto = new Producto($this->adapter);
            $getEdit = $producto->joinProductoCategoriaEmpresa($codigo);
            $this->view("producto/verProductosView", array("getEdit" => $getEdit));
        }
    }

    public function nuevoRegistro() {
        $categoria = new Categorias($this->adapter);
        $getEdit = $categoria->getAll();
        $empresa = new Empresa($this->adapter);
        $getEdit2 = $empresa->getAll();
        $this->view("producto/crearProductoView", array("getEdit" => $getEdit, "getEdit2" => $getEdit2));
    }

    public function crear() {
        if (isset($_POST["codigo"])) {

            //Creamos 
            $producto = new Producto($this->adapter);
            $producto->setPro_cod($_POST["codigo"]);
            $producto->setPro_nombre($_POST["nombre"]);
            $producto->setPro_descripcion($_POST["descripcion"]);
            $producto->setPro_valor_estimado($_POST["valorEstimado"]);
            $producto->setPro_imagen($_POST["foto"]);
            $producto->setPro_cantidad($_POST["cantidad"]);
            $producto->setPro_fecha_actualizacion($_POST["fecha"]);
            $producto->setFk_emp_cod($_POST["empresa"]);
            $producto->setFk_cat_cod($_POST["categoria"]);
            $save = $producto->save();
        }
        $this->redirect("Producto", "index");
    }

    public function borrar() {
        if (isset($_GET["codigo"])) {
            $codigo = (int) $_GET["codigo"];
            $producto = new Producto($this->adapter);
            $producto->deleteById("pro_id", $codigo);
        }
        $this->redirect("Producto", "index");
    }

    public function modificar() {

        if (isset($_GET["codigo"])) {
            $codigo = (int) $_GET["codigo"];
            $producto = new Producto($this->adapter);
            $getEdit = $producto->getById("pro_id", $codigo);
            $empresa = new Empresa($this->adapter);
            $getEdit2 = $empresa->getAll();
            $categoria = new Categorias($this->adapter);
            $getEdit3 = $categoria->getAll();
            $this->view("producto/editarProductoView", array("getEdit" => $getEdit, "getEdit2" => $getEdit2, "getEdit3" => $getEdit3));
        }
    }

    public function editar() {

        if (isset($_POST["codigo"])) {
            date_default_timezone_set('America/Bogota');
            $fechaHora = date("Y-m-d H:i:s");
            //actualizamos un producto
            $codigo = (int) $_POST["codigo"];
            $producto = new Producto($this->adapter);
            $producto->setPro_cod($_POST["codigo"]);
            $producto->setPro_nombre($_POST["nombre"]);
            $producto->setPro_descripcion($_POST["descripcion"]);
            $producto->setPro_valor_estimado($_POST["valorEstimado"]);
            $producto->setPro_imagen($_POST["foto"]);
            $producto->setPro_cantidad($_POST["cantidad"]);
            $producto->setPro_fecha_actualizacion($fechaHora);
            $producto->setFk_emp_cod($_POST["empresa"]);
            $producto->setFk_cat_cod($_POST["categoria"]);
            $producto->update();
        }


        $this->redirect("Producto", "index");
    }

    public function hola() {
        echo "Hola ADSI";
    }

}

?>
