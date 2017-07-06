<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">EDITAR SORTEO</h3>
    <hr/>
</div>  
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <form action = "<?php echo "index.php?controller=sorteo&action=editar"; ?>" method="post">
        <div id="" class="col-xs-12 form-group">
            <label>Código Sorteo</label>  
            <input type = "text" name="" disabled="true" class="form-control" value="<?php echo $getEdit->sor_cod ?>"/>
            <input type = "text" name="codigo" class="hidden" value="<?php echo $getEdit->sor_cod ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Fecha Inicio de Sorteo</label>  
            <input type = "text" name="fecha_inicio" class="form-control" value="<?php echo $getEdit->sor_fecha_inicio ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Cantidad de Tickets</label>  
            <input type = "text" name="cantidad_tickets" class="form-control" value="<?php echo $getEdit->sor_cantidad_tickets ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Valor Estimado</label>  
            <input type = "text" name="valorEstimado" class="form-control" value="<?php echo $getEdit->sor_precio_base ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Valor Aleatorio</label>  
            <input type = "text" name="valor_aleatorio" class="form-control" value="<?php echo $getEdit->sor_precio_sorteo ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Precio Ticket</label>  
            <input type = "text" name="precio_ticket" class="form-control" value="<?php echo $getEdit->sor_precio_tic ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Fecha Fin del Sorteo</label>  
            <input type = "text" name="fecha_fin" class="form-control" value="<?php echo $getEdit->sor_fecha_fin ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Fecha de Confirmación de la Empresa</label>  
            <input type = "text" name="fecha_confirmacion_empresa" class="form-control" value="<?php echo $getEdit->sor_fecha_confirmacion_empresa ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Comentario Empresa</label>  
            <input type = "text" name="comentario_empresa" class="form-control" value="<?php echo $getEdit->sor_comentario_empresa ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Fecha de confirmación de la Usuario</label>  
            <input type = "text" name="fecha_confirmacion_usuario" class="form-control" value="<?php echo $getEdit->sor_fecha_confirmacion_usuario ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Comentario Usuario</label>  
            <input type = "text" name="comentario_usuario" class="form-control" value="<?php echo $getEdit->sor_comentario_usuario ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Título Sorteo</label>  
            <input type = "text" name="titulo_sorteo" class="form-control" value="<?php echo $getEdit->sor_titulo_sorteo ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Producto</label>  
            <input type = "text" name="producto" class="form-control" value="<?php echo $getEdit->fk_pro_id ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Usuario</label>  
            <input type = "text" name="usuario" class="form-control" value="<?php echo $getEdit->fk_cod_usu ?>"/>
        </div>
        <div id="" class="col-xs-12">
            <button id=""  class="btn btn-primary btn-block">
                Actualizar <i class="glyphicon glyphicon-saved"></i>
            </button>
        </div>    
    </form>
</div>



