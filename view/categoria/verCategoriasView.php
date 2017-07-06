<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">INFORMACIÓN DE LA CATEGORÍA</h3>
    <hr/>
</div>
<div id="" class="col-xs-12">
    <table id="tabla" class="centrarTabla">
        <thead>
            <tr>
                <th class="textoCentrado">CAMPOS</th>
                <th class="textoCentrado">VALORES</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($getEdit)) {
                ?>
                <tr>
                    <td><strong>ID Categoría</strong></td>
                    <td><?php echo $getEdit->cat_id; ?></td>
                </tr>
                <tr>
                    <td><strong>Nombre</strong></td>
                    <td><?php echo $getEdit->cat_nombre; ?></td>
                </tr>
                <tr>
                    <td><strong>Descripción</strong></td>
                    <td><?php echo $getEdit->cat_descripcion; ?></td>  
                </tr>               
                <tr class="">
                    <td colspan="2">
                        <a href = "<?php echo "index.php?controller=categoria&action=index"; ?>" class="btn btn-info btn-block">
                            <i class="glyphicon glyphicon-arrow-left"></i>
                            Regresar
                        </a> 
                    </td>
                </tr>
                <?php
            }
            ?>

        </tbody>
    </table>                
</div>