<div id="" class="col-xs-12">
    <h1 class="textoCentrado FuenteTitulo tamanioFuente2">NUEVO MOVIMIENTO SALDO</h1>
    <hr/>
</div>
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <form action = "<?php echo "index.php?controller=movimientoSaldo&action=crear"; ?>" method="post">
        <div id="" class="col-xs-12 form-group">
            <label>Código Movimiento</label>  
            <input type = "text" name="mov_id" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Tipo Movimiento</label>  
            <input type = "text" name="mov_tipo" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Fecha</label>  
            <input type = "text" name="mov_fecha" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Valor</label>  
            <input type = "text" name="mov_valor" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Comprobante</label>  
            <input type = "text" name="mov_comprobante" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Pista</label>  
            <input type = "text" name="mov_pista_sorteo" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Usuario</label>  
            <select name="fk_usu_cod" class="form-control">
                <?php
                foreach ($getEdit as $item) {
                    ?>
                    <option value="<?php echo $item->usu_cod; ?>"><?php echo $item->usu_nombre; ?></option>
                    <?php
                }
                ?>
            </select>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Tipo de Pago</label>  
            <select name="fk_tip_cod" class="form-control">
                <?php
                foreach ($getEdit2 as $item) {
                    ?>
                    <option value="<?php echo $item->tip_cod; ?>"><?php echo $item->tip_medio_pago; ?></option>
                    <?php
                }
                ?>
            </select>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Código Sorteo</label>  
            <select name="fk_sor_cod" class="form-control">
                <?php
                foreach ($getEdit3 as $item) {
                    ?>
                    <option value="<?php echo $item->sor_cod; ?>"><?php echo $item->sor_cod; ?></option>
                    <?php
                }
                ?>
            </select>
        </div> 
        <div id="" class="col-xs-12">
            <button id="btnCrear"  class="btn btn-success btn-block">
                Guardar <i class="glyphicon glyphicon-cd"></i>
            </button>
        </div>    
    </form>
</div>