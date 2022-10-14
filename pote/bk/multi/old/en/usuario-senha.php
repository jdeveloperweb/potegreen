<?php
	
	define('pg','http://multiplagreen.com/');
	session_start();
	include_once("admin/2/adm/conexao.php");
?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.10.5, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.5, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <meta property="og:title" content="multiplagreen.com - Não dependa apenas da sua sorte!">
<meta property="og:site_name" content="Multiplagreen">
<meta property="og:url" content="http://multiplagree.com">
<meta property="og:description" content="Trabalhamos com algoritmos exclusivos, desenvolvidos com base em inúmeros parâmetros que inlfuenciam o resultado de um jogo, além de análises feitas por especialistas aposta esportiva.">
<meta property="og:type" content="article">
<meta property="og:image" content="assets/images/logo2.png">
  
  <title>Multipagreen - Não dependa apenas da sua sorte</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
	
  <section class="menu cid-s99CqEC3ez" once="menu" id="menu1-0">

    <?php
		include_once("menu_user.php");
	?>

    
</section>

<section class="engine"><a href="https://mobirise.info/f">easy web builder</a></section><section class="header1 cid-s99GJCPJSm mbr-parallax-background" id="header1-3">

    

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(91, 104, 107);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-2">NÃO DEPENDA APENAS <br>DA SUA &nbsp;SORTE</h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                    Algoritmos exclusivos e uma equipe de analistas experiente com dicas diárias.&nbsp;</h3>
                
            </div>
        </div>
    </div>

</section>

<section class="mbr-section content4 cid-s99IjtOUvV" id="content4-4">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-2"><strong>Dados do Usuário</strong></h3>
                
				 <?php if ( $_SESSION['usuarioNivelAcesso'] == "Pendente")	{ ?>		   
				   <p class="text-center text-danger"></br>
			Se já realizou seu pagamento, aguarde até que o PagSeguro nos informe (dependendo da forma de pagamento, esse tempo pode levar até 48h úteis) que iremos atualizar os dados abaixo.
			Se ainda não é assinante, veja nossos planos, assine e tenha acesso às dicas exclusivas!
		</p>
                </div>
				  
            </div> </div> <div class="mbr-section-btn align-center"><a class="btn btn-md btn-danger display-4" href="planos.php">
                        ASSINAR AGORA</a></div>
        </div> <?php }?>
    </div>
</section>

<section class="services2 cid-s99JwPlwtn" id="services2-7">
    <!---->
    
    <!---->
    <!--Overlay-->
    
    <!--Container-->
	

	
    <div class="container">
        <div class="col-md-12">
		<?php 
				?>
				<div class="container">
				<div class="col-md-12">
				<div class="media-container-row">

                <div class="align-center aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-5"> E-mail: <a class= "text-danger"><?php echo $_SESSION['usuarioNome']; ?></a></h2></br>
						<h2 class="mbr-title pt-2 mbr-fonts-style display-5">Status do Pagamento: <a class= "text-danger"><?php echo $_SESSION['usuarioNivelAcesso']; ?></a></h2></br>
						<h2 class="mbr-title pt-2 mbr-fonts-style display-5">  Tipo de Plano: <a class= "text-danger"><?php echo $_SESSION['plano']; ?></a></h2></br>
						<h2 class="mbr-title pt-2 mbr-fonts-style display-5">  Data de iníncio: <a class= "text-danger"><?php echo date('d/m', strtotime($_SESSION['dataIni'])); ?></a></h2></br>
						<h2 class="mbr-title pt-2 mbr-fonts-style display-5">  Data de término: <a class= "text-danger"><?php echo date('d/m', strtotime($_SESSION['dataFim'])); ?></a></h2></br>
                  
				  <form role="form" method="POST" action="admin/2/adm/processa/proc_edit_senha.php">
			    			<div class="row justify-content-md-center ">
			    				<div class="align-center col-xs-4 col-sm-4 col-md-4	">
			    					<div class="form-group align-center">
			    						<input type="password" name="senha1" id="password" class="form-control input-sm" placeholder="Nova Senha">
			    					</div>
			    				</div>
			    				<div class="col-xs-4 col-sm-4 col-md-4">
			    					<div class="form-group">
			    						<input type="password" name="senha" id="password_confirmation" class="form-control input-sm" placeholder="Confirme sua nova senha">
			    					</div>
			    				</div>
			    			</div>
			    						  <div class="form-group">
							<div class="align-center">
								<button type="submit" class="btn btn-md btn-danger display-4">Alterar</button>
								</div>
							</div>
						
			    		</form>
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
						<script>
						  $(function(){
							$("#inputSubmit").click(function(){
							  var senha = $("#password").val();
							  var senha2 = $("#password_confirmation").val();
							  if(senha != senha2){
								event.preventDefault();
								alert("As senhas digitadas não são iguais!");
							  }
							});
						  });
						</script>
				  
				   <?php if ( $_SESSION['usuarioNivelAcesso'] == "Pendente")	{ ?>		   
				   <p class="text-center text-danger"></br>
			Se já realizou seu pagamento, aguarde até que o PagSeguro nos informe (dependendo da forma de pagamento, esse tempo pode levar até 48h úteis) que iremos atualizar os dados acima.
			Caso haja qualquer dúvida sobre os dados acima, favor enviar um email para <strong>contato@multiplagreen.com</strong>. Nosso tempo de resposta é de até 48h.
		</p>
                </div>
				                   
				  <?php } else {  ?>
				  </br></br></br><p class="text-center text-danger"></br></br></br>
			Caso haja qualquer dúvida sobre os dados acima, favor enviar um email para <strong>contato@multiplagreen.com</strong>.</br> Nosso tempo de resposta é de até 48h.
		</p>
			     <?php } ?>
            </div>
				        </div></br></br>
    </div>
				<?php
	
			?> </br>
            

</section>

<section class="services2 cid-s99CYfJdjg" id="services2-1">
    <!---->
    
    <!---->
    <!--Overlay-->
    
    

<section once="footers" class="cid-s99LbFT4g8" id="footer6-9">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7" style="color:#ffffff">
                    © Copyright 2020 MultiplaGreen - All Rights Reserved<br>Any Partial or complete reproduction is strictly probihited &nbsp;| Proibida reprodução parcial ou completa do conteúdo do site. </br>Contato: contato@multiplagreen.com - Tempo médio de resposta: 48h<br>
<br><br>
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>