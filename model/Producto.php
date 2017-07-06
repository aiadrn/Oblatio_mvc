<?php

class Producto extends EntidadBase {

    private $pro_cod;
    private $pro_nombre;
    private $pro_descripcion;
    private $pro_valor_estimado;
    private $pro_imagen;
    private $pro_cantidad;
    private $pro_fecha_actualizacion;
    private $fk_emp_cod;
    private $fk_cat_id;

    public function __construct($adapter) {
        $table = "producto";
        parent::__construct($table, $adapter);
    }

    function getPro_cod() {
        return $this->pro_cod;
    }

    function getPro_nombre() {
        return $this->pro_nombre;
    }

    function getPro_descripcion() {
        return $this->pro_descripcion;
    }

    function getPro_valor_estimado() {
        return $this->pro_valor_estimado;
    }

    function getPro_imagen() {
        return $this->pro_imagen;
    }

    function getPro_cantidad() {
        return $this->pro_cantidad;
    }

    function getPro_fecha_actualizacion() {
        return $this->pro_fecha_actualizacion;
    }

    function getFk_emp_cod() {
        return $this->fk_emp_cod;
    }

    function getFk_cat_id() {
        return $this->fk_cat_id;
    }

    function setPro_cod($pro_cod) {
        $this->pro_cod = $pro_cod;
    }

    function setPro_nombre($pro_nombre) {
        $this->pro_nombre = $pro_nombre;
    }

    function setPro_descripcion($pro_descripcion) {
        $this->pro_descripcion = $pro_descripcion;
    }

    function setPro_valor_estimado($pro_valor_estimado) {
        $this->pro_valor_estimado = $pro_valor_estimado;
    }

    function setPro_imagen($pro_imagen) {
        $this->pro_imagen = $pro_imagen;
    }

    function setPro_cantidad($pro_cantidad) {
        $this->pro_cantidad = $pro_cantidad;
    }

    function setPro_fecha_actualizacion($pro_fecha_actulizacion) {
        $this->pro_fecha_actualizacion = $pro_fecha_actulizacion;
    }

    function setFk_emp_cod($fk_emp_cod) {
        $this->fk_emp_cod = $fk_emp_cod;
    }

    function setFk_cat_cod($fk_cat_id) {
        $this->fk_cat_id = $fk_cat_id;
    }

    public function save() {
        $query = "INSERT INTO producto (pro_id, pro_nombre, pro_descripcion, pro_valor_estimado, pro_imagen, 
            pro_cantidad, pro_fecha_actualizacion, fk_emp_cod, fk_cat_id)
                VALUES($this->pro_cod,
                       '" . $this->pro_nombre . "',
                       '" . $this->pro_descripcion . "',
                       " . $this->pro_valor_estimado . ",
                       '" . $this->pro_imagen . "',
                       " . $this->pro_cantidad . ",
                       '" . $this->pro_fecha_actualizacion . "',
                       " . $this->fk_emp_cod . ",
                       " . $this->fk_cat_id . "); ";
        //echo $query;

        $save = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $save;
    }

    public function update() {
        $query = "UPDATE producto SET
                pro_nombre='" . $this->pro_nombre . "',
                pro_descripcion='" . $this->pro_descripcion . "',
                pro_valor_estimado=" . $this->pro_valor_estimado . ",
                pro_imagen='" . $this->pro_imagen . "',
                pro_cantidad=" . $this->pro_cantidad . ",
                pro_fecha_actualizacion='" . $this->pro_fecha_actualizacion . "',
                fk_emp_cod=" . $this->fk_emp_cod . ",
                fk_cat_id = $this->fk_cat_id
                where pro_id = $this->pro_cod";
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
