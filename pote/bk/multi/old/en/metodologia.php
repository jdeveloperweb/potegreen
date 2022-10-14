<?php
	
	define('pg','http://multiplagreen.com/');
	session_start();
	include_once("../admin/2/adm/conexao.php");
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
                
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-2"><strong>Our Method</strong></h3>
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content11 cid-s99PryrsiD" id="content11-o">
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ol>
                    <li><strong>EXCLUSIVE ALGORITHMS </strong>&nbsp;: Using unique algorithms, several parameters are analyzed so that a list of tips can be listed. These algorithms take into account the last matches, team history, lineup, league ranking and dozens of other factors that may suggest a particular result. </li>
                    <li><strong>EXPERIENCED ANALYSTS </strong> - With this preliminary list in mind, analysts with experience in sports betting, based on news, psychosocial factors, among others, select the games with the highest probability of victory over the suggested result. </li>
                    <li><strong>THE SECRET </strong>&nbsp;: </br>-  Every day we will provide dozens of tips, ranging from 10 to more than 30 matches daily.

</br>- In addition to the simple games, we have prepared several multiples, ready for you to prepare your bets. Usually 6 to 10 multiples per day.

</br>- The secret of our method is bank management. We suggest 1% stake in ALL of our multiples every day.

</br>- In simple matches, work live, see what you have a great level of confidence and maximize your profits. But always pay attention to maintain responsible management. Don't be an impulsive gambler.

</br>- In addition, you can still download our app and receive cash out notices (if you have a more conservative profile and want to guarantee a profit).

</br>- In addition to the warnings above, you can also receive live matches signals through our app.

</br>- Come with us! We have been in the market for a long time and our method has proven to be foolproof! &nbsp;</li>
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