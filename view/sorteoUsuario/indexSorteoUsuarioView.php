<div id="" class="col-xs-12">
    <h3 class="textoCentrado FuenteTitulo tamanioFuente2">LISTA SORTEO USUARIO</h3>
    <hr/>
</div>
<div id="" class="col-xs-12">

    <div  class="centrarBusqueda"> 
        <input type = "text" name="busqueda" class="form-control campoBusqueda"/>
        <a href = "<?php echo "index.php?controller=sorteoUsuario&action=nuevoRegistro"; ?>" class="btn btn-success botonCrear">
            Nuevo Sorteo Usuario
            <i class="glyphicon glyphicon-cd"></i>
        </a> 
    </div>  
</div>
<div class="col-xs-12">
    <table id="tabla" class="centrarTabla">        
        <thead> 
            <tr>                
                <th class="textoCentrado">Código Sorteo</th> 
                <th class="textoCentrado">Código Usuario</th>
                <th class="textoCentrado">Nombre Usuario</th>
                <th class="textoCentrado">Comentario Usuario Ganador</th>
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
                        <td><?php echo $user->usu_cod; ?></td>
                        <td><?php echo $user->usu_nombre; ?></td>
                        <td><?php echo $user->contenido_observacion; ?></td>  
                        <td>
                            <?php
                            if (isset($_SESSION['adm_tipo_administrador']) && $_SESSION['adm_tipo_administrador'] == 1) {
                                ?>
                                <a href = "<?php echo "index.php?controller=sorteoUsuario&action=modificar"; ?>&codigoUsu=<?php echo $user->usu_cod; ?>&codigoSor=<?php echo $user->sor_cod; ?>"  class="btn btn-warning anchoBoton"> 
                                    Editar
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>                        
                                <a href = "<?php echo "index.php?controller=sorteoUsuario&action=borrar"; ?>&codigoUsu=<?php echo $user->usu_cod; ?>&codigoSor=<?php echo $user->sor_cod; ?>" class="btn btn-danger anchoBoton">
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