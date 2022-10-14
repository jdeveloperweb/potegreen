<?php
	
	define('pg','http://multiplagreen.com/');
	session_start();
	include_once("admin/2/adm/conexao.php");
	/* include_once("seguranca.php"); */
	// if($_SESSION['usuarioNivelAcesso']  != "Ativo"){
		// echo "
				// <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://multiplagreen.com/planos.php'>
				// <script type=\"text/javascript\">
					// alert(\"Você ainda não possui um plano ativo. Caso já tenha realizado, aguarde a confirmação pelo PagSeguro. Obrigado!\");
				// </script>
			// ";	
// }
if(($_SESSION['usuarioId'] == "") || ($_SESSION['usuarioNivelAcesso'] != "Ativo") || ($_SESSION['usuarioSenha'] == "")){
	unset($_SESSION['usuarioId'],			
		  $_SESSION['usuarioNome'], 		
		  $_SESSION['usuarioNivelAcesso'], 	
		  $_SESSION['usuarioSenha']);
	//Mensagem de Erro
	$_SESSION['loginErro'] = "Você ainda não possui um plano ativo. Caso já tenha realizado, aguarde a confirmação pelo PagSeguro. Obrigado!";
		
	//Manda o usuário para a tela de login
	header("Location: planos.php");
}
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
  
  <title>Dicas</title>
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
  <section class="menu cid-s99LNqxOYS" once="menu" id="menu1-a">



    
	</section>

<section class="engine"><a href="https://mobirise.info/e"></a></section><section class="mbr-section content4 cid-s99LNrJNVL" id="content4-c">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-2"><strong>Week tips for investors</strong></h3>
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section info2 cid-s99Ny1gsLL" id="info2-j">

    
<?php

	$resultado=mysql_query("SELECT * FROM dicas WHERE  dia >= DATE_ADD(NOW(), INTERVAL -7 DAY) ORDER BY dia DESC");
	$linhas=mysql_num_rows($resultado);
?>
    
<?php 
				if($_SESSION['usuarioNivelAcesso'] == "Ativo"){
				while($linhas = mysql_fetch_array($resultado)){
						
						?>
							 <div class="container">
					<div class="row main justify-content-center">
						<div class="media-container-column col-12 col-lg-3 col-md-4">
							<div class="mbr-section-btn align-left py-4"><a class="btn btn-danger display-5" href="">
								
								 <?php echo date('d/m', strtotime($linhas['dia'])); ?></a></div>
						</div>
						<div class="media-container-column title col-12 col-lg-7 col-md-6">
							
							<h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-7"><?php echo $linhas['dicas']; ?></h3>
						</div>
					</div>
				</div> </br><hr></br>
						<?php
						

				}
				}else{
							echo "<div class='row main justify-content-center'><p class='text-center text-danger'>Assine para ver o conteúdo exclusivo. Caso já tenha efetuado o pagamento, aguarde a confirmação.</p></div>";
	
		}
			?>


			






  
</section>

<section once="footers" class="cid-s99LNvu5KH" id="footer6-g">

    

    

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
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>