<?php

class EmpresaUsuario extends EntidadBase {

    private $emp_cod;
    private $usu_cod;
    private $fecha;
    private $estrellas;
    private $comentario;

    public function __construct($adapter) {
        $table = "empresa_usuario";
        parent::__construct($table, $adapter);
    }

    function getEmp_cod() {
        return $this->emp_cod;
    }

    function getUsu_cod() {
        return $this->usu_cod;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getEstrellas() {
        return $this->estrellas;
    }

    function getComentario() {
        return $this->comentario;
    }

    function setEmp_cod($emp_cod) {
        $this->emp_cod = $emp_cod;
    }

    function setUsu_cod($usu_cod) {
        $this->usu_cod = $usu_cod;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setEstrellas($estrellas) {
        $this->estrellas = $estrellas;
    }

    function setComentario($comentario) {
        $this->comentario = $comentario;
    }

    public function save() {
        $query = "INSERT INTO empresa_usuario (emp_cod, usu_cod, fecha, estrellas, comentario)
                VALUES($this->emp_cod,
                       " . $this->usu_cod . ",
                       '" . $this->fecha . "',
                       " . $this->estrellas . ",
                       '" . $this->comentario . "'); ";
        //echo $query;
        $save = $this->db()->query($query);
        //echo "SQL> ".$query;
        //$this->db()->error;
        return $save;
    }

    public function update() {
        $query = "UPDATE sorteo_usuario SET
                contenido_observacion='" . $this->comentario . "'                
                where sor_cod = $this->sor_cod and usu_cod = $this->usu_cod ";
        echo $query;
        $update = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $update;
    }

    public function joinEmpresaUsuario() {

        $resultSet = null;
        $query = "SELECT empresa_usuario.emp_cod, empresa_usuario.usu_cod, empresa_usuario.fecha, empresa_usuario.estrellas, empresa_usuario.comentario,
            empresa.emp_nombre, usuario.usu_nombre 
            FROM empresa_usuario INNER JOIN empresa 
            on empresa_usuario.emp_cod = empresa.emp_cod
            INNER JOIN usuario ON
            empresa_usuario.usu_cod=usuario.usu_cod;";
        $mostrar = $this->db()->query($query);
        while ($row = $mostrar->fetch_object()) {
            $resultSet[] = $row;
        }
        return $resultSet;
    }

    public function joinEmpresaUsuario2($codigo, $codigo2) {

        $resultSet = null;
        $query = "SELECT empresa_usuario.emp_cod, empresa_usuario.usu_cod, empresa_usuario.fecha, empresa_usuario.estrellas, empresa_usuario.comentario,
            empresa.emp_nombre, usuario.usu_nombre 
            FROM empresa_usuario INNER JOIN empresa 
            on empresa_usuario.emp_cod = empresa.emp_cod
            INNER JOIN usuario ON
            empresa_usuario.usu_cod=usuario.usu_cod
            where  ((empresa_usuario.emp_cod = $codigo)and(empresa_usuario.usu_cod = $codigo2)) ;";
//        echo $query;
        $mostrar = $this->db()->query($query);
        $row = $mostrar->fetch_object();
        $resultSet = $row;
        return $resultSet;
    }

    public function deleteByIds($codigoEmp, $codigoUsu) {
        $codigoError = 0;
        $query = "DELETE FROM empresa_usuario WHERE emp_cod =" . $codigoEmp . " and usu_cod = " . $codigoUsu;
        $codigoError = $this->db()->query($query);
        if ($this->db()->errno) {
            $codigoError = $this->db()->errno;
            return $codigoError;
        }
        return $codigoError;
        // print_r($query);        
    }

}

?>
