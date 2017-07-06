<?php

class Empresa extends EntidadBase {

    private $emp_cod;
    private $emp_nit;
    private $emp_nombre;
    private $emp_direccion;
    private $emp_telefono;
    private $emp_extension;
    private $emp_correo;
    private $emp_usuario;
    private $emp_contrasena;
    private $emp_estado;
    private $emp_fecha_vinculacion;
    private $emp_fecha_aprobacion;
    private $emp_imagen;
    private $fk_ciu_id;
    private $fk_adm_id;

    public function __construct($adapter) {
        $table = "empresa";
        parent::__construct($table, $adapter);
    }

    function getEmp_cod() {
        return $this->emp_cod;
    }

    function getEmp_nit() {
        return $this->emp_nit;
    }

    function setEmp_nit($emp_nit) {
        $this->emp_nit = $emp_nit;
    }

    function getEmp_nombre() {
        return $this->emp_nombre;
    }

    function getEmp_direccion() {
        return $this->emp_direccion;
    }

    function getEmp_telefono() {
        return $this->emp_telefono;
    }

    function getEmp_extension() {
        return $this->emp_extension;
    }

    function getEmp_correo() {
        return $this->emp_correo;
    }

    function getEmp_usuario() {
        return $this->emp_usuario;
    }

    function getEmp_contrasena() {
        return $this->emp_contrasena;
    }

    function getEmp_estado() {
        return $this->emp_estado;
    }

    function getEmp_fecha_vinculacion() {
        return $this->emp_fecha_vinculacion;
    }

    function getEmp_fecha_aprobacion() {
        return $this->emp_fecha_aprobacion;
    }

    function getEmp_imagen() {
        return $this->emp_imagen;
    }

    function getFk_ciu_id() {
        return $this->fk_ciu_id;
    }

    function getFk_adm_id() {
        return $this->fk_adm_id;
    }

    function setEmp_cod($emp_cod) {
        $this->emp_cod = $emp_cod;
    }

    function setEmp_nombre($emp_nombre) {
        $this->emp_nombre = $emp_nombre;
    }

    function setEmp_direccion($emp_direccion) {
        $this->emp_direccion = $emp_direccion;
    }

    function setEmp_telefono($emp_telefono) {
        $this->emp_telefono = $emp_telefono;
    }

    function setEmp_extension($emp_extension) {
        $this->emp_extension = $emp_extension;
    }

    function setEmp_correo($emp_correo) {
        $this->emp_correo = $emp_correo;
    }

    function setEmp_usuario($emp_usuario) {
        $this->emp_usuario = $emp_usuario;
    }

    function setEmp_contrasena($emp_contrasena) {
        $this->emp_contrasena = $emp_contrasena;
    }

    function setEmp_estado($emp_estado) {
        $this->emp_estado = $emp_estado;
    }

    function setEmp_fecha_vinculacion($emp_fecha_vinculacion) {
        $this->emp_fecha_vinculacion = $emp_fecha_vinculacion;
    }

    function setEmp_fecha_aprobacion($emp_fecha_aprobacion) {
        $this->emp_fecha_aprobacion = $emp_fecha_aprobacion;
    }

    function setEmp_imagen($emp_imagen) {
        $this->emp_imagen = $emp_imagen;
    }

    function setFk_ciu_id($fk_ciu_id) {
        $this->fk_ciu_id = $fk_ciu_id;
    }

    function setFk_adm_id($fk_adm_id) {
        $this->fk_adm_id = $fk_adm_id;
    }

    public function save() {
        $query = "INSERT INTO empresa (emp_nit, emp_nombre, emp_direccion, emp_telefono, emp_extension, 
        emp_correo, emp_usuario, emp_contrasena, emp_estado, emp_fecha_vinculacion, emp_imagen,
        fk_ciu_id)
                VALUES('" . $this->emp_nit . "', 
                       '" . $this->emp_nombre . "',
                       '" . $this->emp_direccion . "',
                       '" . $this->emp_telefono . "',
                       '" . $this->emp_extension . "',
                       '" . $this->emp_correo . "',
                       '" . $this->emp_usuario . "',
                       '" . $this->emp_contrasena . "',
                        $this->emp_estado,
                       '" . $this->emp_fecha_vinculacion . "',
                       '" . $this->emp_imagen . "',
                       $this->fk_ciu_id); ";
        echo $query;
        $save = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $save;
    }

    function update() {
        $query = "UPDATE empresa SET
                emp_nit='" . $this->emp_nit . "',
                emp_nombre='" . $this->emp_nombre . "',
                emp_direccion='" . $this->emp_direccion . "',
                emp_telefono='" . $this->emp_telefono . "',
                emp_extension='" . $this->emp_extension . "',
                emp_correo='" . $this->emp_correo . "',
                emp_usuario='" . $this->emp_usuario . "',
                emp_contrasena='" . $this->emp_contrasena . "',
                emp_estado=" . $this->emp_estado . ",
                emp_fecha_vinculacion='" . $this->emp_fecha_vinculacion . "',                
                emp_imagen='" . $this->emp_imagen . "',
                fk_ciu_id=$this->fk_ciu_id
                WHERE emp_cod=$this->emp_cod;";
        echo $query;
        $update = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $update;
    }

    public function joinEmpresaCiudad($codigo) {
        $resultSet = null;
        $query = "SELECT empresa.emp_cod, empresa.emp_nit, empresa.emp_nombre, empresa.emp_direccion, empresa.emp_telefono, empresa.emp_extension, empresa.emp_correo, empresa.emp_usuario, empresa.emp_contrasena, empresa.emp_estado, empresa.emp_fecha_vinculacion, empresa.emp_fecha_aprobacion, empresa.emp_imagen, empresa.fk_ciu_id, empresa.fk_adm_id, ciudad.ciu_nombre 
        FROM empresa INNER JOIN ciudad 
        on empresa.fk_ciu_id= ciudad.ciu_id
        where empresa.emp_cod = $codigo;";

        $mostrar = $this->db()->query($query);
        $row = $mostrar->fetch_object();
        $resultSet = $row;
        return $resultSet;
    }

    function update2() {
        $query = "UPDATE empresa SET      
                fk_adm_id=$this->fk_adm_id,
                emp_fecha_aprobacion='" . $this->emp_fecha_aprobacion . "', 
                emp_estado=" . $this->emp_estado . "              
                WHERE emp_cod=$this->emp_cod;";
        echo $query;
        $update = $this->db()->query($query);
        echo "SQL> " . $query;
        //$this->db()->error;
        return $update;
    }

    public function validarLogin() {
        $validacion = FALSE;
        $resultSet = null;
        $sentencia = "SELECT * FROM empresa WHERE emp_correo='$this->emp_correo'";
        $query = $this->db()->query($sentencia);

        if ($row = $query->fetch_object()) {
            //echo $sentencia;
            /* se compara la contraseña ingresada por el usuario en el formulario
              del loguin con la que se encuentra almacenada en la base de datos */
            $password = $this->getEmp_contrasena();
            $hash = $row->emp_contrasena;

            if ($password == $hash) {
//                $_SESSION['adm_tipo_administrador'] = $row->adm_tipo_administrador;
                $_SESSION['nombre'] = $row->emp_usuario;
                $_SESSION['emp_cod'] = $row->emp_cod;
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
