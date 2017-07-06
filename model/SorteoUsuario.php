<?php

class SorteoUsuario extends EntidadBase {

    private $sor_cod;
    private $usu_cod;
    private $contenido_observacion;

    public function __construct($adapter) {
        $table = "sorteo_usuario";
        parent::__construct($table, $adapter);
    }

    function getSor_cod() {
        return $this->sor_cod;
    }

    function getUsu_cod() {
        return $this->usu_cod;
    }

    function getContenido_observacion() {
        return $this->contenido_observacion;
    }

    function setSor_cod($sor_cod) {
        $this->sor_cod = $sor_cod;
    }

    function setUsu_cod($usu_cod) {
        $this->usu_cod = $usu_cod;
    }

    function setContenido_observacion($contenido_observacion) {
        $this->contenido_observacion = $contenido_observacion;
    }

    public function save() {
        $query = "INSERT INTO sorteo_usuario (sor_cod, usu_cod, contenido_observacion)
                VALUES($this->sor_cod,
                       " . $this->usu_cod . ",
                       '" . $this->contenido_observacion . "'); ";
       
        $save = $this->db()->query($query);
        //echo "SQL> ".$query;
        //$this->db()->error;
         echo $query;
        return $save;
    }
    public function update() {
        $query = "UPDATE sorteo_usuario SET
                contenido_observacion='" . $this->contenido_observacion . "'                
                where sor_cod = $this->sor_cod and usu_cod = $this->usu_cod ";
        echo $query;
        $update = $this->db()->query($query);
        //echo "SQL> ".$query;
        //$this->db()->error;
        return $update;
    }

    public function joinSorteoUsuario() {

        $resultSet = null;
        $query = "SELECT sorteo_usuario.sor_cod, sorteo_usuario.usu_cod, usuario.usu_nombre, contenido_observacion 
            FROM sorteo_usuario INNER JOIN usuario ON
            sorteo_usuario.usu_cod=usuario.usu_cod;";
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

    public function deleteByIds($codigoSor, $codigoUsu) {
        $codigoError = 0;
        $query = "DELETE FROM sorteo_usuario WHERE sor_cod =" . $codigoSor . " and usu_cod = " . $codigoUsu;
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
