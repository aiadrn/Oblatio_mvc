<?php

class UsuariosController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function index() {

        //Creamos el objeto usuario
        $usuario = new Usuario($this->adapter);

        //Conseguimos todos los usuarios
        $allusers = $usuario->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("usuarios/indexView", array(
            "allusers" => $allusers,
            "nombre" => "ADSI"
        ));
    }

    public function nuevoRegistro() {
        $ciudad = new Ciudad($this->adapter);
        $getEdit = $ciudad->getAll();
        $this->view("usuarios/crearUsuarioView", array("getEdit" => $getEdit));
    }

    public function ver() {
        if (isset($_GET["codigo"])) {
            $codigo = (int) $_GET["codigo"];
            $usuario = new Usuario($this->adapter);
            $getEdit = $usuario->joinUsuarioCiudad($codigo);
            
            $this->view("usuarios/verUsuarioView", array("getEdit" => $getEdit));
        }
    }

    public function crear() {
        if (isset($_POST["codigo"])) {
            $target_path = "uploads/";
            $target_path = $target_path . basename($_FILES['uploadedfile']['name']);
            if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
                echo "El archivo " . basename($_FILES['uploadedfile']['name']) . " ha sido subido";
            } else {
                echo "Ha ocurrido un error, trate de nuevo!";
            }
            //Creamos un usuario
            $usuario = new Usuario($this->adapter);
            $usuario->setUsu_cod($_POST["codigo"]);
            $usuario->setUsu_nombre($_POST["nombre"]);
            $usuario->setUsu_apellidos($_POST["apellidos"]);
            $usuario->setUsu_telefono($_POST["telefono"]);
            $usuario->setUsu_telefono($_POST["telefono"]);
            $usuario->setUsu_correo($_POST["correo"]);
            $usuario->setUsu_fecha_nacimiento($_POST["fecha"]);
            $usuario->setUsu_genero($_POST["genero"]);
            $usuario->setUsu_foto_perfil( $target_path);
            $usuario->setUsu_alias($_POST["alias"]);
            $usuario->setUsu_contrasena(sha1($_POST["contrasena"]));
            $usuario->setFk_ciu_id($_POST["ciudad"]);
            $save = $usuario->save();
        }
        $this->redirect("Usuarios", "index");
    }

    public function borrar() {
        if (isset($_GET["codigo"])) {
            $codigo = (int) $_GET["codigo"];

            $usuario = new Usuario($this->adapter);
            $usuario->deleteById("usu_cod", $codigo);
        }
        $this->redirect("Usuarios", "index");
    }

    public function modificar() {

        if (isset($_GET["codigo"])) {
            $codigo = (int) $_GET["codigo"];            
            $usuario = new Usuario($this->adapter);
            $getEdit = $usuario->getById("usu_cod", $codigo);
            $ciudad = new Ciudad($this->adapter);
            $getEdit2 = $ciudad->getAll();
            $this->view("usuarios/editarView", array("getEdit" => $getEdit, "getEdit2" => $getEdit2));
        }
    }

    public function editar() {

        if (isset($_POST["codigo"])) {

            //actualizamos un usuario
            $target_path = "uploads/";
            $target_path = $target_path . basename($_FILES['uploadedfile']['name']);
            if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
                echo "El archivo " . basename($_FILES['uploadedfile']['name']) . " ha sido subido";
            } else {
                echo "Ha ocurrido un error, trate de nuevo!";
            }
            $codigo = (int) $_POST["codigo"];
            $usuario = new Usuario($this->adapter);
            $usuario->setUsu_cod($_POST["codigo"]);
            $usuario->setUsu_nombre($_POST["nombre"]);
            $usuario->setUsu_apellidos($_POST["apellidos"]);
            $usuario->setUsu_telefono($_POST["telefono"]);
            $usuario->setUsu_correo($_POST["correo"]);
            $usuario->setUsu_fecha_nacimiento($_POST["fecha"]);
            $usuario->setUsu_genero($_POST["genero"]);
            $usuario->setUsu_foto_perfil($target_path);
            $usuario->setUsu_alias($_POST["alias"]);
            $usuario->setUsu_contrasena(sha1($_POST["contrasena"]));
            $usuario->setFk_ciu_id($_POST["ciudad"]);

            

            $usuario->update();
        }


//        $this->redirect("Usuarios", "index");
    }

    public function hola() {
        echo "Hola ADSI";
    }

}

?>
