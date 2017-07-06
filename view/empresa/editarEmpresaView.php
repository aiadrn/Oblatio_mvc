<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">EDITAR EMPRESA</h3>
    <hr/>
</div>  
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <?php
    if ($_SESSION['adm_tipo_administrador'] == 0) {
        ?>
        <form action = "<?php echo "index.php?controller=empresa&action=cambiarEstado"; ?>" method="post">
            <div id="" class="col-xs-12 form-group">
                <label>Nombre Empresa</label>  
                <input type = "text" name="nit" class="form-control" disabled="true" value="<?php echo $getEdit->emp_nombre ?>"/>
            </div>
            <?php
        }
        ?> 
        <?php
        if ($_SESSION['adm_tipo_administrador'] == 1) {
            ?>
            <form action = "<?php echo "index.php?controller=empresa&action=editar"; ?>" method="post">
                <input type = "text" name="codigo" class="hidden" value="<?php echo $getEdit->emp_cod ?>"/>
                <div id="" class="col-xs-12 form-group">
                    <label>NIT Empresa</label>  
                    <input type = "text" name="nit" class="form-control" value="<?php echo $getEdit->emp_nit ?>"/>
                </div> 
                <div id="" class="col-xs-12 form-group">
                    <label>Nombre</label>  
                    <input type = "text" name="nombre" class="form-control" value="<?php echo $getEdit->emp_nombre ?>"/>
                </div> 
                <div id="" class="col-xs-12 form-group">
                    <label>Dirección </label>  
                    <input type = "text" name="direccion" class="form-control"  value="<?php echo $getEdit->emp_direccion ?>"/>
                </div> 
                <div id="" class="col-xs-12 form-group">
                    <label>Teléfono</label>  
                    <input type = "text" name="telefono" class="form-control"  value="<?php echo $getEdit->emp_telefono ?>"/>
                </div> 
                <div id="" class="col-xs-12 form-group">
                    <label>Extensión</label>  
                    <input type = "text" name="extension" class="form-control"  value="<?php echo $getEdit->emp_extension ?>"/>
                </div> 
                <div id="" class="col-xs-12 form-group">
                    <label>Correo</label>  
                    <input type = "text" name="correo" class="form-control"  value="<?php echo $getEdit->emp_correo ?>"/>
                </div> 
                <div id="" class="col-xs-12 form-group">
                    <label>Usuario</label>  
                    <input type = "text" name="usuario" class="form-control"  value="<?php echo $getEdit->emp_usuario ?>"/>
                </div> 
                <div id="" class="col-xs-12 form-group">
                    <label>Contraseña</label>  
                    <input type = "password" name="contrasena" class="form-control"  value="<?php echo $getEdit->emp_contrasena ?>"/>
                </div> 
                <?php
            }
            ?> 
           <input type = "text" name="codigo" class="hidden" value="<?php echo $getEdit->emp_cod ?>"/>
            <div id="" class="col-xs-12 form-group">
                <label>Estado</label>  
                <select name="estado"  class="form-control">
                    <?php
                    if ($getEdit->emp_estado == 1) {
                        ?>
                        <option selected="selected"  value="1">Activa</option>
                        <option value="0">Inactiva</option>
                        <?php
                    } else {
                        ?>
                        <option selected="selected"  value="0">Inactiva</option>
                        <option value="1">Activa</option>
                        <?php
                    }
                    ?>


                </select>
            </div>
            <?php
            if ($_SESSION['adm_tipo_administrador'] == 1) {
                ?>
                <div id="" class="col-xs-12 form-group">
                    <label>Fecha de Vinculación</label>  
                    <input type = "text" name="fecha_vinculacion" class="form-control"  value="<?php echo $getEdit->emp_fecha_vinculacion ?>"/>
                </div> 
                <div id="" class="col-xs-12 form-group">
                    <label>Imagen</label>  
                    <input type = "text" name="imagen" class="form-control"  value="<?php echo $getEdit->emp_imagen ?>"/>
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
                <?php
            }
            ?>

            <?php
            if ($_SESSION['adm_tipo_administrador'] == 0) {
                ?>
                <div id="" class="col-xs-12">
                    <button id=""  class="btn btn-primary btn-block">
                        Actualizar Estado <i class="glyphicon glyphicon-saved"></i>
                    </button>
                </div>       
                <?php
            }
            ?>
        </form>
</div>


