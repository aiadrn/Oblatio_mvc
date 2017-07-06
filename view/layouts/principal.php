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

                                        <div id="d1_3_2" class="">
                                            <a href = "<?php echo "index.php?controller=Login&action=index"; ?>">                            
                                                Sesión Admin
                                            </a>
                                        </div>
                                        <div id="d1_3_1" class="">
                                            <a href = "<?php echo "index.php?controller=LoginEmpresa&action=index"; ?>">
                                                Sesión Empresa
                                            </a>
                                        </div>
                                        <div id="d1_3_4" class="">
                                            <a href = "<?php echo "index.php?controller=LoginUsuario&action=index"; ?>">
                                                Sesión Usuario
                                            </a>
                                        </div>
                    <div id="d1_3_2" class="">
                        <a href = "<?php echo "index.php?controller=Info&action=index"; ?>">                            
                            Información
                        </a>
                    </div>
                    <div id="d1_3_1" class="">
                        <a href = "<?php echo "index.php?controller=LoginEmpresa&action=index"; ?>">
                            Iniciar Sesión
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
        <script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-cookie.js" type="text/javascript"></script>
        <script src="js/js.js" type="text/javascript"></script>

    </body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

