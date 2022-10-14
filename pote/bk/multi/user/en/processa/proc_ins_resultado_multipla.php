<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id = $_GET['id'];
$conf= $_GET['status'];
$tipo =$_GET['tipo'];
echo "IAQUI VEIO";
 if($conf == '1') {
	 
$query = mysqli_query($conectar, "UPDATE multiplassug set status = 'Vencida' WHERE id='$id'");
$resultado2=mysqli_query($conectar, "SELECT * FROM entradas WHERE tipo='Múltipla' AND id_jogsug = '$id'");
$linhas2=mysqli_num_rows($resultado2);

while($linhas2 = mysqli_fetch_array($resultado2)){	
echo "ID ENTRADA:".$linhas2['id'];
$id = $linhas2['id'];
$oddent = $linhas2['oddent']/100;
$valor_ent = $linhas2['valor_ent']/100;
$atual  = $oddent*$valor_ent*100;
$query2 = mysqli_query($conectar, "UPDATE entradas set valor_fim = '$atual ' WHERE tipo='Multipla' AND id='$id'");
}



  } else if($conf == '2') {
	  
$query = mysqli_query($conectar, "UPDATE multiplassug set status = 'Perdida' WHERE id='$id'");
$resultado2=mysqli_query($conectar, "SELECT * FROM entradas WHERE tipo='Múltipla' AND id_jogsug = '$id'");
$linhas2=mysqli_num_rows($resultado2);

while($linhas2 = mysqli_fetch_array($resultado2)){	
echo "ID ENTRADA:".$linhas2['id'];
$id = $linhas2['id'];
$oddent = $linhas2['oddent']/100;
$valor_ent = $linhas2['valor_ent']/100;
$atual  = $linhas2['valor_ent']*-1;
$query2 = mysqli_query($conectar, "UPDATE entradas set valor_fim = '$atual ' WHERE tipo='Multipla' AND id='$id'");
}

  } else if($conf == '3') {
	  
$query = mysqli_query($conectar, "UPDATE multiplassug set status = 'Anulado' WHERE id='$id'");
$resultado2=mysqli_query($conectar, "SELECT * FROM entradas WHERE tipo='Múltipla' AND id_jogsug = '$id'");
$linhas2=mysqli_num_rows($resultado2);

while($linhas2 = mysqli_fetch_array($resultado2)){	
echo "ID ENTRADA:".$linhas2['id'];
$id = $linhas2['id'];
$oddent = $linhas2['oddent']/100;
$valor_ent = $linhas2['valor_ent'];
$atual  = $valor_ent;
$query2 = mysqli_query($conectar, "UPDATE entradas set valor_fim = '$atual ' WHERE tipo='Multipla' AND id='$id'");
}
  } 


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