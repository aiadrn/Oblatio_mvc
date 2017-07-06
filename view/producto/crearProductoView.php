     
<div id="" class="col-xs-12">
    <h1 class="textoCentrado FuenteTitulo tamanioFuente2">NUEVO PRODUCTO</h1>
    <hr/>
</div>
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <form action = "<?php echo "index.php?controller=Producto&action=crear"; ?>" method="post">
        <div id="" class="col-xs-12 form-group">
            <label>Código Producto</label>  
            <input type = "text" name="codigo" class="form-control"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Nombre</label>  
            <input type = "text" name="nombre" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Descripcion</label>  
            <input type = "text" name="descripcion" class="form-control"/>
        </div>

        <div id="" class="col-xs-12 form-group">
            <label>Valor estimado</label>  
            <input type = "text" name="valorEstimado" class="form-control"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Foto Producto</label>  
            <input type = "text" name="foto" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Cantidad</label>  
            <input type = "text" name="cantidad" class="form-control"/>
        </div>

        <div id="" class="col-xs-12 form-group">
            <label>Fecha actualizacion</label>  
            <input type = "text" name="fecha" class="form-control"/>
        </div> 

        <?php
        if (!isset($_SESSION['emp_cod'])) {
            ?>
            <div id="" class="col-xs-12 form-group">
                <label>Empresa</label> 
                <select name="Empresa" class="form-control">
                    <?php
                    foreach ($getEdit2 as $item) {
                        ?>
                        <option value="<?php echo $item->emp_cod; ?>"><?php echo $item->emp_nombre; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <?php
        }
        ?>   

        <?php
        if (isset($_SESSION['emp_cod'])) {
            ?>
            <input type = "text" name="empresa" class="hidden" value="<?php echo $_SESSION['emp_cod'] ?>"/>
            <?php
        }
        ?>
        <div id="" class="col-xs-12 form-group">
            <label>Categoria</label>  
            <select name="categoria" class="form-control">
                <?php
                foreach ($getEdit as $item) {
                    ?>
                    <option value="<?php echo $item->cat_id; ?>"><?php echo $item->cat_nombre; ?></option>
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

