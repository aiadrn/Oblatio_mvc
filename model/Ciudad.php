<?php

class Ciudad extends EntidadBase {

    private $ciu_id;
    private $ciu_nombre;
    private $fk_dep_id;

    public function __construct($adapter) {
        $table = "ciudad";
        parent::__construct($table, $adapter);
    }

    function getCiu_id() {
        return $this->ciu_id;
    }

    function getCiu_nombre() {
        return $this->ciu_nombre;
    }

    function getFk_dep_id() {
        return $this->fk_dep_id;
    }

    function setCiu_id($ciu_id) {
        $this->ciu_id = $ciu_id;
    }

    function setCiu_nombre($ciu_nombre) {
        $this->ciu_nombre = $ciu_nombre;
    }

    function setFk_dep_id($fk_dep_id) {
        $this->fk_dep_id = $fk_dep_id;
    }

    
    public function save() {
        $query = "INSERT INTO ciudad (ciu_id, ciu_nombre, fk_dep_id)
                VALUES($this->ciu_id, '".$this->ciu_nombre."',".$this->fk_dep_id.");";
             
        
        $save = $this->db()->query($query);

        echo "SQL> ".$query;
        //$this->db()->error;
        return $save;
    }

    public function update() {
        $query = "UPDATE ciudad SET
                ciu_nombre='" . $this->ciu_nombre . "',
                fk_dep_id = $this->fk_dep_id
                where ciu_id = $this->ciu_id";
        //echo $query;
        $update = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $update;
    }
    public function joinCiudadDepartamento() {
        $resultSet = null;
        $query = "SELECT ciudad.ciu_id, ciudad.ciu_nombre, ciudad.fk_dep_id, departamento.dep_nombre 
        FROM ciudad INNER JOIN departamento 
        on ciudad.fk_dep_id = departamento.dep_id;";
        $mostrar = $this->db()->query($query);
        while ($row = $mostrar->fetch_object()) {
            $resultSet[] = $row;
        }
        return $resultSet;
    }
}

?>
