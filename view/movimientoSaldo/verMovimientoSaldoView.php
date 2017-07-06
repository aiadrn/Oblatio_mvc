

<div id="" class="col-xs-13">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">MOVIMIENTO SALDO</h3>
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
                    <td><strong>Código Movimiento</strong></td>
                    <td><?php echo $getEdit->mov_id; ?></td>
                </tr>
                <tr>
                    <td><strong>Tipo Movimiento</strong></td>
                    <td><?php echo $getEdit->mov_tipo; ?></td>
                </tr>
                <tr>
                    <td><strong>Fecha Movimiento</strong></td>
                    <td><?php echo $getEdit->mov_fecha; ?></td>  
                </tr> 
                <tr>
                    <td><strong>Valor Movimiento</strong></td>
                    <td><?php echo $getEdit->mov_valor; ?></td>
                </tr>
                <tr>
                    <td><strong>Comprobante Movimiento </strong></td>
                    <td><?php echo $getEdit->mov_comprobante; ?></td>
                </tr>
                <tr>
                    <td><strong>Pista Sorteo Movimiento</strong></td>
                    <td><?php echo $getEdit->mov_pista_sorteo; ?></td>  
                </tr>     
                <tr>
                    <td><strong>Codigo Usuario</strong></td>
                    <td><?php echo $getEdit->fk_usu_cod; ?></td>
                </tr>
                <tr>
                    <td><strong>Tipo Codigo </strong></td>
                    <td><?php echo $getEdit->fk_tip_cod; ?></td>
                </tr>
                <tr>
                    <td><strong>Codigo Sorteo</strong></td>
                    <td><?php echo $getEdit->fk_sor_cod; ?></td>
                </tr>
                <tr class="">
                    <td colspan="2">
                        <a href = "<?php echo "index.php?controller=movimientoSaldo&action=index"; ?>" class="btn btn-info btn-block">
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