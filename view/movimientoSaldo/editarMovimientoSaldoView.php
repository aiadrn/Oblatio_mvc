<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">EDITAR MOVIMIENTO SALDO</h3>
    <hr/>
</div>  
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <form action = "<?php echo "index.php?controller=movimientoSaldo&action=editar"; ?>" method="post">                    

        <div id="" class="col-xs-12 form-group">
            <label>Código Movimiento</label>  
            <input type = "text" name="" disabled="true" class="form-control" value="<?php echo $getEdit->mov_id ?>"/>
            <input type = "text" name="mov_id" class="hidden" value="<?php echo $getEdit->mov_id ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Tipo Movimiento</label>  
            <input type = "text" name="mov_tipo"  class="form-control" value="<?php echo $getEdit->mov_tipo?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Fecha</label>  
            <input type = "text" name="mov_fecha" class="form-control"  value="<?php echo $getEdit->mov_fecha ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Valor</label>  
            <input type = "text" name="mov_valor" class="form-control"  value="<?php echo $getEdit->mov_valor ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Comprobante</label>  
            <input type = "text" name="mov_comprobante" class="form-control"  value="<?php echo $getEdit->mov_comprobante ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Pista</label>  
            <input type = "text" name="mov_pista_sorteo"class="form-control" value="<?php echo $getEdit->mov_pista_sorteo?>"/>
           </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Codigo Usuario</label>  
            <input type = "text" name="fk_usu_cod" class="form-control"  value="<?php echo $getEdit->fk_usu_cod ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Tipo Codigo</label>  
            <input type = "text" name="fk_tip_cod" class="form-control"  value="<?php echo $getEdit->fk_tip_cod ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Codigo Sorteo</label>  
            <input type = "text" name="fk_sor_cod" class="form-control"  value="<?php echo $getEdit->fk_sor_cod ?>"/>
        </div> 
        <div id="" class="col-xs-12">
            <button id=""  class="btn btn-primary btn-block">
                Actualizar <i class="glyphicon glyphicon-saved"></i>
            </button>
        </div>    
    </form>
</div>


