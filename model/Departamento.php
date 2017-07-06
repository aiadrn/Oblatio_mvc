<?php

class Departamento extends EntidadBase {

    private $dep_id;
    private $dep_nombre;

    public function __construct($adapter) {
        $table = "departamento";
        parent::__construct($table, $adapter);
    }

    function getDep_id() {
        return $this->dep_id;
    }

    function getDep_nombre() {
        return $this->dep_nombre;
    }

    function setDep_id($dep_id) {
        $this->dep_id = $dep_id;
    }

    function setDep_nombre($dep_nombre) {
        $this->dep_nombre = $dep_nombre;
    }

    public function save() {
        $query = "INSERT INTO departamento (dep_id, dep_nombre)
                VALUES($this->dep_id, '" . $this->dep_nombre . "'); ";
        //echo $query;
        $save = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $save;
    }

    public function update() {
        $query = "UPDATE departamento SET
                dep_nombre='" . $this->dep_nombre . "'
                where dep_id = $this->dep_id";
        echo $query;
        $update = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $update;
    }

}

?>
