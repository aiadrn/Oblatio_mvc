<?php

class EmpresaController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function index() {

        //Creamos el objeto empresa
        $empresa = new Empresa($this->adapter);

        //Conseguimos todas las empresas
        $allusers = $empresa->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("empresa/indexEmpresaView", array(
            "allusers" => $allusers,
            "nombre" => "ADSI"
        ));
    }

    public function nuevoRegistro() {
        $ciudad = new Ciudad($this->adapter);
        $getEdit = $ciudad->getAll();
        $this->view("empresa/crearEmpresaView", array("getEdit" => $getEdit));
    }

    public function ver() {
        if (isset($_GET["codigo"])) {
            $codigo = (int) $_GET["codigo"];
            $empresa = new Empresa($this->adapter);
            $getEdit = $empresa->joinEmpresaCiudad($codigo);
            $this->view("empresa/verEmpresaView", array("getEdit" => $getEdit, "alias"));
        }
    }

    public function crear() {
        if (isset($_POST["codigo"])) {
            //fecha actual
            date_default_timezone_set('America/Bogota');
            $fecha = date("Y-m-d");
            //Creamos un empresa
            $empresa = new empresa($this->adapter);
            $empresa->setEmp_nit($_POST["codigo"]);
            $empresa->setEmp_nombre($_POST["nombre"]);
            $empresa->setEmp_direccion($_POST["direccion"]);
            $empresa->setEmp_telefono($_POST["telefono"]);
            $empresa->setEmp_extension($_POST["extension"]);
            $empresa->setEmp_correo($_POST["correo"]);
            $empresa->setEmp_usuario($_POST["usuario"]);
            $empresa->setEmp_contrasena(sha1($_POST["contrasena"]));
            $empresa->setEmp_estado(0);
            $empresa->setEmp_fecha_vinculacion($fecha);
            $empresa->setEmp_imagen($_POST["imagen"]);
            $empresa->setFk_ciu_id($_POST["ciudad"]);
            $save = $empresa->save();
        }
        $this->redirect("empresa", "index");
    }

    public function borrar() {
        if (isset($_GET["codigo"])) {
            $codigo = (int) $_GET["codigo"];

            $empresa = new Empresa($this->adapter);
            $empresa->deleteById("emp_cod", $codigo);
        }
        $this->redirect("empresa", "index");
    }

    public function modificar() {

        if (isset($_GET["codigo"])) {
            $codigo = (int) $_GET["codigo"];
            $empresa = new Empresa($this->adapter);
            $getEdit = $empresa->getById("emp_cod", $codigo);
            $ciudad = new Ciudad($this->adapter);
            $getEdit2 = $ciudad->getAll();
            $this->view("empresa/editarEmpresaView", array("getEdit" => $getEdit, "getEdit2" => $getEdit2));
        }
    }

    public function editar() {

        if (isset($_POST["codigo"])) {

//actualizar
            $empresa = new empresa($this->adapter);
            $empresa->setEmp_cod($_POST["codigo"]);
            $empresa->setEmp_nit($_POST["nit"]);
            $empresa->setEmp_nombre($_POST["nombre"]);
            $empresa->setEmp_direccion($_POST["direccion"]);
            $empresa->setEmp_telefono($_POST["telefono"]);
            $empresa->setEmp_extension($_POST["extension"]);
            $empresa->setEmp_correo($_POST["correo"]);
            $empresa->setEmp_usuario($_POST["usuario"]);
            $empresa->setEmp_contrasena(sha1($_POST["contrasena"]));
            $empresa->setEmp_estado($_POST["estado"]);
            $empresa->setEmp_fecha_vinculacion($_POST["fecha_vinculacion"]);
            $empresa->setEmp_imagen($_POST["imagen"]);
            $empresa->setFk_ciu_id($_POST["ciudad"]);
            $empresa->update();
        }
        $this->redirect("empresa", "index");
    }

    public function cambiarEstado() {
        //fecha actual
        date_default_timezone_set('America/Bogota');
        $fecha = date("Y-m-d");
        if (isset($_POST["codigo"])) {
            $empresa = new empresa($this->adapter);
            $empresa->setEmp_cod($_POST["codigo"]);
            $empresa->setEmp_estado($_POST["estado"]);
            $empresa->setEmp_fecha_aprobacion($fecha);  
            $empresa->setFk_adm_id($_SESSION['adm_id']);
            $empresa->update2();
        }

        $this->redirect("empresa", "index");
    }

    public function hola() {
        echo "Hola ADSI";
    }

}

?>
