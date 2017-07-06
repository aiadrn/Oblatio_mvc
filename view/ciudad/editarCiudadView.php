<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">EDITAR CIUDAD</h3>
    <hr/>
</div>  
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <form action = "<?php echo "index.php?controller=ciudad&action=editar"; ?>" method="post">
        <div id="" class="col-xs-12 form-group">
            <label>Id</label>  
            <input type = "text" name="" disabled="true" class="form-control" value="<?php echo $getEdit->ciu_id ?>"/>
            <input type = "text" name="codigo" class="hidden" value="<?php echo $getEdit->ciu_id ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Nombre</label>  
            <input type = "text" name="nombre" class="form-control" value="<?php echo $getEdit->ciu_nombre ?>"/>
        </div>  
        <div id="" class="col-xs-12 form-group">
            <label>Departamento</label>  
            <select name="fk_dep_id"  class="form-control" value="">
                <?php
                foreach ($getEdit2 as $item) {
                    ?>
                    <?php
                    if ($getEdit->fk_dep_id != $item->dep_id) {
                        ?>
                        <option value="<?php echo $item->dep_id; ?>"><?php echo $item->dep_nombre; ?></option>
                        <?php
                    } else {
                        ?>
                        <option selected="selected" value="<?php echo $item->dep_id; ?>"><?php echo $item->dep_nombre; ?></option>
                        <?php
                    }
                }
                ?>                
            </select>
        </div>
        <div id="" class="col-xs-12">
            <button id=""  class="btn btn-primary btn-block">
                Actualizar <i class="glyphicon glyphicon-saved"></i>
            </button>
        </div>    
    </form>
</div>