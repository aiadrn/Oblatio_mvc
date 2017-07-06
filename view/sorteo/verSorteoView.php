<div id="" class="col-xs-13">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">INFORMACIÓN DEL SORTEO</h3>
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
                    <td><strong>Código del Sorteo</strong></td>
                    <td><?php echo $getEdit->sor_cod; ?></td>
                </tr>
                <tr>
                    <td><strong>Fecha de Inicio del Sorteo</strong></td>
                    <td><?php echo $getEdit->sor_fecha_inicio; ?></td>
                </tr>
                <tr>
                    <td><strong>Total de Tickets</strong></td>
                    <td><?php echo $getEdit->sor_cantidad_tickets; ?></td>  
                </tr> 
                <tr>
                    <td><strong>Precio del Producto según la empresa</strong></td>
                    <td><?php echo $getEdit->sor_precio_base; ?></td>
                </tr>
                <tr>
                    <td><strong>Precio del Sorteo según el Sistema</strong></td>
                    <td><?php echo $getEdit->sor_precio_sorteo; ?></td>
                </tr>
                <tr>
                    <td><strong>Precio el Ticket</strong></td>
                    <td><?php echo $getEdit->sor_precio_tic; ?></td>  
                </tr>     
                <tr>
                    <td><strong>Fecha de Finalización del Sorteo </strong></td>
                    <td><?php echo $getEdit->sor_fecha_fin; ?></td>
                </tr>
                <tr>
                    <td><strong>Fecha en que Reporta la <br/>Empresa la Entrega del Producto </strong></td>
                    <td><?php echo $getEdit->sor_fecha_confirmacion_empresa; ?></td>
                </tr>
                <tr>
                    <td><strong>Comentario de la Empresa</strong></td>
                    <td><?php echo $getEdit->sor_comentario_empresa; ?></td>  
                </tr>
                <tr>
                    <td><strong>Fecha en que Reporta el <br/>Usuario la Entrega del Producto</strong></td>
                    <td><?php echo $getEdit->sor_fecha_confirmacion_usuario ?></td>
                </tr>
                <tr>
                    <td><strong>Comentario del Usuario</strong></td>
                    <td><?php echo $getEdit->sor_comentario_usuario; ?></td>
                </tr>
                <tr>
                    <td><strong>Título que se Muestra en el Sorteo</strong></td>
                    <td><?php echo $getEdit->sor_titulo_sorteo; ?></td>
                </tr>
                <tr>
                    <td><strong>Producto</strong></td>
                    <td><?php echo $getEdit->fk_pro_id; ?></td>
                </tr>
                <tr>
                    <td><strong>Usuario Ganador</strong></td>
                    <td><?php echo $getEdit->fk_cod_usu; ?></td>
                </tr>
                <tr class="">
                    <td colspan="2">
                        <a href = "<?php echo "index.php?controller=sorteo&action=index"; ?>" class="btn btn-info btn-block">
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