<?php
session_start();
include_once("../conexao.php");


$id_user = $_SESSION['usuarioId'] ;
$descr = $_POST['descricao'];
$data =$_POST['data'];
$oddini =$_POST['oddtotal'];
$oddent =$_POST['oddent']*100;
$valor_ent =$_POST['valor_ent']*100;
$id_jogsug =$_POST['jogoid'];
$status =$_POST['status'];
$valor_fim =0;
$tipo = $_GET['tipo'];

echo "</br>USUARIO :".$id_user;
echo "</br>descr :".$descr;
echo "</br>data :".$data;
echo "</br>hora :".$hora;
echo "</br>oddini :".$oddini;
echo "</br>oddent :".$oddent;
echo "</br>valor_ent :".$valor_ent;
echo "</br>id_jogsug :".$id_jogsug;
echo "</br>status :".$status;


mysql_query("INSERT INTO entradas (id_user, data, tipo, descr, oddini, oddent, valor_ent, status, valor_fim, id_jogsug) values ('$id_user', '$data', 'Múltipla', '$descr', '$oddini', '$oddent', '$valor_ent', '$status', '$valor_fim', '$id_jogsug')");	 


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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=7'>
				<script type=\"text/javascript\">
					alert(\"Entrada cadastrada com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=7'>
				<script type=\"text/javascript\">
					alert(\"Entrada não cadastrada.\");
				</script>
			";		   

		}

		?>
	</body>
</html>