<?php

class EntidadBase {

    private $table;
    private $db;
    private $conectar;

    public function __construct($table, $adapter) {
        $this->table = (string) $table;
        $this->conectar = null;
        $this->db = $adapter;
    }

    public function getConetar() {
        return $this->conectar;
    }

    public function db() {
        return $this->db;
    }

    public function getAll() {
        $query = $this->db->query("SELECT * FROM $this->table");
        $resultSet = null;
        while ($row = $query->fetch_object()) {
            $resultSet[] = $row;
        }
        return $resultSet;
    } 
    
    public function getCol($campo) {
        $query = $this->db->query("SELECT $campo FROM $this->table ");
        $resultSet = null;
        while ($row = $query->fetch_object()) {
            $resultSet[] = $row;
        }
        return $resultSet;
    }
    

    public function getById($id, $primaryKey) {
        $query = $this->db->query("SELECT * FROM $this->table WHERE " . $primaryKey . "=" . $id);
        $resultSet = null;
        
        if ($row = $query->fetch_object()) {
            $resultSet = $row;
        } else {
            echo "No se pudo mostrar lo que busca, por favor contacte al administrador";
        }
        return $resultSet;
    }

    public function getByIds($id1, $primaryKey1, $id2, $primaryKey2) {
        $query = $this->db->query("SELECT * FROM $this->table WHERE " . $id1 . "=" . $primaryKey1." and ". $id2. "=" .$primaryKey2);
        $resultSet = null;
        if ($row = $query->fetch_object()) {
            $resultSet = $row;
        } else {
            echo "No se pudo mostrar lo que busca, por favor contacte al administrador";
        }
        return $resultSet;
    }

    public function getBy($column, $value) {
        $query = $this->db->query("SELECT * FROM $this->table WHERE $column='$value'");

        while ($row = $query->fetch_object()) {
            $resultSet[] = $row;
        }

        return $resultSet;
    }

    public function deleteById($primaryKey, $codigo) {
        $query = $this->db->query("DELETE FROM $this->table WHERE " . $primaryKey . "=" . $codigo);
        $codigoError = 0;

        if ($this->db()->errno) {
            $codigoError = $this->db()->errno;
            return $codigoError;
        }
        return $query;
        // print_r($query);        
    }

    public function deleteBy($column, $value) {
        $query = $this->db->query("DELETE FROM $this->table WHERE $column='$value'");
        return $query;
    }

    /*
     * Aqui podemos montarnos un monton de métodos que nos ayuden
     * a hacer operaciones con la base de datos de la entidad
     */
}

?>
