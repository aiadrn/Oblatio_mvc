<?php

class MovimientoSaldo extends EntidadBase {

    private $mov_id;
    private $mov_tipo;
    private $mov_fecha;
    private $mov_valor;
    private $mov_comprobante;
    private $mov_pista_sorteo;
    private $fk_usu_cod;
    private $fk_tip_cod;
    private $fk_sor_cod;

    public function __construct($adapter) {
        $table = "movimiento_saldo";
        parent::__construct($table, $adapter);
    }

    function getMov_id() {
        return $this->mov_id;
    }

    function getMov_tipo() {
        return $this->mov_tipo;
    }

    function getMov_fecha() {
        return $this->mov_fecha;
    }

    function getMov_valor() {
        return $this->mov_valor;
    }

    function getMov_comprobante() {
        return $this->mov_comprobante;
    }

    function getMov_pista_sorteo() {
        return $this->mov_pista_sorteo;
    }

    function getFk_usu_cod() {
        return $this->fk_usu_cod;
    }

    function getFk_tip_cod() {
        return $this->fk_tip_cod;
    }

    function getFk_sor_cod() {
        return $this->fk_sor_cod;
    }

    function setMov_id($mov_id) {
        $this->mov_id = $mov_id;
    }

    function setMov_tipo($mov_tipo) {
        $this->mov_tipo = $mov_tipo;
    }

    function setMov_fecha($mov_fecha) {
        $this->mov_fecha = $mov_fecha;
    }

    function setMov_valor($mov_valor) {
        $this->mov_valor = $mov_valor;
    }

    function setMov_comprobante($mov_comprobante) {
        $this->mov_comprobante = $mov_comprobante;
    }

    function setMov_pista_sorteo($mov_pista_sorteo) {
        $this->mov_pista_sorteo = $mov_pista_sorteo;
    }

    function setFk_usu_cod($fk_usu_cod) {
        $this->fk_usu_cod = $fk_usu_cod;
    }

    function setFk_tip_cod($fk_tip_cod) {
        $this->fk_tip_cod = $fk_tip_cod;
    }

    function setFk_sor_cod($fk_sor_cod) {
        $this->fk_sor_cod = $fk_sor_cod;
    }

    public function save() {
        $query = "INSERT INTO movimiento_saldo (mov_id, mov_tipo, mov_fecha, mov_valor, mov_comprobante, mov_pista_sorteo, fk_usu_cod, fk_tip_cod, fk_sor_cod)
                VALUES($this->mov_id,
                       '" . $this->mov_tipo . "',
                       '" . $this->mov_fecha . "',
                       " . $this->mov_valor . ",
                       '" . $this->mov_comprobante . "',
                       '" . $this->mov_pista_sorteo . "',
                        " . $this->fk_usu_cod . ",
                        " . $this->fk_tip_cod . ",
                        " . $this->fk_sor_cod . "); ";
        echo $query;
        $save = $this->db()->query($query);
        //echo "SQL> ".$query;
        //$this->db()->error;
        return $save;
    }

    public function update() {
        $query = "UPDATE movimiento_saldo SET
        mov_tipo='" . $this->mov_tipo . "',
        mov_fecha='" . $this->mov_fecha . "',
        mov_valor=" . $this->mov_valor . ",
        mov_comprobante='" . $this->mov_comprobante . "',
        mov_pista_sorteo='" . $this->mov_pista_sorteo . "',
        fk_usu_cod= " . $this->fk_usu_cod . ",
        fk_tip_cod= " . $this->fk_tip_cod . ",
        fk_sor_cod= " . $this->fk_sor_cod . "                    
        where mov_id = $this->mov_id";
        echo $query;
        $update = $this->db()->query($query);
        //echo "SQL> ".$query;
        //$this->db()->error;
        return $update;
    }

//    public function joinEmpresaUsuario() {
//        $resultSet = null;
//        $query = "SELECT empresa_usuario.emp_cod, empresa_usuario.usu_cod, empresa_usuario.fecha, empresa_usuario.estrellas, empresa_usuario.comentario,
//            empresa.emp_nombre, usuario.usu_nombre 
//            FROM empresa_usuario INNER JOIN empresa 
//            on empresa_usuario.emp_cod = empresa.emp_cod
//            INNER JOIN usuario ON
//            empresa_usuario.usu_cod=usuario.usu_cod;";
//        $mostrar = $this->db()->query($query);
//        while ($row = $mostrar->fetch_object()) {
//            $resultSet[] = $row;
//        }
//        return $resultSet;
//    }
//    public function joinEmpresaUsuario2($codigo, $codigo2) {
//
//        $resultSet = null;
//        $query = "SELECT empresa_usuario.emp_cod, empresa_usuario.usu_cod, empresa_usuario.fecha, empresa_usuario.estrellas, empresa_usuario.comentario,
//            empresa.emp_nombre, usuario.usu_nombre 
//            FROM empresa_usuario INNER JOIN empresa 
//            on empresa_usuario.emp_cod = empresa.emp_cod
//            INNER JOIN usuario ON
//            empresa_usuario.usu_cod=usuario.usu_cod
//            where  ((empresa_usuario.emp_cod = $codigo)and(empresa_usuario.usu_cod = $codigo2)) ;";
////        echo $query;
//        $mostrar = $this->db()->query($query);
//        $row = $mostrar->fetch_object();
//        $resultSet = $row;
//        return $resultSet;
//    }
}

?>
