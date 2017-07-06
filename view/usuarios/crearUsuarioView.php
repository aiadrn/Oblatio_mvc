
<div id="" class="col-xs-12">
    <h1 class="textoCentrado FuenteTitulo tamanioFuente2">NUEVO USUARIO</h1>
    <hr/>
</div>
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <form enctype="multipart/form-data" action = "<?php echo "index.php?controller=usuarios&action=crear"; ?>" method="post">
        <div id="" class="col-xs-12 form-group">
            <label>Código Usuario</label>  
            <input type = "text" name="codigo" class="form-control"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Nombre</label>  
            <input type = "text" name="nombre" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Apellidos</label>  
            <input type = "text" name="apellidos" class="form-control"/>
        </div>

        <div id="" class="col-xs-12 form-group">
            <label>Telefono</label>  
            <input type = "tel" name="telefono" class="form-control"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Correo</label>  
            <input type = "email" name="correo" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Fecha de Nacimiento</label>  
            <input type = "date" name="fecha" class="form-control"/>
        </div>

        <div id="" class="col-xs-12 form-group">
            <label>Género</label>  <br>
            <input type="radio" name="genero" value="M"> Masculino<br>
            <input type="radio" name="genero" value="F"> Femenino<br> 
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Foto Perfil</label>  
            <input type="hidden" name=" MAX_FILE_SIZE" value="30000" />
            <input name="uploadedfile"  type="file" class="btn"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Alias</label>  
            <input type = "text" name="alias" class="form-control"/>
        </div>

        <div id="" class="col-xs-12 form-group">
            <label>Contraseña</label>  
            <input type = "password" name="contrasena" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Ciudad</label>  
            <select name="ciudad" class="form-control">
                <?php
                foreach ($getEdit as $item) {
                    ?>
                    <option value="<?php echo $item->ciu_id; ?>"><?php echo $item->ciu_nombre; ?></option>
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

