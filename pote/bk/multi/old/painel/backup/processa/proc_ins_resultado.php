<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id = $_GET['id'];
$conf= $_GET['status'];
$tipo =$_GET['tipo'];

 if($conf == '1') {
	 
$query = mysql_query("UPDATE jogosug set status = 'Vencida' WHERE id='$id'");
$resultado2=mysql_query("SELECT * FROM entradas WHERE tipo='Simples' AND id_jogsug = '$id'");
$linhas2=mysql_num_rows($resultado2);

while($linhas2 = mysql_fetch_array($resultado2)){	
$id = $linhas2['id'];
$oddent = $linhas2['oddent']/100;
$valor_ent = $linhas2['valor_ent']/100;
$atual  = $oddent*$valor_ent*100;
$query2 = mysql_query("UPDATE entradas set valor_fim = '$atual ' WHERE tipo='Simples' AND id='$id'");
}



  } else if($conf == '2') {
	  
$query = mysql_query("UPDATE jogosug set status = 'Perdida' WHERE id='$id'");
$resultado2=mysql_query("SELECT * FROM entradas WHERE tipo='Simples' AND id_jogsug = '$id'");
$linhas2=mysql_num_rows($resultado2);

while($linhas2 = mysql_fetch_array($resultado2)){	
$id = $linhas2['id'];
$oddent = $linhas2['oddent']/100;
$valor_ent = $linhas2['valor_ent']/100;
$atual  = $linhas2['valor_ent']*-1;
$query2 = mysql_query("UPDATE entradas set valor_fim = '$atual ' WHERE tipo='Simples' AND id='$id'");
}
  } else if($conf == '3') {
	  
$query = mysql_query("UPDATE jogosug set status = 'Anulado' WHERE id='$id'");

  } 


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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=8'>
				<script type=\"text/javascript\">
					alert(\"Avaliação de jogo cadastrada com sucesso!!! Vamos!!!\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=8'>
				<script type=\"text/javascript\">
					alert(\"Avaliação não processada.\");
				</script>
			";		   

		}

		?>
	</body>
</html>