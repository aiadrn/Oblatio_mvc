<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Administrador
 *
 * @author AdmSena
 */
class Administrador extends EntidadBase {

    private $adm_id;
    private $adm_nombre;
    private $adm_apellidos;
    private $adm_telefono;
    private $adm_correo;
    private $adm_alias;
    private $adm_contrasena;
    private $adm_foto_perfil;
    private $adm_tipo_administrador;

    public function __construct($adapter) {
        $table = "administrador";
        parent::__construct($table, $adapter);
    }
    function getAdm_tipo_administrador() {
        return $this->adm_tipo_administrador;
    }

    function setAdm_tipo_administrador($adm_tipo_administrador) {
        $this->adm_tipo_administrador = $adm_tipo_administrador;
    }

        function getAdm_id() {
        return $this->adm_id;
    }

    function getAdm_nombre() {
        return $this->adm_nombre;
    }

    function getAdm_apellidos() {
        return $this->adm_apellidos;
    }

    function getAdm_telefono() {
        return $this->adm_telefono;
    }

    function getAdm_correo() {
        return $this->adm_correo;
    }

    function getAdm_alias() {
        return $this->adm_alias;
    }

    function getAdm_contrasena() {
        return $this->adm_contrasena;
    }

    function setAdm_id($adm_id) {
        $this->adm_id = $adm_id;
    }

    function setAdm_nombre($adm_nombre) {
        $this->adm_nombre = $adm_nombre;
    }

    function setAdm_apellidos($adm_apellidos) {
        $this->adm_apellidos = $adm_apellidos;
    }

    function setAdm_telefono($adm_telefono) {
        $this->adm_telefono = $adm_telefono;
    }

    function setAdm_correo($adm_correo) {
        $this->adm_correo = $adm_correo;
    }

    function setAdm_alias($adm_alias) {
        $this->adm_alias = $adm_alias;
    }

    function setAdm_contrasena($adm_contrasena) {
        $this->adm_contrasena = $adm_contrasena;
    }
    
    function getAdm_foto_perfil() {
        return $this->adm_foto_perfil;
    }

    function setAdm_foto_perfil($adm_foto_perfil) {
        $this->adm_foto_perfil = $adm_foto_perfil;
    }

        public function save() {
        $query = "INSERT INTO administrador
                VALUES($this->adm_id, 
                       '" . $this->adm_nombre . "',
                       '" . $this->adm_apellidos . "',
                       '" . $this->adm_telefono . "',
                       '" . $this->adm_correo . "',
                       '" . $this->adm_alias . "',
                       '" . $this->adm_contrasena . "',
                       '" . $this->adm_foto_perfil. "',
                       '" . $this->adm_tipo_administrador . "'); ";
        echo $query;  
        $save = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $save;
    }

    public function update() {
        $query = "UPDATE administrador SET
                adm_nombre='" . $this->adm_nombre . "',
                adm_apellidos='" . $this->adm_apellidos . "',
                adm_telefono='" . $this->adm_telefono . "',
                adm_correo='" . $this->adm_correo . "',
                adm_alias='" . $this->adm_alias . "',
                adm_contrasena='" . $this->adm_contrasena . "',
                adm_foto_perfil='" . $this->adm_foto_perfil . "',
                adm_tipo_administrador = $this->adm_tipo_administrador
                WHERE adm_id = $this->adm_id";
        echo $query;
        $update = $this->db()->query($query);
        //echo "SQL> ".$query;
        //$this->db()->error;
        return $update;
    }

    public function validarLogin() {
        $validacion= FALSE;
        $resultSet = null;
        $sentencia= "SELECT * FROM administrador WHERE adm_correo='$this->adm_correo'";
//        echo $sentencia;
        $query = $this->db()->query("SELECT * FROM administrador WHERE adm_correo='$this->adm_correo'");
        
        if($row = $query->fetch_object()){
           echo $sentencia; 
            /*se compara la contraseña ingresada por el usuario en el formulario
            del loguin con la que se encuentra almacenada en la base de datos             */    
            $password=  $this->getAdm_contrasena(); 
            $hash=$row->adm_contrasena;
                       
            if($password==$hash){
                $_SESSION['adm_tipo_administrador']= $row->adm_tipo_administrador;
                $_SESSION['nombre'] =$row->adm_alias; 
                $_SESSION['adm_id'] =$row->adm_id; 
                //establecer tiempo de inicio de session
                $_SESSION["timeout"] = time();
                session_regenerate_id();
                $validacion =TRUE;
            }
            
        }  
        return $validacion;
    }    

}
