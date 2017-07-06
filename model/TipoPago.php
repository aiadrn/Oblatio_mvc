<?php

class TipoPago extends EntidadBase {

    private $tip_cod;
    private $tip_medio_pago;

    public function __construct($adapter) {
        $table = "tipo_pago";
        parent::__construct($table, $adapter);
    }
    function getTip_cod() {
        return $this->tip_cod;
    }

    function getTip_medio_pago() {
        return $this->tip_medio_pago;
    }

    function setTip_cod($tip_cod) {
        $this->tip_cod = $tip_cod;
    }

    function setTip_medio_pago($tip_medio_pago) {
        $this->tip_medio_pago = $tip_medio_pago;
    }

        

    public function save() {
        $query = "INSERT INTO tipo_pago (tip_cod, tip_medio_pago)
                VALUES($this->tip_cod, '" . $this->tip_medio_pago . "'); ";
        //echo $query;
        $save = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $save;
    }

    public function update() {
        $query = "UPDATE tipo_pago SET
                tip_medio_pago='" . $this->tip_medio_pago . "'
                where tip_cod = $this->tip_cod";
        echo $query;
        $update = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $update;
    }

}

?>
