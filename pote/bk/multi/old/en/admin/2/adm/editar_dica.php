<?php
	$id = $_GET['id'];
	//Executa consulta
	$result = mysql_query("SELECT * FROM dicas WHERE id = '$id' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Editar Dica</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=28'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>
			
			<a href='processa/proc_apagar_dica.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <form class="form-horizontal" method="POST" action="processa/proc_edit_dica.php">
	  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Dia</label>
			<div class="col-sm-10">
			  <input type="date" class="form-control" name="dia"  value="<?php echo $resultado['dia']; ?>">
			</div>
		  </div>		 
	 
		  
		  		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Dica</label>
			<div class="col-sm-10">
				<textarea class="form-control ckeditor" rows="5" name="dicas" placeholder="Descrição longa do produto"><?php echo $resultado['dicas']; ?></textarea>
			</div>
		  </div>
		  
		  <input type="hidden" name="id" value="<?php echo $resultado['id']; ?>">
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Editar</button>
			</div>
		  </div>
		</form>
	</div>
	</div>
</div> <!-- /container -->

