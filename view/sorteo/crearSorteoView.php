     
<div id="" class="col-xs-12">
    <h1 class="textoCentrado FuenteTitulo tamanioFuente2">NUEVO SORTEO</h1>
    <hr/>
</div>
<div id=""  class="col-xs-12 col-sm-10 col-md-8  col-md-offset-2 col-sm-offset-1 col-md-offset-2 well">
    <form action = "<?php echo "index.php?controller=Sorteo&action=crear"; ?>" method="post">
        <div id="" class="col-xs-12 form-group">
            <label>Código Sorteo</label>  
            <input type = "text" name="codigo" class="form-control"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Fecha de Inicio del Sorteo</label>  
            <input type = "datetime-local" name="fecha_inicio" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Cantidad de Tickets</label>  
            <input type = "text" name="cantidad_tickets" class="form-control"/>
        </div>

        <div id="" class="col-xs-12 form-group">
            <label>Valor Estimado</label>  
            <input type = "text" name="valorEstimado" class="form-control"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Valor Aleatorio</label>  
            <input type = "text" name="valor_aleatorio" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Precio Ticket</label>  
            <input type = "text" name="precio_ticket" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Fecha Fin de Sorteo</label>  
            <input type = "datetime-local" name="fecha_fin" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Fecha de Confirmación Empresa</label>  
            <input type = "date" name="fecha_confirmacion_empresa" class="form-control"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Comentario Empresa</label>  
            <input type = "text" name="comentario_empresa" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Fecha de Confirmación Usuario</label>  
            <input type = "date" name="fecha_confirmacion_usuario" class="form-control"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Comentario Usuario</label>  
            <input type = "text" name="comentario_usuario" class="form-control"/>
        </div>
        <div id="" class="col-xs-12 form-group">
            <label>Título del Sorteo</label>  
            <input type = "text" name="titulo_sorteo" class="form-control"/>
        </div>        
        <div id="" class="col-xs-12 form-group">
            <label>Producto</label>  
            <input type = "text" name="producto" class="form-control"/>
        </div> 
        <div id="" class="col-xs-12 form-group">
            <label>Usuario Ganador</label>  
            <input type = "text" name="usuario" class="form-control"/>
        </div> 
        <div id="" class="col-xs-12">
            <button id="btnCrear"  class="btn btn-success btn-block">
                Guardar <i class="glyphicon glyphicon-cd"></i>
            </button>
        </div>    
    </form>
</div>

