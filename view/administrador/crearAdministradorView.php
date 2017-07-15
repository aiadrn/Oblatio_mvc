<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">NUEVO ADMINISTRADOR</h3>
    <hr/>
</div>
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <form action = "<?php echo "index.php?controller=administrador&action=crear"; ?>" method="post">
        <div id="" class="col-xs-12 form-group">
            <label>Código</label>  
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
            <label>Teléfono</label>  
            <input type = "text" name="telefono" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Correo</label>  
            <input type = "text" name="correo" class="form-control"/>
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
            <label>Foto de Perfil</label>  
            <input type = "text" name="foto" class="form-control"/>
        </div>
        <div id="" class="col-xs-12">
            <button id="btnCrear"  class="btn btn-success btn-block">
                Guardar <i class="glyphicon glyphicon-cd"></i>
            </button>
        </div>    
    </form>
</div>
