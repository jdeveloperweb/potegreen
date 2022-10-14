<?php

include_once("../conexao.php");
$email 				= $_POST["mail"];
$senha 				= $_POST["senha"];
$status 	= "Em aberto";
$perfil 	= "user";
$avatar 	= "user.jpg";



 $resultado = mysqli_query($conectar, "SELECT * FROM user WHERE email = '$email'");
            if($resultado->num_rows != 0) {
                // se ja estiver cadastrado, coloca status "Fatura Aberta"
               echo "
                        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/user'>
                        <script type=\"text/javascript\">
                            alert(\"Você já está cadastrado! Tente a senha 123456 ou fale com um atendente.\");
                        </script>
                    ";
                
            } else {
               // se não existir vamos cadastrar ele e redirecionar para que ele cadastre a senha
               
                    $query = mysqli_query($conectar,"INSERT INTO user (email, senha,status, perfil, avatar) VALUES ('$email', '$senha', '$status', '$perfil', '$avatar')");

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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://sun.eduzz.com/1411276'>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com'>
			";		   

		}

		?>
	</body>
</html>
                
           <?php  } ?>



