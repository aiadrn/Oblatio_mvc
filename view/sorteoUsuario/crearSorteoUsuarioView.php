<div id="" class="col-xs-12">
    <h1 class="textoCentrado FuenteTitulo tamanioFuente2">NUEVO SORTEO USUARIO</h1>
    <hr/>
</div>
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <form action = "<?php echo "index.php?controller=sorteoUsuario&action=crear"; ?>" method="post">
        <div id="" class="col-xs-12 form-group">
            <label>Sorteo Código</label>  
            <select name="sorteoCodigo" class="form-control">
                <?php
                foreach ($getEdit2 as $item) {
                    ?>
                    <option value="<?php echo $item->sor_cod; ?>"><?php echo $item->sor_cod; ?></option>
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
            <label>Comentario Usuario Ganador</label>
            <input type = "text" name="comentario" class="form-control"/>
        </div>
               
        <div id="" class="col-xs-12">
            <button id="btnCrear"  class="btn btn-success btn-block">
                Guardar <i class="glyphicon glyphicon-cd"></i>
            </button>
        </div>    
    </form>
</div>