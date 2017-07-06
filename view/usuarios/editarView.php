<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">EDITAR USUARIO</h3>
    <hr/>
</div>  
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <div id="" class="col-xs-12 form-group">        
    </div>
    <form enctype="multipart/form-data" action = "<?php echo "index.php?controller=usuarios&action=editar"; ?>" method="post">

        <div id="" class="col-xs-12 form-group">
            <label>Código</label>  
           <input type = "text" name="codigo" class="hidden" value="<?php echo $getEdit->usu_cod ?>"/>
            <input type = "text" name="" disabled="true" class="form-control" value="<?php echo $getEdit->usu_cod ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Nombre</label>  
            <input type = "text" name="nombre" class="form-control" value="<?php echo $getEdit->usu_nombre ?>"/>
        </div>  
        <div id="" class="col-xs-12 form-group">
            <label>Apellidos</label>  
            <input type = "text" name="apellidos" class="form-control" value="<?php echo $getEdit->usu_apellidos ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Teléfono</label>  
            <input type = "text" name="telefono" class="form-control" value="<?php echo $getEdit->usu_telefono ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Correo</label>  
            <input type = "text" name="correo" class="form-control" value="<?php echo $getEdit->usu_correo ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Fecha de Nacimiento</label>  
            <input type = "date" name="fecha" class="form-control" value="<?php echo $getEdit->usu_fecha_nacimiento ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Género</label>  <br>
            <?php
            if ($getEdit->usu_genero == 'M') {
                ?>
                <input type="radio" name="genero" value="M" checked="true"> Masculino<br>
                <input type="radio" name="genero" value="F"> Femenino<br> 
                <?php
            } else {
                ?>
                <input type="radio" name="genero" value="M"> Masculino<br>
                <input type="radio" name="genero" value="F"  checked="true"> Femenino<br> 
                <?php
            }
            ?>       
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Foto de Perfil</label>  
            <input type="hidden" name=" MAX_FILE_SIZE" value="30000" />
            <input name="uploadedfile"  type="file" class="btn"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Alias</label>  
            <input type = "text" name="alias" class="form-control" value="<?php echo $getEdit->usu_alias ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Contraseña</label>  
            <input type = "text" name="contrasena" class="form-control" value="<?php echo $getEdit->usu_contrasena ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Ciudad</label>  
            <select name="ciudad"  class="form-control" value="">
                <?php
                foreach ($getEdit2 as $item) {
                    ?>
                    <?php
                    if ($getEdit->fk_ciu_id != $item->ciu_id) {
                        ?>
                        <option value="<?php echo $item->ciu_id; ?>"><?php echo $item->ciu_nombre; ?></option>
                        <?php
                    } else {
                        ?>
                        <option selected="selected" value="<?php echo $item->ciu_id; ?>"><?php echo $item->ciu_nombre; ?></option>
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