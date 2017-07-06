<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
prueba con Brackets
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//Configuración global
        require_once 'config/global.php';

//Base para los controladores
        require_once 'core/ControladorBase.php';

        /* Cargamos controladores y acciones. Se llama a la funcion que permite cargar  
          el controlador que va controlar la accion del usuario */
        if (isset($_GET["controller"])) { // Si llega el nombre del controlador por GET
            $controllerObj = cargarControlador($_GET["controller"]);
        } else {
// Si no, se carga el controlador por defecto
            $controllerObj = cargarControlador(CONTROLADOR_DEFECTO);
        }
        lanzarAccion($controllerObj);

        function cargarControlador($controller) {
            $controlador = ucwords($controller) . 'Controller';
            $strFileController = 'controller/' . $controlador . '.php';

            // Si el archivo no existe entonces se toma el controlador por defecto
            if (!is_file($strFileController)) {
                $strFileController = 'controller/' . ucwords(CONTROLADOR_DEFECTO) . 'Controller.php';
                $controlador = ucwords(CONTROLADOR_DEFECTO) . 'Controller';
            }

            // Se crea un objeto de la clase del controlador segun la peticion del usuario
            require_once $strFileController;
            $controllerObj = new $controlador();
            //print_r($controllerObj);
            return $controllerObj;
        }

// Esta funcion permite cargar la accion del usuario. Recibe como parametro el controlador
        function lanzarAccion($controllerObj) {
            if (isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])) {
                cargarAccion($controllerObj, $_GET["action"]);
            } else {
                cargarAccion($controllerObj, ACCION_DEFECTO);
            }
        }

// Funcion que comprueba que el metodo que solicita el usuario existe, si es así ejecuta la acción
        function cargarAccion($controllerObj, $action) {
            $accion = $action;
            if (method_exists($controllerObj, $action)) {
                $controllerObj->$accion();
            } else {
                require_once 'Controller/LoginController.php';
                $loginController=new LoginController();
                $loginController->error(2);
            }
        }
        ?>        
    </body>
</html>
