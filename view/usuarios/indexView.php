<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">LISTA DE USUARIOS</h3>
    <hr/>
</div>
<div id="" class="col-xs-12">
    <div  class="centrarBusqueda">
        <?php
        if (isset($_SESSION['adm_tipo_administrador']) && $_SESSION['adm_tipo_administrador'] == 1) {
            ?>        
            <input type = "text" name="busqueda" class="form-control campoBusqueda"/> 
            <a href = "<?php echo "index.php?controller=usuarios&action=nuevoRegistro"; ?>" class="btn btn-success botonCrear">
                Nuevo Usuario
                <i class="glyphicon glyphicon-cd"></i>
            </a>        
            <?php
        }
        ?>
        <?php
        if (isset($_SESSION['adm_tipo_administrador']) && $_SESSION['adm_tipo_administrador'] == 0) {
            ?>        
            <input type = "text" name="busqueda" class="form-control campoBusqueda anchoTotal"/>       
            <?php
        }
        ?>
    </div>
</div>
<div class="col-xs-12">
    <table id="tabla" class="centrarTabla">        
        <thead> 
            <tr>
                <th class="textoCentrado">Código</th>
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
                        <td><?php echo $user->usu_cod; ?></td>
                        <td><?php echo $user->usu_nombre; ?></td>                              
                        <td><?php echo $user->usu_apellidos; ?></td>
                        <td><?php echo $user->usu_alias; ?></td>                        
                        <td>
                            <a href = "<?php echo "index.php?controller=usuarios&action=ver"; ?>&codigo=<?php echo $user->usu_cod; ?>"  class="btn btn-primary anchoBoton"> 
                                Ver
                                <i class="glyphicon glyphicon-search"></i>
                            </a> 
                            <?php
                            if ((isset($_SESSION['adm_tipo_administrador']) && $_SESSION['adm_tipo_administrador'] == 1) || isset($_SESSION['usu_cod'])) {
                                ?>
                                <a href = "<?php echo "index.php?controller=usuarios&action=modificar"; ?>&codigo=<?php echo $user->usu_cod; ?>"  class="btn btn-warning anchoBoton"> 
                                    Editar
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>                        

                                <a href = "<?php echo "index.php?controller=usuarios&action=borrar"; ?>&codigo=<?php echo $user->usu_cod; ?>" class="btn btn-danger anchoBoton">
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
