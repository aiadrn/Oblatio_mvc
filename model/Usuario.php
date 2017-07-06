<?php

class Usuario extends EntidadBase {

    private $usu_cod;
    private $usu_nombre;
    private $usu_apellidos;
    private $usu_telefono;
    private $usu_correo;
    private $usu_fecha_nacimiento;
    private $usu_genero;
    private $usu_saldo_total;
    private $usu_foto_perfil;
    private $usu_alias;
    private $usu_contrasena;
    private $fk_ciu_id;

    public function __construct($adapter) {
        $table = "usuario";
        parent::__construct($table, $adapter);
    }

    function getUsu_cod() {
        return $this->usu_cod;
    }

    function getUsu_nombre() {
        return $this->usu_nombre;
    }

    function getUsu_apellidos() {
        return $this->usu_apellidos;
    }

    function getUsu_telefono() {
        return $this->usu_telefono;
    }

    function getUsu_correo() {
        return $this->usu_correo;
    }

    function getUsu_fecha_nacimiento() {
        return $this->usu_fecha_nacimiento;
    }

    function getUsu_genero() {
        return $this->usu_genero;
    }

    function getUsu_saldo_total() {
        return $this->usu_saldo_total;
    }

    function getUsu_foto_perfil() {
        return $this->usu_foto_perfil;
    }

    function getUsu_alias() {
        return $this->usu_alias;
    }

    function getUsu_contrasena() {
        return $this->usu_contrasena;
    }

    function getFk_ciu_id() {
        return $this->fk_ciu_id;
    }

    function setUsu_cod($usu_cod) {
        $this->usu_cod = $usu_cod;
    }

    function setUsu_nombre($usu_nombre) {
        $this->usu_nombre = $usu_nombre;
    }

    function setUsu_apellidos($usu_apellidos) {
        $this->usu_apellidos = $usu_apellidos;
    }

    function setUsu_telefono($usu_telefono) {
        $this->usu_telefono = $usu_telefono;
    }

    function setUsu_correo($usu_correo) {
        $this->usu_correo = $usu_correo;
    }

    function setUsu_fecha_nacimiento($usu_fecha_nacimiento) {
        $this->usu_fecha_nacimiento = $usu_fecha_nacimiento;
    }

    function setUsu_genero($usu_genero) {
        $this->usu_genero = $usu_genero;
    }

    function setUsu_saldo_total($usu_saldo_total) {
        $this->usu_saldo_total = $usu_saldo_total;
    }

    function setUsu_foto_perfil($usu_foto_perfil) {
        $this->usu_foto_perfil = $usu_foto_perfil;
    }

    function setUsu_alias($usu_alias) {
        $this->usu_alias = $usu_alias;
    }

    function setUsu_contrasena($usu_contrasena) {
        $this->usu_contrasena = $usu_contrasena;
    }

    function setFk_ciu_id($fk_ciu_id) {
        $this->fk_ciu_id = $fk_ciu_id;
    }

    public function save() {
        $query = "INSERT INTO usuario (usu_cod,usu_nombre,usu_apellidos,usu_telefono,usu_correo,usu_fecha_nacimiento,usu_genero,usu_foto_perfil,usu_alias,usu_contrasena,fk_ciu_id)
                VALUES($this->usu_cod, 
                       '" . $this->usu_nombre . "',
                       '" . $this->usu_apellidos . "',
                       '" . $this->usu_telefono . "',
                       '" . $this->usu_correo . "',
                       '" . $this->usu_fecha_nacimiento . "',
                       '" . $this->usu_genero . "',
                       '" . $this->usu_foto_perfil . "',
                       '" . $this->usu_alias . "',
                       '" . $this->usu_contrasena . "',
                       $this->fk_ciu_id); ";
        //echo $query;
        $save = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $save;
    }

    public function update() {
        $query = "UPDATE usuario SET
                usu_nombre='" . $this->usu_nombre . "',
                usu_apellidos='" . $this->usu_apellidos . "',
                usu_telefono='" . $this->usu_telefono . "',
                usu_correo='" . $this->usu_correo . "',
                usu_fecha_nacimiento='" . $this->usu_fecha_nacimiento . "',
                usu_genero='" . $this->usu_genero . "',
                usu_foto_perfil='" . $this->usu_foto_perfil . "',
                usu_alias='" . $this->usu_alias . "',
                usu_contrasena='" . $this->usu_contrasena . "',
                fk_ciu_id=$this->fk_ciu_id.
                WHERE usu_cod=$this->usu_cod";
        echo $query;
        $update = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $update;
    }

    public function joinUsuarioCiudad($codigo) {
        $resultSet = null;
        $query = "SELECT usuario.usu_cod, usuario.usu_nombre, usuario.usu_apellidos, usuario.usu_telefono, usuario.usu_correo,
        usuario.usu_fecha_nacimiento, usuario.usu_genero, usuario.usu_saldo_total, usuario.usu_foto_perfil, usuario.usu_alias,
        usuario.usu_contrasena, usuario.fk_ciu_id, ciudad.ciu_nombre
        FROM usuario INNER JOIN ciudad
        ON usuario.fk_ciu_id = ciudad.ciu_id
        where usuario.usu_cod = $codigo;";
        $mostrar = $this->db()->query($query);
        $row = $mostrar->fetch_object();
        $resultSet = $row;
        return $resultSet;
    }

    public function validarLogin() {
        $validacion = FALSE;
        $resultSet = null;
        $sentencia = "SELECT * FROM usuario WHERE usu_correo='$this->usu_correo'";
        $query = $this->db()->query($sentencia);

        if ($row = $query->fetch_object()) {
            //echo $sentencia;
            /* se compara la contraseña ingresada por el usuario en el formulario
              del loguin con la que se encuentra almacenada en la base de datos */
            $password = $this->getUsu_contrasena();
            $hash = $row->usu_contrasena;

            if ($password == $hash) {
//                $_SESSION['adm_tipo_administrador'] = $row->adm_tipo_administrador;
                $_SESSION['nombre'] = $row->usu_alias;
                $_SESSION['usu_cod'] = $row->usu_cod;
                //establecer tiempo de inicio de session
                $_SESSION["timeout"] = time();
                session_regenerate_id();
                $validacion = TRUE;
            }
        }
        return $validacion;
    }

}

?>

