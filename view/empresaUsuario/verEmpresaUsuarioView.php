

<div id="" class="col-xs-13">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">EMPRESA USUARIO</h3>
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
                    <td><strong>Empresa</strong></td>
                    <td><?php echo $getEdit->emp_nombre; ?></td>
                </tr>
                <tr>
                    <td><strong>Código Usuario</strong></td>
                    <td><?php echo $getEdit->usu_cod; ?></td>  
                </tr> 
                <tr>
                    <td><strong>Nombre Usuario</strong></td>
                    <td><?php echo $getEdit->usu_nombre; ?></td>
                </tr>
                <tr>
                    <td><strong>Fecha Encuesta</strong></td>
                    <td><?php echo $getEdit->fecha; ?></td>
                </tr>
                <tr>
                    <td><strong>Estrellas</strong></td>
                    <td><?php echo $getEdit->estrellas; ?></td>  
                </tr>     
                <tr>
                    <td><strong>Comentario</strong></td>
                    <td><?php echo $getEdit->comentario; ?></td>
                </tr>
                
                <tr class="">
                    <td colspan="2">
                        <a href = "<?php echo "index.php?controller=empresaUsuario&action=index"; ?>" class="btn btn-info btn-block">
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