
<?php
	
	$resultado=mysql_query("SELECT * FROM user WHERE status = 'Ativo' AND plano = 'Mensal'");
	$ativoMensal=mysql_num_rows($resultado);

    $resultado=mysql_query("SELECT * FROM user WHERE status = 'Ativo' AND plano = 'Semestral'");
	$ativosSemestral=mysql_num_rows($resultado);

    $resultado=mysql_query("SELECT * FROM user WHERE status = 'Ativo' AND plano = 'Anual'");
	$ativosAnual=mysql_num_rows($resultado);

    $resultado=mysql_query("SELECT * FROM user WHERE status = 'Pendente'");
	$pendente=mysql_num_rows($resultado);

?>

<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Bem vindo</h1>
  </div>
  <div class="row">
		<div class="col-md-12">
		
			<strong>Total de novos clientes pendentes: <a href="administrativo.php?link=2"><?php echo $pendente; ?></a></strong></br></br> 
			Total de clientes mensais ativos: <strong><?php echo $ativoMensal; ?></strong></br></br>
			Total de clientes semestrais ativos:<strong><?php echo $ativosSemestral; ?></strong></br></br>
			Total de clientes anuais ativos:<strong><?php echo $ativosAnual; ?></strong></br></br>
			Taxa PagSeguro: 4,9%</br></br>
			Total Mensal: </br></br>
			Total Semestral: </br></br>
			Total Anual: </br></br>
			
		</div>
	</div>
</div> <!-- /container -->

