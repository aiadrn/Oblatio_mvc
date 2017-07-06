<?php

class LoginController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function index() {
        $this->layout = 'login';
        $this->view("login/login");
    }

    public function login() {

        if (isset($_POST["correo"]) && isset($_POST["contrasenna"])) {
            $correo = isset($_POST["correo"]) ? trim($_POST["correo"]) : "";
            $contrasenna = isset($_POST["contrasenna"]) ? trim(sha1($_POST["contrasenna"])) : "";

            if ($correo == '' || $contrasenna == '') {
                $this->layout = 'login';

                $this->view("login/login", array(
                    "message" => "El usuario o contraseña no pueden ir vacíos"));
            } else {

                //creamos un objeto                
                $administrador = new Administrador($this->adapter);
                $administrador->setAdm_correo($correo);
                $administrador->setAdm_contrasena($contrasenna);
                if ($administrador->validarLogin()) {   
                    echo 'conrrecto';
                    $this->redirect("Administrador", "index");
                } else {
                    echo 'inconrrecto';
                    $this->layout = 'login';
                    $this->view("Login/login", array(
                        "message" => "El usuario o contraseña son incorrectos"
                    ));
                }
            }
        } else {
            $this->layout='login';
            $this->view("login/login");
        }
    }

    public function logout() {
        //destruir todas las sesiones
         $_SESSION['adm_tipo_administrador']=0;
        session_destroy();
        $this->redirect("principal", "index");
        //$this->view("login/login");
    }

    public function error($code = 0) {
        $codeMessagge = (isset($_GET['msg']) ? $_GET['msg'] : $code);
        $message = "";
        switch ($codeMessagge) {
            case 1:
                $message = "No está autorizado para acceder a esta acción";
                break;
            case 2:
                $message = "La acción que intenta cargar no existe";
                break;
            default:
                $message = "Error desconocido.";
                break;
        }
        $this->view("login/error", array(
            "message" => $message
        ));
    }

}
