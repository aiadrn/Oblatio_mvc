<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">EDITAR PRODUCTO</h3>
    <hr/>
</div>  
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <form action = "<?php echo "index.php?controller=producto&action=editar"; ?>" method="post">
        <div id="" class="col-xs-12 form-group">
            <label>Código Producto</label>  
            <input type = "text" name="" disabled="true" class="form-control" value="<?php echo $getEdit->pro_id ?>"/>
            <input type = "text" name="codigo" class="hidden" value="<?php echo $getEdit->pro_id ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Nombre</label>  
            <input type = "text" name="nombre" class="form-control" value="<?php echo $getEdit->pro_nombre ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Descripcion</label>  
            <input type = "text" name="descripcion" class="form-control" value="<?php echo $getEdit->pro_descripcion ?>"/>
        </div>

        <div id="" class="col-xs-12 form-group">
            <label>Valor estimado</label>  
            <input type = "text" name="valorEstimado" class="form-control" value="<?php echo $getEdit->pro_valor_estimado ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Foto Producto</label>  
            <input type = "text" name="foto" class="form-control" value="<?php echo $getEdit->pro_imagen ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Cantidad</label>  
            <input type = "text" name="cantidad" class="form-control" value="<?php echo $getEdit->pro_cantidad ?>"/>
        </div>

        <div id="" class="col-xs-12 form-group">
            <label>Empresa</label>  
            <select name="empresa"  class="form-control" value="">
                <?php
                foreach ($getEdit2 as $item) {
                    ?>
                    <?php
                    if ($getEdit->fk_emp_cod != $item->emp_cod) {
                        ?>
                        <option value="<?php echo $item->emp_cod; ?>"><?php echo $item->emp_nombre; ?></option>
                        <?php
                    } else {
                        ?>
                        <option selected="selected" value="<?php echo $item->emp_cod; ?>"><?php echo $item->emp_nombre; ?></option>
                        <?php
                    }
                }
                ?>                
            </select>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Categoría</label>  
            <select name="categoria"  class="form-control" value="">
                <?php
                foreach ($getEdit3 as $item2) {
                    ?>
                    <?php
                    if ($getEdit->fk_cat_id != $item2->cat_id) {
                        ?>
                        <option value="<?php echo $item2->cat_id; ?>"><?php echo $item2->cat_nombre; ?></option>
                        <?php
                    } else {
                        ?>
                        <option selected="selected" value="<?php echo $item2->cat_id; ?>"><?php echo $item2->cat_nombre; ?></option>
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



