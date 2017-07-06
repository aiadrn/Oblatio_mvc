<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">LISTA DE EMPRESAS</h3>
    <hr/>
</div>
<div id="" class="col-xs-12">
    <div  class="centrarBusqueda">
        <?php
        if (isset($_SESSION['adm_tipo_administrador']) && $_SESSION['adm_tipo_administrador'] == 1) {
            ?>

            <input type = "text" name="busqueda" class="form-control campoBusqueda"/>
            <a href = "<?php echo "index.php?controller=empresa&action=nuevoRegistro"; ?>" class="btn btn-success botonCrear">
                Nueva Empresa
                <i class="glyphicon glyphicon-cd"></i>
            </a>                     
            <?php
        }
        ?>
        <?php
        if ((isset($_SESSION['adm_tipo_administrador']) && $_SESSION['adm_tipo_administrador'] == 0)|| !isset($_SESSION['adm_tipo_administrador'])||!isset($_SESSION['emp_cod'])) {
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
                <th class="textoCentrado">NIT</th>
                <th class="textoCentrado">Nombre</th>
                <th class="textoCentrado">Usuario</th>
                <th class="textoCentrado">Estado</th> 
                <th class="textoCentrado">Opciones</th> 
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($allusers)) {
                foreach ($allusers as $user) {
                    ?>

                    <tr>
                        <td><?php echo $user->emp_nit; ?></td>
                        <td><?php echo $user->emp_nombre; ?></td>  
                        <td><?php echo $user->emp_usuario; ?></td>   
                        <?php
                        if ($user->emp_estado == 1) {
                            $estado = "Activa";
                        } else {
                            $estado = "Inactiva";
                        }
                        ?>
                        <td><?php echo $estado ?></td>
                        <td class="opciones">

                            <a href = "<?php echo "index.php?controller=empresa&action=ver"; ?>&codigo=<?php echo $user->emp_cod; ?>"  class="btn btn-primary anchoBoton"> 
                                Ver
                                <i class="glyphicon glyphicon-search"></i>
                            </a>   
                            <?php
                            if (isset($_SESSION['adm_tipo_administrador']) && $_SESSION['adm_tipo_administrador'] == 1) {
                                ?>
                                <a href = "<?php echo "index.php?controller=empresa&action=modificar"; ?>&codigo=<?php echo $user->emp_cod; ?>"  class="btn btn-warning anchoBoton"> 
                                    Editar
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>                        

                                <a href = "<?php echo "index.php?controller=empresa&action=borrar"; ?>&codigo=<?php echo $user->emp_cod; ?>" class="btn btn-danger anchoBoton">
                                    Borrar
                                    <i class="glyphicon glyphicon-remove"></i>
                                </a>
                            </td>        
                            <?php
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['adm_tipo_administrador']) && $_SESSION['adm_tipo_administrador'] == 0) {
                            ?>
                    <a href = "<?php echo "index.php?controller=empresa&action=modificar"; ?>&codigo=<?php echo $user->emp_cod; ?>"  class="btn btn-warning anchoBoton"> 
                        Estado
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>  
                    <?php
                }
                ?>
                </td>
                </tr>

                <?php
            }
        }
        ?>
        </tbody>
    </table>
</div>
