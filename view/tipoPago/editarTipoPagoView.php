
<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">EDITAR TIPO DE PAGO</h3>
    <hr/>
</div>  
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <form action = "<?php echo "index.php?controller=tipoPago&action=editar"; ?>" method="post">

        <div id="" class="col-xs-12 form-group">
            <label>Código</label>  
            <input type = "text" name="" disabled="true" class="form-control" value="<?php echo $getEdit->tip_cod ?>"/>
            <input type = "text" name="codigo" class="hidden" value="<?php echo $getEdit->tip_cod ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Nombre del Tipo de Pago</label>  
            <input type = "text" name="tipoMedioPago" class="form-control" value="<?php echo $getEdit->tip_medio_pago ?>"/>
        </div>  
        <div id="" class="col-xs-12">
            <button id=""  class="btn btn-primary btn-block">
                Actualizar <i class="glyphicon glyphicon-saved"></i>
            </button>
        </div>    
    </form>
</div>