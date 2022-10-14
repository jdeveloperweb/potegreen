<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página para realizar login">
    <meta name="author" content="Cesar">
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">

    <title>Registered User Area</title>
    <link href="../admin/2/adm/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/2/adm/css/signin.css" rel="stylesheet">
    <script src="../admin/2/adm/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
	<?php
		unset($_SESSION['email'],			
		      $_SESSION['senha'], 		
		      $_SESSION['status'], 
		      $_SESSION['dataini'], 		
		      $_SESSION['datafim']);
	?>
    <div class="container">		
      <form class="form-signin" method="POST" action="admin/2/adm/valida_login.php">
        <h2 class="form-signin-heading text-center">Registered User Area</h2>
        <label for="inputEmail" class="sr-only">User</label>
		
        <input type="text" name="usuario" class="form-control" placeholder="Enter User" required autofocus><br />
		
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="senha" class="form-control" placeholder="Enter Password" required >
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button></br></br>
		<p class="text-center"><a href="planos.php">Subscribe here</a>  -	<a href="index.php">Home</a></p>

      </form>
		<p class="text-center text-danger">
			<?php
				if(isset($_SESSION['loginErro'])){
					echo $_SESSION['loginErro'];
					unset($_SESSION['loginErro']);
				}
			?>
		</p>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../admin/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>