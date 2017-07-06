<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">LISTA DE CATEGORÍAS<h3/>
        <hr/>
</div>
<div id="" class="col-xs-12">
    <div class="centrarBusqueda "> 
        <input type = "text" name="busqueda" class="form-control campoBusqueda"/>
        <a href = "<?php echo "index.php?controller=categoria&action=nuevoRegistro"; ?>" class="btn btn-success botonCrear">
            Nueva Categoría
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
                <th class="textoCentrado">Opciones</th>  
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($allusers)) {
                foreach ($allusers as $user) {
                    ?>

                    <tr>
                        <td><?php echo $user->cat_id; ?></td>
                        <td><?php echo $user->cat_nombre; ?></td>                              

                        <td>
                            <a href = "<?php echo "index.php?controller=categoria&action=ver"; ?>&codigo=<?php echo $user->cat_id; ?>"  class="btn btn-primary anchoBoton"> 
                                ver
                                <i class="glyphicon glyphicon-search"></i>
                            </a>  
                            <?php
                            if (isset($_SESSION['adm_tipo_administrador'])) {
                                ?>
                                <a href = "<?php echo "index.php?controller=categoria&action=modificar"; ?>&codigo=<?php echo $user->cat_id; ?>"  class="btn btn-warning anchoBoton"> 
                                    Editar
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>                        

                                <a href = "<?php echo "index.php?controller=categoria&action=borrar"; ?>&codigo=<?php echo $user->cat_id; ?>" class="btn btn-danger anchoBoton">
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
