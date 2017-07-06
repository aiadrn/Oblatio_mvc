

<div id="" class="col-xs-12">
    <h1 class="textoCentrado FuenteTitulo tamanioFuente2">NUEVA CATEGORÍA USUARIO</h1>
    <hr/>
</div>
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <form action = "<?php echo "index.php?controller=categoriaUsuario&action=crear"; ?>" method="post">
        <div id="" class="col-xs-12 form-group">
            <label>ID Categoría</label>  
            <select name="cat_id" class="form-control">
                <?php
                foreach ($getEdit2 as $item2) {
                    ?>
                    <option value="<?php echo $item2->cat_id; ?>"><?php echo $item2->cat_nombre; ?></option>
                    <?php
                }
                ?>
            </select>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Código Usuario</label>  
            <select name="usu_cod" class="form-control">
                <?php
                foreach ($getEdit as $item) {
                    ?>
                    <option value="<?php echo $item->usu_cod; ?>"><?php echo $item->usu_nombre; ?></option>
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