<div id="" class="col-xs-12">
    <h1 class="textoCentrado FuenteTitulo tamanioFuente2">NUEVA EMPRESA</h1>
    <hr/>
</div>
    <form action = "<?php echo "index.php?controller=empresa&action=crear"; ?>" method="post">
        <div id="" class="col-xs-12 form-group">
            <label>NIT Empresa</label>  
            <input type = "text" name="codigo" class="form-control"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Nombre</label> 
            <input type = "text" name="nombre" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Dirección</label>  
            <input type = "text" name="direccion" class="form-control"/>
        </div>
        
        <div id="" class="col-xs-12 form-group">
            <label>Teléfono</label>  
            <input type = "text" name="telefono" class="form-control"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Extensión</label>  
            <input type = "text" name="extension" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Correo</label>  
            <input type = "text" name="correo" class="form-control"/>
        </div>
        
        <div id="" class="col-xs-12 form-group">
            <label>Usuario</label>  
            <input type = "text" name="usuario" class="form-control"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Contraseña</label>  
            <input type = "text" name="contrasena" class="form-control"/>
        </div>   
        <div id="" class="col-xs-12 form-group">
            <label>Imagen</label>  
            <input type = "text" name="imagen" class="form-control"/>
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

