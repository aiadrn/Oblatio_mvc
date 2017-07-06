<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">LISTA DE SORTEOS</h3>
    <hr/>
</div>


<div id="" class="col-xs-12">
    <?php
    if ((isset($_SESSION['adm_tipo_administrador']) && $_SESSION['adm_tipo_administrador'] == 1) || isset($_SESSION['emp_cod'])) {
        ?>
        <div  class="centrarBusqueda">
            <input type = "text" name="busqueda" class="form-control campoBusqueda"/>
            <a href = "<?php echo "index.php?controller=Sorteo&action=nuevoRegistro"; ?>" class="btn btn-success botonCrear">
                Nuevo Sorteo
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
<div class="anchoTotal">
    <table id="tabla" class="centrarTabla">         
        <thead> 
            <tr>
                <th class="textoCentrado">Código</th>
                <th class="textoCentrado">Fecha Inicio</th>
                <th class="textoCentrado">Opciones</th> 
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($allusers)) {
                foreach ($allusers as $user) {
                    ?>
                    <tr>
                        <td><?php echo $user->sor_cod; ?></td>
                        <td><?php echo $user->sor_fecha_inicio; ?></td>                      
                        <td>
                            <a href = "<?php echo "index.php?controller=Sorteo&action=ver"; ?>&codigo=<?php echo $user->sor_cod; ?>"  class="btn btn-primary anchoBoton"> 
                                Ver
                                <i class="glyphicon glyphicon-search"></i>
                            </a>  
                            <?php
                            if ((isset($_SESSION['adm_tipo_administrador']) && $_SESSION['adm_tipo_administrador'] == 1) || isset($_SESSION['emp_cod'])) {
                                ?>
                                <a href = "<?php echo "index.php?controller=Sorteo&action=modificar"; ?>&codigo=<?php echo $user->sor_cod; ?>"  class="btn btn-warning anchoBoton"> 
                                    Editar
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>                        

                                <a href = "<?php echo "index.php?controller=Sorteo&action=borrar"; ?>&codigo=<?php echo $user->sor_cod; ?>" class="btn btn-danger anchoBoton">
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