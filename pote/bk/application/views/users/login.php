<?php
	session_start();
?>


    <body class="fixed-left">
	<?php
		#unset($_SESSION['usuarioId'],			
		#      $_SESSION['usuarioNome'], 		
		#      $_SESSION['usuarioNivelAcesso'], 
		#      $_SESSION['usuarioLogin'], 		
		#      $_SESSION['usuarioSenha']);
	?>


        <!-- Begin page -->
	
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Subscribe our Newsletter</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
				<p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="index.php" class="logo logo-admin"><img src="<?php echo base_url('assets/user_assets/public/assets/images/logo-M.png'); ?>" height="30" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="font-18 m-b-5 text-center">Bem vindo!</h4>
                        <p class="text-muted text-center">Faça o login para o <br><strong>Painel MultiplaGreen</strong><p>
                        <form class="form-horizontal m-t-30" action="valida_login.php" method="POST" >

                            <div class="form-group">
                                <label for="username">E-mail</label>
                                <input type="text" class="form-control" name="usuario" placeholder="email@email.com">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Senha</label>
                                <input type="password" class="form-control" name="senha" placeholder="Senha">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Lembrar-me</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-success w-md waves-effect waves-light" type="submit">Entrar</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="https://wa.me/5521967298617" class="text-muted"><i class="mdi mdi-lock"></i> Esqueceu a senha? Fale com um atendente.</a>
                                </div>
                            </div>
                        </form>
						<p class="text-center text-danger">
			<?php
				if(isset($_SESSION['loginErro'])){
					echo $_SESSION['loginErro'];
					unset($_SESSION['loginErro']);
				}
			?>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="text-white">© <?php echo date("Y",strtotime("-1 year")); ?> - <?php echo date("Y"); ?>  MultiplaGreen.com </p>
            </div>

        </div>


    </body>
</html>