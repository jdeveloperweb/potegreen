<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id = $_GET['id'];
$conf= $_GET['status'];
$aprov = "";

 if($conf == '1') {
	  $atualizaconf = 3;

  } else if($conf == '2') {
	  $atualizaconf = -2;

  } else if($conf == '3') {
	  $atualizaconf = 2;

  } else {
	  $atualizaconf = 0;

  }

$villa=0;
$ganso=0;
$janjao=0;


 if($_SESSION['usuarioId'] == 4) {
	  $villa= 1;

  } else if($_SESSION['usuarioId'] == 5) {
	  $ganso=1;

  } else if($_SESSION['usuarioId']== 6) {
	  $janjao=1;

  } else {
	  $aprov = 0;

  }


$query = mysql_query("UPDATE jogosug set ap_villa = ap_villa  +'$villa', ap_ganso = ap_ganso  +'$ganso', ap_janjao = ap_janjao  +'$janjao', confianca = confianca +'$atualizaconf' WHERE id='$id'");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<body>
		<?php
		if (mysql_affected_rows() != 0 ){	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=9'>
				<script type=\"text/javascript\">
					alert(\"Avaliação de jogo cadastrada com sucesso!!! Vamos!!!\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=9'>
				<script type=\"text/javascript\">
					alert(\"Avaliação não processada.\");
				</script>
			";		   

		}

		?>
	</body>
</html>