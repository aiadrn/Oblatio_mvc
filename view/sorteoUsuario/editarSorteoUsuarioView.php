<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">EDITAR SORTEO USUARIO</h3>
    <hr/>
</div>  
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <form action = "<?php echo "index.php?controller=SorteoUsuario&action=editar"; ?>" method="post">
        <div id="" class="col-xs-12 form-group">
            <label>Código Sorteo</label>  
            <input type = "text" name="" disabled="true" class="form-control" value="<?php echo $getEdit->sor_cod ?>"/>
            <input type = "text" name="sorteoCodigo" class="hidden" value="<?php echo $getEdit->sor_cod ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Código Usuario</label>  
            <input type = "text" name="" disabled="true" class="form-control" value="<?php echo $getEdit->usu_cod?>"/>
            <input type = "text" name="usuarioCodigo" class="hidden" value="<?php echo $getEdit->usu_cod?>"/>
        </div>        
        <div id="" class="col-xs-12 form-group">
            <label>Comentario Usuario ganador</label>  
            <input type = "text" name="comentario" class="form-control"  value="<?php echo $getEdit->contenido_observacion ?>"/>
        </div> 
        <div id="" class="col-xs-12">
            <button id=""  class="btn btn-primary btn-block">
                Actualizar <i class="glyphicon glyphicon-saved"></i> 
            </button>
        </div>    
    </form>
</div>


