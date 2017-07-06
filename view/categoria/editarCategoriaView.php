<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">EDITAR CATEGORÍA</h3>
    <hr/>
</div>  
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <form action = "<?php echo "index.php?controller=categoria&action=editar"; ?>" method="post">

        <div id="" class="col-xs-12 form-group">
            <label>Código</label>  
            <input type = "text" name="" disabled="true" class="form-control" value="<?php echo $getEdit->cat_id ?>"/>
            <input type = "text" name="codigo" class="hidden" value="<?php echo $getEdit->cat_id ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Nombre</label>  
            <input type = "text" name="nombre" class="form-control" value="<?php echo $getEdit->cat_nombre ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Descripción</label>  
            <input type = "text" name="descripcion" class="form-control"  value="<?php echo $getEdit->cat_descripcion ?>"/>
        </div> 
        <div id="" class="col-xs-12">
            <button id=""  class="btn btn-primary btn-block">
                Actualizar <i class="glyphicon glyphicon-saved"></i>
            </button>
        </div>    
    </form>
</div>