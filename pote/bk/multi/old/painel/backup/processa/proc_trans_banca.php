<?php
session_start();
include_once("../conexao.php");


$id_user = $_SESSION['usuarioId'] ;
(int)$valor1 =$_POST['banca']*100;
(int)$par =$_POST['dep'];
(int)$valor2 = $valor1*$par;
echo "</br>USUARIO - ".$id_user;
echo "</br>VALOR1 - ".$valor1;
echo "</br>PAR - ".$par;
echo "</br>CADASTRAR - ".$valor2;

$data = date("d/m/Y");

$data = explode("/", $data);

list($dia, $mes, $ano) = $data;

$dia_antes = $dia-1;

$data = "$ano-$mes-$dia";

echo "</br>DATA - ".$data;

 mysql_query("INSERT INTO trans_banca (data, id_user, valor) values ('$data','$id_user','$valor2')");	

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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=1'>
				<script type=\"text/javascript\">
					alert(\"Cadastro efetuado com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=1'>
				<script type=\"text/javascript\">
					alert(\"Não cadastrado.\");
				</script>
			";		   

		}

		?>
	</body>
</html>