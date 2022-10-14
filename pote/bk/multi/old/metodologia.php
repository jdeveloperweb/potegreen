<?php
	
	define('pg','http://multiplagreen.com/');
	session_start();
	include_once("admin/2/adm/conexao.php");
	/* include_once("seguranca.php"); */

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
  
  <title>Metodologia</title>
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
  <section class="menu cid-s99OYS7zkD" once="menu" id="menu1-k">

    <?php
		session_start();
		if($_SESSION['usuarioId'] == ""){
			include_once("menu.php");
		}else{
			include_once("menu_user.php");
		}
		?>

    
</section>

<section class="engine"><a href="https://mobirise.info/p">website templates free download</a></section><section class="mbr-section content4 cid-s99OYTcIFi" id="content4-l">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-2"><strong>Nossa Metodologia</strong></h3>
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content11 cid-s99PryrsiD" id="content11-o">
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ol>
                    <li><strong>ALGORITMOS EXCLUSIVOS</strong>&nbsp;- Usando algoritimos exclusivos, vários parâmetros são analisados para que uma lista de dicas possam ser elencadas. &nbsp;Esses algoritmos levam em consideração os últimos jogos, histórico dos times, escalação, classificação no campeonato e dezenas de outros fatores que possam sugerir um determinado resula</li>
                    <li><strong>ANALISTAS EXPERIENTES</strong> - De posse dessa lista preliminar, analistas com experiência em apostas esportivas, com base em notícias, fatores psicossociais, dentre outros, selecionam os jogos com maior probalidade de vitória ante o resultado sugerido.</li>
                    <li><strong>O SEGREDO </strong>&nbsp;- Todos os dias forneceremos dezenas de dicas, que vão de 10 a mais de 30 partidas diárias.
</br>- Além dos jogos simples, preparamos vários múltiplos, prontos para você preparar suas apostas. Normalmente 6 a 10 múltiplos por dia.
</br>- O segredo do nosso método é a gestão bancária. Sugerimos 1% de participação em TODOS os nossos múltiplos todos os dias.
</br>- Em partidas simples, trabalhe ao vivo, veja no que você tem um grande nível de confiança e maximize seus lucros. Mas sempre preste atenção para manter uma gestão responsável. Não seja um jogador impulsivo.
</br>- Além disso, você ainda pode baixar nosso aplicativo e receber avisos de saque (se você tiver um perfil mais conservador e quiser garantir o lucro).
</br>- Além dos avisos acima, você também pode receber sinais de jogos ao vivo através de nosso aplicativo.
</br>- Venha conosco! Estamos no mercado há muito tempo e nosso método provou ser infalível! </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section once="footers" class="cid-s99OYUJZYz" id="footer6-n">

    

    

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