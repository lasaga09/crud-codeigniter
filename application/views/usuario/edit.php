<?php  ?>

<div class="row">
    	<form action="usuario/update" method="POST">
    		<div class="form-group">
    			<input type="text" name="id" value="<?php echo $datos->id ?>" >
    		<input type="text"  class="form-control"  name="nombre" value=" <?php echo $datos->nombre ?>">
    		<input type="text"  class="form-control" name="edad" value=" <?php echo $datos->edad ?>">
    		<input type="submit" class="form-control btn btn-success"  value="save">
    	</div>
    	</form>
    </div>

    <?php var_dump($datos->id) ?>