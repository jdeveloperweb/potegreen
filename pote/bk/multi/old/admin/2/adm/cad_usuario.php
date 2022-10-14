
<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Cadastrar Usuário</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=2&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>				
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <form class="form-horizontal" method="POST" action="processa/proc_cad_usuario.php">
	  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
			<div class="col-sm-3">
			  <input type="email" class="form-control" name="email" placeholder="E-mail">
			</div>
		  </div>
		  
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
			<div class="col-sm-2">
			  <input type="password" class="form-control" name="senha" placeholder="Senha">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Data de Início do Pagamento</label>
			<div class="col-sm-2">
			  <input type="date" class="form-control" name="dataini" >
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Data para encerrar Plano</label>
			<div class="col-sm-2">
			  <input type="date" class="form-control" name="datafim" >
			</div>
		  </div>
		  
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Tipo de Usuário</label>
			<div class="col-sm-3">
			  <select class="form-control" name="status">
				  <option value="admin">admin</option>
				  <option value="Pendente">Pendente</option>
				  <option value="Ativo">Ativo</option>
				</select>
			</div>
		  </div>
		  
		   <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Plano</label>
			<div class="col-sm-3">
			  <select class="form-control" name="plano">
				  <option value="Especial">Especial</option>
				  <option value="Mensal">Mensal</option>
				  <option value="Semestral">Semestral</option>
				    <option value="Anual">Anual</option>
				</select>
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

