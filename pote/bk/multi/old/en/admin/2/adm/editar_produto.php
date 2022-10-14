<?php
	$id = $_GET['id'];
	//Executa consulta
	$result = mysql_query("SELECT * FROM resultados WHERE id = '$id' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);
	$id_produto = $resultado['id'];
?>
<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Editar Resultado</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=10&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>
			
			<a href='processa/proc_apagar_produto.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <form class="form-horizontal" method="POST" action="processa/proc_edit_produto.php" enctype="multipart/form-data">
	  
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Dia</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="dia"  value="<?php echo $resultado['dia']; ?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Resutado</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="result" placeholder="Nome Produto" value="<?php echo $resultado['result']; ?>">
			</div>
		  </div>
		  
		  		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Odd</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="odd" placeholder="Nome Produto" value="<?php echo $resultado['odd']; ?>">
			</div>
		  </div>
		  
		  
		  
		  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Foto do Produto (500x500)</label>
				<div class="col-sm-10">
					<input name="arquivo" type="file"/>	
				</div>
		  </div>
		  
		  <?php 
		  $foto = $resultado['imagem'];
		  if($foto == ""){
			  ?>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">	
						Foto Antiga
					</label>
					<div class="col-sm-10">
						O produto não possui imagem
					</div>
				</div>
			<?php
		  }
		  if($foto != ""){?>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">	
						Foto do Produto Antiga
					</label>
					<div class="col-sm-10">
						<img src="<?php echo "../foto/$foto"; ?>" width="300" height=auto>
						<input type="hidden" name="img_antiga" value='<?php echo $foto ?>'>
					</div>
				</div>
		  <?php } ?>
		  
		
		  
		  <input type="hidden" name="id" value="<?php echo $id_produto;?>">
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Editar</button>
			</div>
		  </div>
		</form>
	</div>
	</div>
</div> <!-- /container -->

