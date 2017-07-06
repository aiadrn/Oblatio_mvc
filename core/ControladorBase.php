<?php

//comienzo de sesión
session_start();

class ControladorBase {

    protected $layout;

//protected $layout = 'admin';
    public function __construct() {
        require_once 'Conectar.php';
        require_once 'EntidadBase.php';
        //require_once 'ModeloBase.php';
        //Incluir todos los modelos
        if (isset($_SESSION['adm_tipo_administrador'])) {
            $this->layout = 'admin';
        }elseif (isset ( $_SESSION['emp_cod'])) {
            $this->layout = 'empresa';
        } elseif (isset ( $_SESSION['usu_cod'])) {
            $this->layout = 'usuario';
        } 
        else {
            $this->layout = 'principal';
        }
        foreach (glob("model/*.php") as $file) {
            require_once $file;
        }
        /* Validar que el tiempo de inactividad del usuario no  supere el tiempo 
          definido en la variable global
          TIEMPO_INACTIVIDAD */

        if (isset($_SESSION["timeout"])) {
            // echo 'variable de sesion'.$_SESSION["timeout"].'<br>';
            //calcular el tiempo de vida de la session

            $tiempoSession = time() - $_SESSION["timeout"];
            //echo $tiempoSession.'   tiempo de sesion <br>';

            if ($tiempoSession >= (TIEMPO_INACTIVIDAD * 60)) {
                //echo 'fin sesion';
                session_destroy();
                $this->redirect("principal", "index");
            } else {
                //establecer nuevamente el tiempo de session
                $_SESSION["timeout"] = time();
            }
        } else {
            //echo 'no existe la variable de sesion <br>';
        }
    }

    //Plugins y funcionalidades

    /*
     * Este método lo que hace es recibir los datos del controlador en forma de array
     * los recorre y crea una variable dinámica con el indice asociativo y le da el 
     * valor que contiene dicha posición del array, luego carga los helpers para las
     * vistas y carga la vista que le llega como parámetro. En resumen un método para
     * renderizar vistas.
     */

    public function view($vista, $datos = null) {
        if ($datos) {
            foreach ($datos as $id_assoc => $valor) {
                ${$id_assoc} = $valor;
            }
        }
        //require_once 'view/layouts' . $this->layout . '.php';
        //require_once 'view/layouts/admin.php';
        require_once 'view/layouts/' . $this->layout . '.php';
        //require_once 'view/' . $vista . 'View.php';
    }

    public function redirect($controlador = CONTROLADOR_DEFECTO, $accion = ACCION_DEFECTO) {
        header("Location:index.php?controller=" . $controlador . "&action=" . $accion);
    }

    //Métodos para los controladores
    public function validateSession($tipoUsuarios = array()) {
        if (!isset($_SESSION['adm_tipo_administrador'])) {
            $this->redirect("Loguin", "login");
        } else {
            if (!in_array($_SESSION['adm_tipo_administrador'], $tipoUsuarios)) {
                $this->redirect("Login", "login");
            }
        }
    }

}

?>
