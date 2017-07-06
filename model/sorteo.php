<?php

class Sorteo extends EntidadBase {

    private $sor_cod;
    private $sor_fecha_inicio;
    private $sor_cantidad_tickets;
    private $sor_precio_base;
    private $sor_precio_sorteo;
    private $sor_precio_tic;
    private $sor_fecha_fin;
    private $sor_fecha_confirmacion_empresa;
    private $sor_comentario_empresa;
    private $sor_fecha_confirmacion_usuario;
    private $sor_comentario_usuario;
    private $sor_titulo_sorteo;
    private $fk_pro_id;
    private $fk_cod_usu;

    public function __construct($adapter) {
        $table = "sorteo";
        parent::__construct($table, $adapter);
    }

    function getSor_cod() {
        return $this->sor_cod;
    }

    function getSor_fecha_inicio() {
        return $this->sor_fecha_inicio;
    }

    function getSor_cantidad_tickets() {
        return $this->sor_cantidad_tickets;
    }

    function getSor_precio_base() {
        return $this->sor_precio_base;
    }

    function getSor_precio_sorteo() {
        return $this->sor_precio_sorteo;
    }

    function setSor_precio_sorteo($sor_precio_sorteo) {
        $this->sor_precio_sorteo = $sor_precio_sorteo;
    }

    function getSor_precio_tic() {
        return $this->sor_precio_tic;
    }

    function getSor_fecha_fin() {
        return $this->sor_fecha_fin;
    }

    function getSor_fecha_confirmacion_empresa() {
        return $this->sor_fecha_confirmacion_empresa;
    }

    function getSor_comentario_empresa() {
        return $this->sor_comentario_empresa;
    }

    function getSor_fecha_confirmacion_usuario() {
        return $this->sor_fecha_confirmacion_usuario;
    }

    function getSor_comentario_usuario() {
        return $this->sor_comentario_usuario;
    }

    function getSor_titulo_sorteo() {
        return $this->sor_titulo_sorteo;
    }

    function getFk_pro_id() {
        return $this->fk_pro_id;
    }

    function getFk_cod_usu() {
        return $this->fk_cod_usu;
    }

    function setSor_cod($sor_cod) {
        $this->sor_cod = $sor_cod;
    }

    function setSor_fecha_inicio($sor_fecha_inicio) {
        $this->sor_fecha_inicio = $sor_fecha_inicio;
    }

    function setSor_cantidad_tickets($sor_cantidad_tickets) {
        $this->sor_cantidad_tickets = $sor_cantidad_tickets;
    }

    function setSor_precio_base($sor_precio_base) {
        $this->sor_precio_base = $sor_precio_base;
    }

    function setSor_precio_tic($sor_precio_tic) {
        $this->sor_precio_tic = $sor_precio_tic;
    }

    function setSor_fecha_fin($sor_fecha_fin) {
        $this->sor_fecha_fin = $sor_fecha_fin;
    }

    function setSor_fecha_confirmacion_empresa($sor_fecha_confirmacion_empresa) {
        $this->sor_fecha_confirmacion_empresa = $sor_fecha_confirmacion_empresa;
    }

    function setSor_comentario_empresa($sor_comentario_empresa) {
        $this->sor_comentario_empresa = $sor_comentario_empresa;
    }

    function setSor_fecha_confirmacion_usuario($sor_fecha_confirmacion_usuario) {
        $this->sor_fecha_confirmacion_usuario = $sor_fecha_confirmacion_usuario;
    }

    function setSor_comentario_usuario($sor_comentario_usuario) {
        $this->sor_comentario_usuario = $sor_comentario_usuario;
    }

    function setSor_titulo_sorteo($sor_titulo_sorteo) {
        $this->sor_titulo_sorteo = $sor_titulo_sorteo;
    }

    function setFk_pro_id($fk_pro_id) {
        $this->fk_pro_id = $fk_pro_id;
    }

    function setFk_cod_usu($fk_cod_usu) {
        $this->fk_cod_usu = $fk_cod_usu;
    }

    public function save() {
        $query = "INSERT INTO sorteo (sor_cod, sor_fecha_inicio, sor_cantidad_tickets, 	sor_precio_base, sor_precio_sorteo, sor_precio_tic, sor_fecha_fin, sor_fecha_confirmacion_empresa, sor_comentario_empresa, sor_fecha_confirmacion_usuario, sor_comentario_usuario, sor_titulo_sorteo, fk_pro_id, fk_cod_usu)
                VALUES($this->sor_cod,
                       '" . $this->sor_fecha_inicio . "',
                       " . $this->sor_cantidad_tickets . ",
                       " . $this->sor_precio_base . ",
                       " . $this->sor_precio_sorteo . ",
                       " . $this->sor_precio_tic . ",
                       '" . $this->sor_fecha_fin . "',
                       '" . $this->sor_fecha_confirmacion_empresa . "',
                       '" . $this->sor_comentario_empresa . "',
                       '" . $this->sor_fecha_confirmacion_usuario . "',
                       '" . $this->sor_comentario_usuario . "',
                       '" . $this->sor_titulo_sorteo . "',
                       " . $this->fk_pro_id . ",                       
                       " . $this->fk_cod_usu . "); ";

        //echo $query;

        $save = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $save;
    }

    public function update() {
        $query = "UPDATE sorteo SET
                sor_fecha_inicio='" . $this->sor_fecha_inicio . "',
                sor_cantidad_tickets=" . $this->sor_cantidad_tickets . ",
                sor_precio_base=" . $this->sor_precio_base . ",
                sor_precio_sorteo=" . $this->sor_precio_sorteo. ",
                sor_precio_tic=" . $this->sor_precio_tic . ",
                sor_fecha_fin='" . $this->sor_fecha_fin . "',
                sor_fecha_confirmacion_empresa='" . $this->sor_fecha_confirmacion_empresa . "',
                sor_comentario_empresa='" . $this->sor_comentario_empresa. "',
                sor_fecha_confirmacion_usuario='" . $this->sor_fecha_confirmacion_usuario . "',
                sor_comentario_usuario='" . $this->sor_comentario_usuario. "',
                sor_titulo_sorteo='" . $this->sor_titulo_sorteo. "',
                fk_pro_id=" . $this->fk_pro_id . ",
                fk_cod_usu=" . $this->fk_cod_usu . "
                where sor_cod = $this->sor_cod";
        echo $query;
        $update = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $update;
    }

//    public function joinEmpresaCiudad($codigo) {
//        $resultSet = null;
//        $query = "SELECT empresa.emp_cod, empresa.emp_nit, empresa.emp_nombre, empresa.emp_direccion, empresa.emp_telefono, empresa.emp_extension, empresa.emp_correo, empresa.emp_usuario, empresa.emp_contrasena, empresa.emp_estado, empresa.emp_fecha_vinculacion, empresa.emp_fecha_aprobacion, empresa.emp_imagen, empresa.fk_ciu_id, empresa.fk_adm_id, ciudad.ciu_nombre 
//        FROM empresa INNER JOIN ciudad 
//        on empresa.fk_ciu_id= ciudad.ciu_id
//        where empresa.emp_cod = $codigo;";
//        
//        $mostrar = $this->db()->query($query);
//        $row = $mostrar->fetch_object();
//        $resultSet = $row;
//        return $resultSet;
//    }

    public function joinProductoCategoriaEmpresa() {
        $resultSet = null;
        $query = "SELECT producto.pro_id, producto.pro_nombre, producto.pro_descripcion, producto.pro_valor_estimado, producto.pro_imagen, producto.pro_cantidad, producto.pro_fecha_actualizacion, producto.fk_emp_cod, producto.fk_cat_id, empresa.emp_nombre, categoria.cat_nombre
        FROM producto INNER JOIN empresa
        on producto.fk_emp_cod = empresa.emp_cod 
        INNER JOIN categoria
        ON producto.fk_cat_id = categoria.cat_id;";
        $mostrar = $this->db()->query($query);
        $row = $mostrar->fetch_object();
        $resultSet = $row;
        return $resultSet;
    }

}

?>
