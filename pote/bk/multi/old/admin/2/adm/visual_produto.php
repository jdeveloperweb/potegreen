<?php
	$id = $_GET['id'];
	//Executa consulta
	$result = mysql_query("SELECT * FROM resultados WHERE id = '$id' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">      
	<div class="page-header">
		<h1>Visualizar Resultado</h1>
	</div>
	
	<div class="row">
		<div class="pull-right">
			<a href='administrativo.php?link=10'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>
							
			<a href='administrativo.php?link=13&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
			
			<a href='processa/proc_apagar_produto.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class=" col-sm-3 col-md-1">
				<b>Id:</b>
			</div>
			<div class=" col-sm-9 col-md-11">
				<?php echo $resultado['id']; ?>
			</div>
		
         <div class="col-sm-3 col-md-1">
         <b>Print do resultado:</b>
			</div>
			<div class="col-sm-9 col-md-11">
				<?php $foto = $resultado['imagem']; ?>
				<img src="<?php echo "../foto/$foto"; ?>" width="300" height=auto>
			</div>
			
			<div class="col-sm-3 col-md-1">
				<b>Resultado:</b>
			</div>
			<div class="col-sm-9 col-md-11">
				<?php echo $resultado['result']; ?>
			</div>
			
			<div class="col-sm-3 col-md-1">
				<b>Odd:</b>
			</div>
			<div class="col-sm-9 col-md-11">
				<?php echo $resultado['odd']; ?>
			</div>
			
			
		</div>
	</div>
</div> <!-- /container -->

