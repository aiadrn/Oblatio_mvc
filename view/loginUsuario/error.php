<div>
    <h1>Error</h1>
    <p><?php echo(isset($message)&& $message !="")? $message : "";?></p>
    <a href = "<?php echo "index.php?controller=login&action=index"; ?>" class="btn btn-primary">Regresar al login</a>
</div>

