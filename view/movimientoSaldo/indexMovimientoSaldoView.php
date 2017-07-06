<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">LISTA DE MOVMIENTOS DE SALDOS</h3>
    <hr/>
</div>
<div id="" class="col-xs-12">
    <div  class="centrarBusqueda"> 
        <input type = "text" name="busqueda" class="form-control campoBusqueda"/>
        <a href = "<?php echo "index.php?controller=movimientoSaldo&action=nuevoRegistro"; ?>" class="btn btn-success botonCrear">
            Nuevo Movimiento Saldo
            <i class="glyphicon glyphicon-cd"></i>
        </a> 
    </div> 
</div>
<div class="col-xs-12">
    <table id="tabla" class="centrarTabla">        
        <thead> 
            <tr>                
                <th class="textoCentrado">Id Movimiento</th>
                <th class="textoCentrado">Tipo de Movimiento</th> 
                <th class="textoCentrado">Usuario</th>                  
                <th class="textoCentrado">Valor</th> 
                <th class="textoCentrado">Opciones</th> 
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($allusers)) {
                foreach ($allusers as $user) {
                    ?>
                    <tr>
                        <td><?php echo $user->mov_id; ?></td>                        
                        <td><?php echo $user->mov_tipo; ?></td>
                        <td><?php echo $user->fk_usu_cod; ?></td>  
                        <td><?php echo $user->mov_valor; ?></td>  
                        <td>
                            <a href = "<?php echo "index.php?controller=movimientoSaldo&action=ver"; ?>&codigo=<?php echo $user->mov_id; ?>"  class="btn btn-primary anchoBoton"> 
                                Ver
                                <i class="glyphicon glyphicon-search"></i>
                            </a>   
                            <?php
                            if (isset($_SESSION['adm_tipo_administrador']) && $_SESSION['adm_tipo_administrador'] == 1) {
                                ?>
                                <a href = "<?php echo "index.php?controller=movimientoSaldo&action=modificar"; ?>&codigo=<?php echo $user->mov_id; ?>"  class="btn btn-warning anchoBoton"> 
                                    Editar
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>                        
                                <a href = "<?php echo "index.php?controller=movimientoSaldo&action=borrar"; ?>&codigo=<?php echo $user->mov_id; ?>" class="btn btn-danger anchoBoton">
                                    Borrar
                                    <i class="glyphicon glyphicon-remove"></i>
                                </a>            
                                <?php
                            }
                            ?>
                        </td>

                        </td>
                    </tr>

                    <?php
                }
            }
            ?>

        </tbody>
    </table> 

</div>