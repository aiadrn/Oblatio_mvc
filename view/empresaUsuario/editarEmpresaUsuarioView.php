<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">EDITAR EMPRESA USUARIO</h3>
    <hr/>
</div>  
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <form action = "<?php echo "index.php?controller=empresaUsuario&action=editar"; ?>" method="post">

        <div id="" class="col-xs-12 form-group">
            <label>Código Empresa</label>  
            <input type = "text" name="" disabled="true" class="form-control" value="<?php echo $getEdit->emp_cod ?>"/>
            <input type = "text" name="empresaCodigo" class="hidden" value="<?php echo $getEdit->emp_cod ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Código Usuario</label>  
            <input type = "text" name="" disabled="true" class="form-control" value="<?php echo $getEdit->usu_cod?>"/>
            <input type = "text" name="usuarioCodigo" class="hidden" value="<?php echo $getEdit->usu_cod?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Fecha</label>  
            <input type = "date" name="fecha" class="form-control"  value="<?php echo $getEdit->fecha ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Estrellas</label>  
            <input type = "text" name="estrellas" class="form-control"  value="<?php echo $getEdit->estrellas ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Comentario</label>  
            <input type = "text" name="comentario" class="form-control"  value="<?php echo $getEdit->comentario ?>"/>
        </div> 
        <div id="" class="col-xs-12">
            <button id=""  class="btn btn-primary btn-block">
                Actualizar <i class="glyphicon glyphicon-saved"></i>
            </button>
        </div>    
    </form>
</div>


