<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">INFORMACIÓN DEL USUARIO</h3>
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
                    <td><strong>Código Usuario</strong></td>
                    <td><?php echo $getEdit->usu_cod; ?></td>
                </tr>
                <tr>
                    <td><strong>Nombre</strong></td>
                    <td><?php echo $getEdit->usu_nombre; ?></td>
                </tr>
                <tr>
                    <td><strong>Apellidos</strong></td>
                    <td><?php echo $getEdit->usu_apellidos; ?></td>  
                </tr> 
                <tr>
                    <td><strong>Teléfono</strong></td>
                    <td><?php echo $getEdit->usu_telefono; ?></td>
                </tr>
                <tr>
                    <td><strong>Correo</strong></td>
                    <td><?php echo $getEdit->usu_correo; ?></td>
                </tr>
                <tr>
                    <td><strong>Fecha de Nacimiento</strong></td>
                    <td><?php echo $getEdit->usu_fecha_nacimiento; ?></td>  
                </tr>     
                <tr>
                    <td><strong>Género</strong></td>
                    <td>
                        
                        <?php 
                        if($getEdit->usu_genero=='M'){
                            echo 'Masculino';
                        }else{
                            echo 'Femenino';
                        }
                        ?></td>
                </tr>
                <tr>
                    <td><strong>Saldo Total</strong></td>
                    <td><?php echo $getEdit->usu_saldo_total; ?></td>
                </tr>
                <tr>
                    <td><strong>Foto de Perfil</strong></td>
                    <td><?php echo $getEdit->usu_foto_perfil; ?></td>  
                </tr>
                <tr>
                    <td><strong>Alias</strong></td>
                    <td><?php echo $getEdit->usu_alias; ?></td>
                </tr>
                <tr>
                    <td><strong>Contraseña</strong></td>
                    <td><?php echo $getEdit->usu_contrasena; ?></td>
                </tr>
                <tr>
                    <td><strong>Código Ciudad</strong></td>
                    <td><?php echo $getEdit->fk_ciu_id; ?></td>  
                </tr>   
                <tr>
                    <td><strong>Nombre Ciudad</strong></td>
                    <td><?php echo $getEdit->ciu_nombre; ?></td>  
                </tr> 
                <tr class="">
                    <td colspan="2">
                        <a href = "<?php echo "index.php?controller=usuarios&action=index"; ?>" class="btn btn-info btn-block">
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