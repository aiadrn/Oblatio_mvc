<html lang = "es" >
    <head>
        <meta charset="utf-8"/>
        <title>Oblatio Principal</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/cssPrincipal.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arvo|Chewy|Homenaje|Margarine|Montserrat+Alternates|Trochut" rel="stylesheet">
    </head>
    <body>
        <div id="principal" class="container-fluid">
            <div id="d1" class="row">
                <div id="d1__">
                    <div id="d1_1" class="marginTextoHeader">
                        <img class="logo" src="images/logo_oblatio.png" alt=""/>
                    </div>
                    <div id="d1_2" class="marginTextoHeader">
                        OBLATIO               
                    </div>
                </div>                
                <div id="d1_4" class=" menu">
                    <a id="aMenu" href="#" class="menu">
                        <ul id="ulMenu" class="menu">
                            <li id="li1" class="lineasLi menu"></li>
                            <li id="li2" class="lineasLi menu"></li>
                            <li id="li3" class="lineasLi menu"></li>
                        </ul>
                    </a>  
                </div>
                <div id="d1_3" class="">

                    <!--                    <div id="d1_3_2" class="">
                                            <a href = "#">                            
                                                Sesión Administrador
                                            </a>
                                        </div>
                                        <div id="d1_3_1" class="">
                                            <a href = "#">
                                                Sesión Empresa
                                            </a>
                                        </div>
                                        <div id="d1_3_4" class="">
                                            <a href = "#">
                                                Sesión Usuario
                                            </a>
                                        </div>-->
                    <div id="d1_3_2" class="">
                        <a href = "#">
                            Iniciar Sesión
                            <div class="contenedorCuentas">
                                <div class="contenedorCuentasImagen">
                                    <p class="imgCircular"></p>
                                </div>
                                <button class="btnSesionU btn btn-default">Usuario</button>
                                <button class="btnSesionE btn btn-default">Empresa</button>
                            </div>
                        </a>
                    </div>
                    <div id="d1_3_1" class="">
                        <a href = "<?php echo "index.php?controller=Info&action=index"; ?>">                            
                            Información
                        </a>                           
                    </div>
                </div>
            </div>
            <div id="d2" class="row">
                <div id="d2_1" class="">
                    <nav class="lato tamanioFuente1">
                        <a id="opcion2" target="_parent" href = "<?php echo "index.php?controller=Categoria&action=index"; ?>">                            
                            Categorias
                            <p class="circulo"></p>
                        </a>
                        <a id="opcion6" href = "<?php echo "index.php?controller=Empresa&action=index"; ?>">
                            Empresa
                            <p class="circulo"></p>                            
                        </a>
                        <a id="opcion7" href = "<?php echo "index.php?controller=EmpresaUsuario&action=index"; ?>">
                            Empresa Usuario
                            <p class="circulo"></p>
                        </a>
                        <a id="opcion8" href = "<?php echo "index.php?controller=Producto&action=index"; ?>">
                            Producto
                            <p class="circulo"></p>
                        </a>
                        <a id="opcion9" href = "<?php echo "index.php?controller=TipoPago&action=index"; ?>">
                            Tipo-Pago
                            <p class="circulo"></p>
                        </a>
                    </nav>
                </div>
                <div id="d2_2" class="col-xs-12 col-md-12 main ">
                    <?php require 'view/' . $vista . '.php'; ?>
                </div>
            </div>
        </div>  

        <div id="loginU" class="hidden col-xs-12 col-md-4  well col-md-offset-4">
            <?php if (isset($message)) {
                ?>
                <div class="row">
                    <div id="alert" class="col-xs-12">
                        <div class="alert alert-danger">
                            <?php echo (isset($message) && $message != "") ? $message : ""; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="row">
                <div id="" class="col-xs-12 form-group">
                    <label>Ingrese Alias o Correo</label>  
                    <input type = "text" name="correo" class="form-control"/>
                </div> 
            </div>
            <div class="row">
                <div id="" class="col-xs-12 form-group">
                    <label>Ingrese Contraseña</label>
                    <input type = "password" name="contrasenna" class="form-control"/>
                </div>                    
            </div>
            <div class="row">
                <div id="" class="col-xs-12">
                    <button id="btnLogin"  class="btn btn-primary btn-block">
                        Login <i class="glyphicon glyphicon-user"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div id="" class="col-xs-12">
                    <a class="btn btn-link btn-block">
                        Olvidó Contraseña
                        <i class="glyphicon glyphicon-question-sign"></i>
                    </a>
                </div>
            </div>
        </div>

        <div id="loginE" class="hidden col-xs-12 col-md-4  well col-md-offset-4">
            <?php if (isset($message)) {
                ?>
                <div class="row">
                    <div id="alert2" class="col-xs-12">
                        <div class="alert alert-danger">
                            <?php echo (isset($message) && $message != "") ? $message : ""; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>            
            <div class="row">
                <div id="" class="col-xs-12 form-group">
                    <label>Ingrese Nombre de Usuario o Correo de la empresa</label>  
                    <input type = "text" name="correo" class="form-control"/>
                </div> 
            </div>
            <div class="row">

                <div id="" class="col-xs-12 form-group">
                    <label>Ingrese Contraseña</label>
                    <input type = "password" name="contrasenna" class="form-control"/>
                </div>                    
            </div>
            <div class="row">
                <div id="" class="col-xs-12">
                    <button id="btnLogin"  class="btn btn-primary btn-block">
                        Login <i class="glyphicon glyphicon-user"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div id="" class="col-xs-12">
                    <a class="btn btn-link btn-block">
                        Olvidó Contraseña
                        <i class="glyphicon glyphicon-question-sign"></i>
                    </a>
                </div>
            </div>
        </div>

        <div id="loginA" class="hidden col-xs-12 col-md-4  well col-md-offset-4">
            <?php if (isset($message)) {
                ?>
                <div class="row">
                    <div id="alert3" class="col-xs-12">
                        <div class="alert alert-danger">
                            <?php echo (isset($message) && $message != "") ? $message : ""; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>        
            <div class="row">
                <div id="" class="col-xs-12 form-group">
                    <label>Ingrese Alias o Correo</label>  
                    <input type = "text" name="correo" class="form-control"/>
                </div> 
            </div>
            <div class="row">
                <div id="" class="col-xs-12 form-group">
                    <label>Ingrese Contraseña</label>
                    <input type = "password" name="contrasenna" class="form-control"/>
                </div>                    
            </div>
            <div class="row">
                <div id="" class="col-xs-12">
                    <button id="btnLogin"  class="btn btn-primary btn-block">
                        Login <i class="glyphicon glyphicon-user"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div id="" class="col-xs-12">
                    <a class="btn btn-link btn-block">
                        Olvidó Contraseña
                        <i class="glyphicon glyphicon-question-sign"></i>
                    </a>
                </div>
            </div>
        </div>

        <!--Modal usuario--> 
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Sesión Usuario</h4>
                    </div>
                    <form class="modal-body" action = "<?php echo "index.php?controller=LoginUsuario&action=login"; ?>" method="post" >
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal empresa--> 
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Sesión Empresa</h4>
                    </div>
                    <form class="modal-body" action = "<?php echo "index.php?controller=LoginEmpresa&action=login"; ?>" method="post" >
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal administrador -->
        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Sesión Administrador</h4>
                    </div>
                    <form class="modal-body" action = "<?php echo "index.php?controller=Login&action=login"; ?>" method="post" >
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-cookie.js" type="text/javascript"></script>
        <script src="js/js.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.btnSesionU').click(function () {
                    $('.modal-body').html($('#loginU').html());
                    $('#myModal').modal();
                });
                $('.btnSesionE').click(function () {
                    $('.modal-body').html($('#loginE').html());
                    $('#myModal2').modal();
                });
                $('#d1_3_').click(function () {
                    $('.modal-body').html($('#loginA').html());
                    $('#myModal3').modal();
                });
            });
        </script>        
    </body>
</html>
<?php
