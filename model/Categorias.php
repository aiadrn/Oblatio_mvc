<?php

class Categorias extends EntidadBase {

    private $cat_id;
    private $cat_nombre;
    private $cat_descripcion;

    public function __construct($adapter) {
        $table = "categoria";
        parent::__construct($table, $adapter);
    }

    function getCat_id() {
        return $this->cat_id;
    }

    function getCat_nombre() {
        return $this->cat_nombre;
    }

    function getCat_descripcion() {
        return $this->cat_descripcion;
    }

    function setCat_id($cat_id) {
        $this->cat_id = $cat_id;
    }

    function setCat_nombre($cat_nombre) {
        $this->cat_nombre = $cat_nombre;
    }

    function setCat_descripcion($cat_descripcion) {
        $this->cat_descripcion = $cat_descripcion;
    }

    
    public function save() {
        $query = "INSERT INTO categoria (cat_id, cat_nombre, cat_descripcion)
                VALUES($this->cat_id, '" . $this->cat_nombre."', '". $this->cat_descripcion. "'); ";
        echo $query;
        $save = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $save;
    }

    public function update() {
        $query = "UPDATE categoria SET
                cat_nombre='" . $this->cat_nombre . "',
                cat_descripcion='" . $this->cat_descripcion . "'
                where cat_id = $this->cat_id";
        echo $query;
        $update = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $update;
    }

}

?>
