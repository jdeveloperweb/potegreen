<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Cadastrar Resultado</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=10&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>				
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <form class="form-horizontal" method="POST" action="processa/proc_cad_produto.php" enctype="multipart/form-data">
	  
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Dia</label>
			<div class="col-sm-10">
			  <input type="date" class="form-control" name="dia">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Resultado</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="result" placeholder="Nome do Produto">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Odd</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="odd" placeholder="Nome do Produto">
			</div>
		  </div>		  
		  
		  
		  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Foto do Produto (500x500)</label>
				<div class="col-sm-10">
					<input name="arquivo" type="file"/>	
				</div>
		  </div>
		  
		  
		  
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Cadastrar</button>
			</div>
		  </div>
		</form>
	</div>
	</div>
</div> <!-- /container -->

