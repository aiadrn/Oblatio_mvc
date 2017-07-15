<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">INFORMACIÓN DEL ADMINISTRADOR</h3>
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
                    <td><strong>ID Administrador</strong></td>
                    <td><?php echo $getEdit->adm_id; ?></td>
                </tr>
                <tr>
                    <td><strong>Nombre</strong></td>
                    <td><?php echo $getEdit->adm_nombre; ?></td>
                </tr>
                <tr>
                    <td><strong>Apellidos</strong></td>
                    <td><?php echo $getEdit->adm_apellidos; ?></td>  
                </tr>
                <tr>
                    <td><strong>Teléfono</strong></td>  
                    <td><?php echo $getEdit->adm_telefono; ?></td>
                </tr>
                <tr>
                    <td><strong>Correo</strong></td>  
                    <td><?php echo $getEdit->adm_correo; ?></td>
                </tr>
                <tr>
                    <td><strong>Alias</strong></td>  
                    <td><?php echo $getEdit->adm_alias; ?></td>   
                </tr>
                <tr>
                    <td><strong>Foto de Perfil</strong></td> 
                    <td><?php echo $getEdit->adm_foto_perfil; ?></td>
                </tr>
                <tr>
                    <td><strong>Tipo de Administrador</strong></td> 
                    <?php 
                        if($getEdit->adm_tipo_administrador==1){
                            $tipoAdmin="Super Administrador";
                        } else {
                            $tipoAdmin="Administrador Básico";
                        }
                    ?>
                    <td><?php echo $tipoAdmin; ?></td>
                </tr>
                <tr class="">
                    <td colspan="2">
                        <a href = "<?php echo "index.php?controller=administrador&action=index"; ?>" class="btn btn-info btn-block">
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