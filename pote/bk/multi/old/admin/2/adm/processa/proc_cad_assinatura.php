<?php
session_start();
// include_once("../seguranca.php");
include_once("../conexao.php");
$email 				= $_POST["email"];
$senha 				= $_POST["senha"];
$datacad 			= "";
$dataini 			= "";
$datafim 			= "";
$status 	= "Pendente";
$plano 	= $_POST["plano"];
$planobd = "";

if ($plano == 1) {
			$planobd = "Mensal";
		} elseif ($plano == 2) {
			$planobd = "Semestral";
		}elseif ($plano == 3) {
			$planobd = "Anual";
		}


$vrf = mysql_query("SELECT * FROM user WHERE email = '$email' || email =null");

if (mysql_num_rows($vrf) > 0) {

}

else {
// continui //
$query = mysql_query("INSERT INTO user (email, senha, datacad, dataini, datafim, status, plano) VALUES ('$email', '$senha', NOW(), '$dataini', '$datafim','$status', '$planobd')");
}


?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<body>
		<?php


		if ($plano == 1) {
			$dirUrl = "https://sun.eduzz.com/687767";
		} elseif ($plano == 2) {
			$dirUrl = "https://sun.eduzz.com/687770";
		}elseif ($plano == 3) {
			$dirUrl = "https://sun.eduzz.com/687772";
		}elseif ($plano == 0) {
			$dirUrl = "http://multiplagreen.com/planos.php";
						}
		
		
		if (mysql_affected_rows() != 0 ){	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=".$dirUrl."'>
				<script type=\"text/javascript\">
					alert(\"Usuário cadastrado com sucesso! Você será redirecionado para o Pagamento.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/>
				<script type=\"text/javascript\">
					alert(\"Usuário não foi cadastrado com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>