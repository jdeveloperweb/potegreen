<?php
session_start();

include_once("../conexao.php");

@$email = $_SESSION['usuarioEmail'];
@$user = $_SESSION['username'];
@$senha = $_POST['senha'];


include_once("../seguranca_senha.php");

$query = mysqli_query($conectar,"UPDATE user set senha ='$senha' WHERE email ='$email'");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<body>
		<?php
		if (mysqli_affected_rows($conectar) != 0 ){	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/user'>
				<script type=\"text/javascript\">
					alert(\"Senha cadastrada com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://wa.me/5553999466200'>
				<script type=\"text/javascript\">
					alert(\"Ops.. o Eduzz ainda não nos informou o seu pagamento. Sem problema, vamos te encaminhar para um de nossos atendentes via whatsapp.\");
				</script>
			";		   

		}

		?>
	</body>
</html>