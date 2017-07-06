<div class="row">
    <div class="col-xs-12 " id="tituloLoguin"> <h2 class="center-block FuenteTitulo tamanioFuente2">Iniciar Sesión Administrador</h2></div> 
</div>
<form action = "<?php echo "index.php?controller=Login&action=login"; ?>" method="post" >
    <div id="principal2" class="col-xs-12 col-md-4  well col-md-offset-4">
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
        <!--        <div class="row">
                    <div id="alert" class="col-xs-12">
                        <div class="alert alert-success">
                            
                        </div>
        
                    </div>
                </div>-->
        <div class="row">
            <div id="d11" class="col-xs-12 form-group">
                <label>Ingrese Alias o Correo</label>  
                <input type = "text" name="correo" class="form-control"/>
            </div> 
        </div>
        <div class="row">

            <div id="d13" class="col-xs-12 form-group">
                <label>Ingrese Contraseña</label>
                <input type = "password" name="contrasenna" class="form-control"/>
            </div>                    
        </div>
        <div class="row">
            <div id="d5" class="col-xs-12">
                <button id="btnLogin"  class="btn btn-primary btn-block">
                    Login <i class="glyphicon glyphicon-user"></i>
                </button>
            </div>
        </div>
        <div class="row">
            <div id="d6" class="col-xs-12">
                <a class="btn btn-link btn-block">
                    Olvidó Contraseña
                    <i class="glyphicon glyphicon-question-sign"></i>
                </a>

            </div>
        </div>
    </div>
</form>

