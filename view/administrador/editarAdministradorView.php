<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">ACTUALIZAR ADMINISTRADOR</h3>
    <hr/>
</div>
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <form action = "<?php echo "index.php?controller=administrador&action=editar"; ?>" method="post">
        <div id="" class="col-xs-12 form-group">
            <label>Código</label>  
            <input type = "text" name="" disabled="true" class="form-control" value="<?php echo $getEdit->adm_id ?>"/>
            <input type = "text" name="codigo" class="hidden" value="<?php echo $getEdit->adm_id ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Nombre</label>  
            <input type = "text" name="nombre" class="form-control" value="<?php echo $getEdit->adm_nombre ?>"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Apellidos</label>  
            <input type = "text" name="apellidos" class="form-control" value="<?php echo $getEdit->adm_apellidos ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Teléfono</label>  
            <input type = "text" name="telefono" class="form-control" value="<?php echo $getEdit->adm_telefono ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Correo</label>  
            <input type = "text" name="correo" class="form-control" value="<?php echo $getEdit->adm_correo ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Alias</label>  
            <input type = "text" name="alias" class="form-control" value="<?php echo $getEdit->adm_alias ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Contraseña</label>  
            <input type = "password" name="contrasena" class="form-control" value="<?php echo $getEdit->adm_contrasena ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Foto de Perfil</label>  
            <input type = "text" name="foto" class="form-control" value="<?php echo $getEdit->adm_foto_perfil ?>"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Tipo de Administrador</label>  
            <input type = "text" name="tipoAdministrador" class="form-control" value="<?php echo $getEdit->adm_tipo_administrador ?>"/>
        </div>
        <div id="" class="col-xs-12">
            <button id=""  class="btn btn-primary btn-block">
                Actualizar <i class="glyphicon glyphicon-saved"></i>
            </button>
        </div>    
    </form>
</div>


