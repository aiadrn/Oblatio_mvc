<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">LISTA DE TIPO DE PAGOS</h3>
    <hr/>
</div>
<div id="" class="col-xs-12">
    <div  class="centrarBusqueda">
        <input type = "text" name="busqueda" class="form-control campoBusqueda"/>
        <a href = "<?php echo "index.php?controller=tipoPago&action=nuevoRegistro"; ?>" class="btn btn-success botonCrear">
            Nuevo Tipo Pago
            <i class="glyphicon glyphicon-cd"></i>
        </a> 
    </div>
</div>
<div class="col-xs-12">
    <table id="tabla" class="centrarTabla">
        <thead> 
            <tr>
                <th class="textoCentrado">Código</th>
                <th class="textoCentrado">Tipo Medio Pago</th>                              
                <th class="textoCentrado">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($allusers)) {
                foreach ($allusers as $user) {
                    ?>

                    <tr>
                        <td><?php echo $user->tip_cod; ?></td>
                        <td><?php echo $user->tip_medio_pago; ?></td>                              

                        <td>

                            <a href = "<?php echo "index.php?controller=tipoPago&action=modificar"; ?>&codigo=<?php echo $user->tip_cod; ?>"  class="btn btn-primary anchoBoton"> 
                                Editar
                                <i class="glyphicon glyphicon-pencil"></i>
                            </a>                        

                            <a href = "<?php echo "index.php?controller=tipoPago&action=borrar"; ?>&codigo=<?php echo $user->tip_cod; ?>" class="btn btn-danger anchoBoton">
                                Borrar
                                <i class="glyphicon glyphicon-remove"></i>
                            </a>
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
