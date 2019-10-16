<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css">

     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
  	  <h1>Hello, world!</h1>


    <div class="row">
    	<form action="usuario/store" method="POST">
    		<div class="form-group">
    		<input type="text"  class="form-control"  name="nombre">
    		<input type="text"  class="form-control" name="edad">
    		<input type="submit" class="form-control btn btn-success"  value="save">
    	</div>
    	</form>
    </div>




   <table class="table table-bordered"
	data-toggle     ="table"
	data-pagination ="true"
	data-search     ="true">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">edad</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($dts as  $a){ ?>
	 <tr>

    	<td><?php echo $a->id ?></td>
    	<td><?php echo $a->nombre ?></td>
    	<td><?php echo $a->edad ?></td>
    	<td><button type="button" id="btnDel" ida="<?php echo $a->id ?>">X</button>
    		<button type="button" id="btnEdit" ida="<?php echo $a->id ?>">Edit</button>
    		<a href="usuario/edit/<?php echo $a->id ?>">editar</a>
    	</td>
    	
	 </tr>
    <?php } ?>
</tbody>
</table>
  </div>



   
    <script src="<?= base_url('assets/js/alumno.js') ?>"></script>
  </body>
</html>
