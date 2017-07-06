<div id="" class="col-xs-13">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">INFORMACIÓN DEL PRODUCTO</h3>
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
                    <td><strong>Código Producto</strong></td>
                    <td><?php echo $getEdit->pro_id; ?></td>
                </tr>
                <tr>
                    <td><strong>Nombre</strong></td>
                    <td><?php echo $getEdit->pro_nombre; ?></td>
                </tr>
                <tr>
                    <td><strong>Descripción</strong></td>
                    <td><?php echo $getEdit->pro_descripcion; ?></td>  
                </tr> 
                <tr>
                    <td><strong>Valor Estimado</strong></td>
                    <td><?php echo $getEdit->pro_valor_estimado; ?></td>
                </tr>
                <tr>
                    <td><strong>Ruta Imagen</strong></td>
                    <td><?php echo $getEdit->pro_imagen; ?></td>
                </tr>
                <tr>
                    <td><strong>Cantidad</strong></td>
                    <td><?php echo $getEdit->pro_cantidad; ?></td>  
                </tr>     
                <tr>
                    <td><strong>Fecha de Actualización</strong></td>
                    <td><?php echo $getEdit->pro_fecha_actualizacion; ?></td>
                </tr>
                <tr>
                    <td><strong>Código Empresa</strong></td>
                    <td><?php echo $getEdit->fk_emp_cod; ?></td>
                </tr>
                <tr>
                    <td><strong>Nombre Empresa</strong></td>
                    <td><?php echo $getEdit->emp_nombre; ?></td>  
                </tr>
                <tr>
                    <td><strong>Código Categoría</strong></td>
                    <td><?php echo $getEdit->fk_cat_id ?></td>
                </tr>
                <tr>
                    <td><strong>Nombre Categoría</strong></td>
                    <td><?php echo $getEdit->cat_nombre; ?></td>
                </tr>
                <tr class="">
                    <td colspan="2">
                        <a href = "<?php echo "index.php?controller=producto&action=index"; ?>" class="btn btn-info btn-block">
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