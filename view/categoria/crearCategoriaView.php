<div id="" class="col-xs-12">
    <h1 class="textoCentrado FuenteTitulo tamanioFuente2">NUEVA CATEGORÍA</h1>
    <hr/>
</div>
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <form action = "<?php echo "index.php?controller=categoria&action=crear"; ?>" method="post">
        <div id="" class="col-xs-12 form-group">
            <label>Código</label>  
            <input type = "text" name="codigo" class="form-control"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Nombre</label>  
            <input type = "text" name="nombre" class="form-control"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Descripción</label>  
            <input type = "text" name="descripcion" class="form-control"/>
        </div> 
        <div id="" class="col-xs-12">
            <button id="btnCrear"  class="btn btn-success btn-block">
                Guardar <i class="glyphicon glyphicon-cd"></i>
            </button>
        </div>    
    </form>
</div>