<?php
	
	define('pg','http://multiplagreen.com/');
	session_start();
	include_once("admin/2/adm/conexao.php");
?>
<!DOCTYPE html>
<html  >
<head>
    <!-- Global site tag (gtag.js) - Google Ads: 543916678 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-543916678"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-543916678');
</script>
<!-- Event snippet for Iniciar finalização de compra conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-543916678/5sl3CMuPp-IBEIaFroMC'});
</script>
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
                
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-2"><strong>Obrigado!</strong></h3>
                
            </div>
        </div>
    </div>
	</div><p class="text-center text-danger">
			Você acabou de adquirir um de nossos planos de assinatura. O processo de liberação é automático, tão logo haja a comunicação do Gateway de pagamento e veja se já consegue acessar a página "dicas"! Caso ainda tenha qualquer dificuldade em entrar, não recorde a senha, ou qualquer outro motivo, nos chame no Instagram!! Boa sorte para todos nós!
		</p>
</section>

<section class="services2 cid-s99JwPlwtn" id="services2-7">
    <!---->
    
    <!---->
    <!--Overlay-->
    
    <!--Container-->
	
<?php
	
	$resultado=mysql_query("SELECT * FROM resultados ORDER BY 'id'");
	$linhas=mysql_num_rows($resultado);
?>

	
    <div class="container">
        <div class="col-md-12">
		<?php 
				while($linhas = mysql_fetch_array($resultado)){?>
				<div class="container">
				<div class="col-md-12">
				<div class="media-container-row">
                <div class="mbr-figure" style="width: 40%;">
                    <img src="assets/images/teste-736x450.jpg" alt="Mobirise" title="">
                </div>
                <div class="align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-5"><strong> <?php echo date('d/m/Y', strtotime($linhas['dia'])); ?></strong></h2>
                    <div class="mbr-section-text">
                        <p class="mbr-text text1 pt-2 mbr-light mbr-fonts-style display-2" style="color:<?php if ($linhas['result']=='PERDIDA') { echo '#F26F6F;' ;}?>"><?php echo $linhas['result']; ?> - ODD <?php echo $linhas['odd']; ?></p>
                        
                    </div>
                    <!--Btn-->
                    <div class="mbr-section-btn pt-3 align-left"><a href="page3.html" class="btn btn-danger display-4">
                            ASSINAR AGORA</a></div>
                </div>
            </div>
				        </div></br></br>
    </div>
				<?php
					
				}
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
                    © Copyright 2020 MultiplaGreen - All Rights Reserved<br>Any Partial or complete reproduction is strictly probihited &nbsp;| Proibida reprodução parcial ou completa do conteúdo do site<br>
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