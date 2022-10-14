<?php
	$id = $_GET['id'];
	//Executa consulta
	$result = mysql_query("SELECT * FROM user WHERE id = '$id' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Editar Usuário</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=2&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>
			
			<a href='processa/proc_apagar_usuario.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <form class="form-horizontal" method="POST" action="processa/proc_edit_usuario.php">
	  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="email" placeholder="Nome Completo" value="<?php echo $resultado['email']; ?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Senha</label>
			<div class="col-sm-10">
			  <input type="password" class="form-control" name="senha" placeholder="Senha" value="<?php echo $resultado['senha']; ?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Data Inicial</label>
			<div class="col-sm-10">
			  <input type="date" class="form-control" name="dataini" value="<?php echo $resultado['dataini']; ?>">
			</div>
		  </div>
		  
		  		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Data Final</label>
			<div class="col-sm-10">
			  <input type="date" class="form-control" name="datafim" value="<?php echo $resultado['datafim']; ?>">
			</div>
		  </div>
		  

		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Situação</label>
			<div class="col-sm-10">
			  <select class="form-control" name="status">
				  <option>Selecione</option>						
								<option value="admin" <?php if($resultado['status'] == "admin"){ echo 'selected'; } ?>
								>admin </option>
								<option value="Pendente" <?php if($resultado['status'] == "Pendente"){ echo 'selected'; } ?>
								>Pendente </option>
								<option value="Ativo" <?php if($resultado['status'] == "Ativo"){ echo 'selected'; } ?>
								>Ativo </option>
				</select>
			</div>
		  </div>
			
		 		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Plano</label>
			<div class="col-sm-10">
			  <select class="form-control" name="plano">
				  <option>Selecione</option>				
				  <option value="Especial" <?php if($resultado['plano'] == "Especial"){ echo 'selected'; } ?>
								>Especial </option>
								<option value="Mensal" <?php if($resultado['plano'] == "Mensal"){ echo 'selected'; } ?>
								>Mensal </option>
								<option value="Semestral" <?php if($resultado['plano'] == "Semestral"){ echo 'selected'; } ?>
								>Semestral </option>
								<option value="Anual" <?php if($resultado['plano'] == "Anual"){ echo 'selected'; } ?>
								>Anual </option>
				</select>
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

