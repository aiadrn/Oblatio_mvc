

<div id="" class="col-xs-13">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">INFORMACIÓN DE LA EMPRESA</h3>
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
                    <td><strong>Código Empresa</strong></td>
                    <td><?php echo $getEdit->emp_cod; ?></td>
                </tr>
                <tr>
                    <td><strong>NIT</strong></td>
                    <td><?php echo $getEdit->emp_nit; ?></td>
                </tr>
                <tr>
                    <td><strong>nombre</strong></td>
                    <td><?php echo $getEdit->emp_nombre; ?></td>  
                </tr> 
                 <tr>
                    <td><strong>Dirección</strong></td>
                    <td><?php echo $getEdit->emp_direccion; ?></td>  
                </tr> 
                <tr>
                    <td><strong>Teléfono</strong></td>
                    <td><?php echo $getEdit->emp_telefono; ?></td>
                </tr>
                <tr>
                    <td><strong>Extensión</strong></td>
                    <td><?php echo $getEdit->emp_extension; ?></td>
                </tr>
                <tr>
                    <td><strong>Correo</strong></td>
                    <td><?php echo $getEdit->emp_correo; ?></td>  
                </tr>     
                <tr>
                    <td><strong>Usuario</strong></td>
                    <td><?php echo $getEdit->emp_usuario; ?></td>
                </tr>
                <tr>
                    <td><strong>Estado de vinculación</strong></td>
                    <?php 
                    $estado="Inactiva";
                    if($getEdit->emp_estado == 1){
                        $estado="Activa";
                    } ?>
                    <td><?php echo $estado; ?></td>  
                </tr>
                <tr>
                    <td><strong>Logo Empresa</strong></td>
                    <td><?php echo $getEdit->emp_imagen; ?></td>
                </tr>
                <tr>
                    <td><strong>Fecha de Vinculación</strong></td>
                    <td><?php echo $getEdit->emp_fecha_vinculacion; ?></td>
                </tr>
                <tr>
                    <td><strong>Fecha de Actualización de Estado</strong></td>
                    <td><?php echo $getEdit->emp_fecha_aprobacion; ?></td>
                </tr>
                <tr>
                    <td><strong>Ciudad</strong></td>
                    <td><?php echo $getEdit->ciu_nombre; ?></td>
                </tr>
                <tr>
                    <td><strong>Administrador</strong></td>
                    <td><?php echo $getEdit-> fk_adm_id; ?></td>
                </tr>
                <tr class="">
                    <td colspan="2">
                        <a href = "<?php echo "index.php?controller=empresa&action=index"; ?>" class="btn btn-info btn-block">
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