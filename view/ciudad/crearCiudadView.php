
<div id="" class="col-xs-12">
    <h1 class="textoCentrado FuenteTitulo tamanioFuente2">NUEVA CUIDAD</h1>
    <hr/>
</div>
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <form action = "<?php echo "index.php?controller=ciudad&action=crear"; ?>" method="post">
        <div id="" class="col-xs-12 form-group">
            <label>ID</label>  
            <input type = "text" name="codigo" class="form-control"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Nombre</label>  
            <input type = "text" name="nombre" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Departamento</label>  
            <select name="fk_dep_id" class="form-control">
                <?php
                foreach ($getEdit as $item) {
                    ?>
                    <option value="<?php echo $item->dep_id; ?>"><?php echo $item->dep_nombre; ?></option>
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