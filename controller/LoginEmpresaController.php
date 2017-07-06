<?php

class LoginEmpresaController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function index() {
        $this->layout = 'loginEmpresa';
        $this->view("loginEmpresa/login");
    }

    public function login() {

        if (isset($_POST["correo"]) && isset($_POST["contrasenna"])) {
            $correo = isset($_POST["correo"]) ? trim($_POST["correo"]) : "";
            $contrasenna = isset($_POST["contrasenna"]) ? trim(sha1($_POST["contrasenna"])) : "";

            if ($correo == '' || $contrasenna == '') {
                $this->layout = 'loginEmpresa';

                $this->view("loginEmpresa/login", array(
                    "message" => "El usuario o contraseña no pueden ir vacíos"));
            } else {

                //creamos un objeto                
                $empresa = new Empresa($this->adapter);
                $empresa->setEmp_correo($correo);
                $empresa->setEmp_contrasena($contrasenna);
                if ($empresa->validarLogin()) {   
                    $this->redirect("producto", "index");
                } else {
                    $this->layout = 'loginEmpresa';
                    $this->view("LoginEmpresa/login", array(
                        "message" => "El usuario o contraseña son incorrectos"
                    ));
                }
            }
        } else {
            $this->view("loginEmpresa/login");
        }
    }

    public function logout() {
        //destruir todas las sesiones
//         $_SESSION['adm_tipo_administrador']=0;
        session_destroy();
        $this->redirect("Principal", "index");
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
        $this->view("loginEmpresa/error", array(
            "message" => $message
        ));
    }

}
