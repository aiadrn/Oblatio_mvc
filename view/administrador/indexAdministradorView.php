<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">LISTA DE ADMINISTRADORES</h3>
    <hr/>
</div>
<div id="" class="col-xs-12">
    <div  class="centrarBusqueda">
        <input type = "text" name="busqueda" class="form-control campoBusqueda"/>
        <a href = "<?php echo "index.php?controller=administrador&action=nuevoRegistro"; ?>" class="btn btn-success botonCrear">
            Nuevo Administrador
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
                <th class="textoCentrado">Apellidos</th>
                <th class="textoCentrado">Alias</th>
                <th class="textoCentrado">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($allusers)) {
                foreach ($allusers as $user) {
                    ?>

                    <tr>
                        <td><?php echo $user->adm_id; ?></td>
                        <td><?php echo $user->adm_nombre; ?></td>
                        <td><?php echo $user->adm_apellidos; ?></td> 
                        <td><?php echo $user->adm_alias; ?></td>   
                        <td>
                            <a href = "<?php echo "index.php?controller=administrador&action=ver"; ?>&codigo=<?php echo $user->adm_id; ?>"  class="btn btn-primary anchoBoton"> 
                                Ver
                                <i class="glyphicon glyphicon-search"></i>
                            </a>
                            <a href = "<?php echo "index.php?controller=administrador&action=modificar"; ?>&codigo=<?php echo $user->adm_id; ?>"  class="btn btn-warning anchoBoton"> 
                                Editar
                                <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href = "<?php echo "index.php?controller=administrador&action=borrar"; ?>&codigo=<?php echo $user->adm_id; ?>" class="btn btn-danger anchoBoton">
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

