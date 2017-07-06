<?php

class CategoriaUsuario extends EntidadBase {

    private $cat_id;
    private $usu_cod;

    public function __construct($adapter) {
        $table = "categoria_usuario";
        parent::__construct($table, $adapter);
    }

    function getUsu_cod() {
        return $this->usu_cod;
    }

    function getCat_id() {
        return $this->cat_id;
    }

    function setUsu_cod($usu_cod) {
        $this->usu_cod = $usu_cod;
    }

    function setCat_id($cat_id) {
        $this->cat_id = $cat_id;
    }

    public function save() {
        $query = "INSERT INTO categoria_usuario (cat_id, usu_cod)
                VALUES($this->cat_id, 
                        $this->usu_cod);";

        // echo $query;
        $save = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $save;
    }

    public function update() {
        $query = "UPDATE categoria_usuario SET
                usu_cod=" . $this->usu_cod . ",
                cat_id=$this->cat_id
                WHERE cat_id=$this->cat_id";
        //echo $query;
        $update = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $update;
    }

    public function joinCategoriaUsuario() {

        $resultSet = null;
        $query = "SELECT categoria_usuario.cat_id, categoria_usuario.usu_cod,  categoria.cat_nombre, usuario.usu_nombre 
            FROM categoria_usuario INNER JOIN categoria 
            on categoria_usuario.cat_id =categoria.cat_id
            INNER JOIN usuario ON
            categoria_usuario.usu_cod=usuario.usu_cod;";
        $mostrar = $this->db()->query($query);
        while ($row = $mostrar->fetch_object()) {
            $resultSet[] = $row;
        }
        return $resultSet;
    }
    
    public function deleteByIds($codigoCat, $codigoUsu)
    {
        $codigoError = 0;
        $query = "DELETE FROM categoria_usuario WHERE cat_id =". $codigoCat." and usu_cod = ".$codigoUsu;
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
