<?php

class CategoriaUsuarioController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function index() {

        //Creamos el objeto 
        $categoriaUsuario = new CategoriaUsuario($this->adapter);

        //Conseguimos todos los registros
        $allusers = $categoriaUsuario->joinCategoriaUsuario();

        //Cargamos la vista index y le pasamos valores
        $this->view("categoriaUsuario/indexCategoriaUsuarioView", array(
            "allusers" => $allusers,
            "nombre" => "ADSI"
        ));
    }

    public function nuevoRegistro() {
        $usuario = new Usuario($this->adapter);      
        $getEdit=$usuario->getAll();
        $categoria = new Categorias($this->adapter);     
        $getEdit2=$categoria->getAll();
        $this->view("categoriaUsuario/crearCategoriaUsuarioView", array("getEdit" => $getEdit, "getEdit2" => $getEdit2));
    }

    public function crear() {
        if (isset($_POST["cat_id"])) {

            //Creamos
            $categoriaUsuario = new CategoriaUsuario($this->adapter);
            $categoriaUsuario->setCat_id($_POST["cat_id"]);
            $categoriaUsuario->setUsu_cod($_POST["usu_cod"]);

            $save = $categoriaUsuario->save();
        }
        $this->redirect("categoriaUsuario", "index");
    }

    public function borrar() {
        if (isset($_GET["codigoUsu"])&&isset($_GET["codigoCat"])) {
            $codigoUsu = (int) $_GET["codigoUsu"];
            $codigoCat = (int) $_GET["codigoCat"];            
            $categoriaUsuario = new categoriaUsuario($this->adapter);
            $categoriaUsuario->deleteByIds($codigoCat, $codigoUsu);
         
        }
        $this->redirect("categoriaUsuario", "index");
    }

    public function modificar() {
        if (isset($_GET["cat_id"])) {
          
            $cat_id = (int) $_GET["cat_id"];
            $categoriaUsuario = new categoriaUsuario($this->adapter);
            $getEdit = $categoriaUsuario->getById("cat_id", $cat_id);
            $this->view("categoriaUsuario/editarCategoriaUsuarioView", array("getEdit" => $getEdit));
        }
    }

    public function editar() {

        if (isset($_POST["cat_id"])) {
            //actualizar
            $codigo = (int) $_POST["cat_id"];
            $categoriaUsu = new categoriaUsuario($this->adapter);
            $categoriaUsu->setCat_id($_POST["cat_id"]);
            $categoriaUsu->setUsu_cod($_POST["usu_cod"]);
            $categoriaUsu->update();
        }
        $this->redirect("categoriaUsuario", "index");
    }

    
    public function hola() {
        echo "Hola ADSI";
    }


}

?>
