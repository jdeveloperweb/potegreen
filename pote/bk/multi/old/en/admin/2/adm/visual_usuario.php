<?php
	$id = $_GET['id'];
	//Executa consulta
	$result = mysql_query("SELECT * FROM user WHERE id = '$id' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">      
	<div class="page-header">
		<h1>Visualizar Usuário</h1>
	</div>
	
	<div class="row">
		<div class="pull-right">
			<a href='administrativo.php?link=2&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>
							
			<a href='administrativo.php?link=4&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
			
			<a href='processa/proc_apagar_usuario.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class=" col-sm-6 col-md-3">
				<b>Id:</b>
			</div>
			<div class=" col-sm-6 col-md-9">
				<?php echo $resultado['id']; ?>
			</div>
			
			<div class="col-sm-6 col-md-3">
				<b>E-mail:</b>
			</div>
			<div class="col-sm-6 col-md-9">
				<?php echo $resultado['email']; ?>
			</div>
			
			<div class="col-sm-6 col-md-3">
				<b>Início do Plano:</b>
			</div>
			<div class="col-sm-6 col-md-9">
				<?php echo $resultado['dataini']; ?>
			</div>
			
			<div class="col-sm-6 col-md-3">
				<b>Fim do Plano:</b>
			</div>
			<div class="col-sm-6 col-md-9">
				<?php echo $resultado['datafim']; ?>
			</div>
			
			<div class="col-sm-6 col-md-3">
				<b>Status:</b>
			</div>
			<div class="col-sm-6 col-md-9">
				<?php echo $resultado['status']; ?>
			</div>
		</div>
	</div>
</div> <!-- /container -->

