<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">LISTA CATEGORÍA USUARIOS</h3>
    <hr/>
</div>
<div id="" class="col-xs-12">
    <?php
    if ((isset($_SESSION['adm_tipo_administrador']) && $_SESSION['adm_tipo_administrador'] == 1) || isset($_SESSION['usu_cod'])) {
        ?>
        <div  class="centrarBusqueda">
            <input type = "text" name="busqueda" class="form-control campoBusqueda"/>
            <a href = "<?php echo "index.php?controller=categoriaUsuario&action=nuevoRegistro"; ?>" class="btn btn-success botonCrear">
                Nueva Categoría Usuario
                <i class="glyphicon glyphicon-cd"></i>
            </a> 
        </div>
        <?php
    }
    ?>

    <?php
    if (isset($_SESSION['adm_tipo_administrador']) && $_SESSION['adm_tipo_administrador'] == 0) {
        ?>
        <div  class="centrarBusqueda">
            <input type = "text" name="busqueda" class="form-control campoBusqueda anchoTotal"/> 
        </div>
        <?php
    }
    ?>
</div>
<div class="col-xs-12">
    <table id="tabla" class="centrarTabla">        
        <thead> 
            <tr>
                <th class="textoCentrado">Código Usuario</th>
                <th class="textoCentrado">Nombre Usuario</th> 
                <th class="textoCentrado">ID Categoría </th>
                <th class="textoCentrado">Nombre Categoría</th> 
                <?php
                if ((isset($_SESSION['adm_tipo_administrador']) && $_SESSION['adm_tipo_administrador'] == 1) || isset($_SESSION['usu_cod'])) {
                    ?>
                    <th class="textoCentrado">Opciones</th>
                    <?php
                }
                ?>
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
                        <td><?php echo $user->cat_id; ?></td>
                        <td><?php echo $user->cat_nombre; ?></td>    


                        <?php
                        if ((isset($_SESSION['adm_tipo_administrador']) && $_SESSION['adm_tipo_administrador'] == 1) || isset($_SESSION['usu_cod'])) {
                            ?>
                            <td>
                                <a href = "<?php echo "index.php?controller=categoriaUsuario&action=borrar"; ?>&codigoUsu=<?php echo $user->usu_cod; ?>&codigoCat=<?php echo $user->cat_id; ?>" class="btn btn-danger center-block anchoBoton">
                                    Borrar
                                    <i class="glyphicon glyphicon-remove"></i>
                                </a>
                            </td>

                            <?php
                        }
                        ?>


                    </tr>

                    <?php
                }
            }
            ?>

        </tbody>
    </table> 

</div>