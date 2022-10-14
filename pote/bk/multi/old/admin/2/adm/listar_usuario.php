
<?php
	
	$resultado=mysql_query("SELECT * FROM user ORDER BY id DESC");
	$linhas=mysql_num_rows($resultado);
?>


<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Lista de Usuário</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href="administrativo.php?link=3"><button type='button' class='btn btn-sm btn-success'>Cadastrar</button></a>
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">  
		<thead>
		  <tr>
			<th>ID</th>
			<th>E-mail</th>
		    <th>Cadastro</th>
            <th>Data Inicial</th>
			<th>Data Fim</th>
			<th>Plano</th>
			<th>Status</th>
			<th>Ações</th>
		  </tr>
		</thead>
		<tbody>
			<?php 
				while($linhas = mysql_fetch_array($resultado)){
					echo "<tr>";
						echo "<td>".$linhas['id']."</td>";
						echo "<td>".$linhas['email']."</td>";
						echo "<td>".$linhas['datacad']."</td>";
						echo "<td>".$linhas['dataini']."</td>";
						echo "<td>".$linhas['datafim']."</td>";
						echo "<td>".$linhas['plano']."</td>";
                        echo "<td>".$linhas['status']."</td>";
						?>
						<td> 
						<a href='administrativo.php?link=5&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-primary'>Visualizar</button></a>
						
						<a href='administrativo.php?link=4&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
						
						<a href='processa/proc_apagar_usuario.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
						
						<?php
					echo "</tr>";
				}
			?>
		</tbody>
	  </table>
	    <script>
  $(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );

  </script>
	</div>
	</div>
</div> <!-- /container -->

