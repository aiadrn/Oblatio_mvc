<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">LISTA DE CIUDADES</h3>
    <hr/>
</div>
<div id="" class="col-xs-12">
    <div class="centrarBusqueda ">
        <input type = "text" name="busqueda" class="form-control campoBusqueda"/>
        <a href = "<?php echo "index.php?controller=ciudad&action=nuevoRegistro"; ?>" class="btn btn-success botonCrear">
            Nueva Ciudad
            <i class="glyphicon glyphicon-cd"></i>
        </a> 
    </div>
</div>
<div class="col-xs-12">
    <table id="tabla" class="centrarTabla">        
        <thead> 
            <tr>
                <th class="textoCentrado">ID</th>
                <th class="textoCentrado">Nombre</th> 
                <th class="textoCentrado">Departamento</th> 
                <th class="textoCentrado">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($allusers)) {
                foreach ($allusers as $user) {
                    ?>

                    <tr>
                        <td><?php echo $user->ciu_id; ?></td>
                        <td><?php echo $user->ciu_nombre; ?></td>  
                        <td><?php echo $user->dep_nombre; ?></td> 
                        <td>

                            <a href = "<?php echo "index.php?controller=ciudad&action=modificar"; ?>&codigo=<?php echo $user->ciu_id; ?>"  class="btn btn-primary anchoBoton"> 
                                Editar
                                <i class="glyphicon glyphicon-pencil"></i>
                            </a>                        

                            <a href = "<?php echo "index.php?controller=ciudad&action=borrar"; ?>&codigo=<?php echo $user->ciu_id; ?>" class="btn btn-danger anchoBoton">
                                Borrar
                                <i class="glyphicon glyphicon-remove"></i>
                            </a>
                        </td>

                    </tr>

                    <?php
                }
            }
            ?>

        </tbody>
    </table> 

</div>
