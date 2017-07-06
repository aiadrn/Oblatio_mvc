<div id="" class="col-xs-12">
    <h1 class="textoCentrado FuenteTitulo tamanioFuente2">NUEVA EMPRESA USUARIO</h1>
    <hr/>
</div>
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <form action = "<?php echo "index.php?controller=empresaUsuario&action=crear"; ?>" method="post">
        <div id="" class="col-xs-12 form-group">
            <label>Empresa</label>  
            <select name="empresaCodigo" class="form-control">
                <?php
                foreach ($getEdit2 as $item) {
                    ?>
                    <option value="<?php echo $item->emp_cod; ?>"><?php echo $item->emp_nombre; ?></option>
                    <?php
                }
                ?>
            </select>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Usuario</label>  
            <select name="usuarioCodigo" class="form-control">
                <?php
                foreach ($getEdit as $item) {
                    ?>
                    <option value="<?php echo $item->usu_cod; ?>"><?php echo $item->usu_nombre; ?></option>
                    <?php
                }
                ?>
            </select>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Estrellas</label>  
            <input type = "text" name="estrellas" class="form-control"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Comentario</label>  
            <input type = "text" name="comentario" class="form-control"/>
        </div> 
        
        <div id="" class="col-xs-12">
            <button id="btnCrear"  class="btn btn-success btn-block">
                Guardar <i class="glyphicon glyphicon-cd"></i>
            </button>
        </div>    
    </form>
</div>