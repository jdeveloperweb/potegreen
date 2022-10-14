
<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Cadastrar Dica</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=28&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>				
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <form class="form-horizontal" method="POST" action="processa/proc_cad_dica.php" enctype="multipart/form-data">
	  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Dia</label>
			<div class="col-sm-2">
			  <input type="date" class="form-control" name="dia" placeholder="Dia">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Dica</label>
			<div class="col-sm-10">
				<textarea class="form-control ckeditor" rows="5" name="dica" placeholder="Escreva a dica do dia"></textarea>
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

