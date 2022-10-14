<?php
session_start();
include_once("../conexao.php");

 $dia=$_POST['dia'];
 $timep=$_POST['timep'];
 $timea=$_POST['timea'];
 $timeb=$_POST['timeb'];
 $resultado=$_POST['resultado'];
 $link=$_POST['link'];
 $odd=$_POST['odd'];
 $status= 'Pendente';

 for($i=0;$i<count($timea);$i++)
 { $newodd[$i]=$odd[$i]*100;

  if($timea[$i]!="" && $timeb[$i]!="" && $resultado[$i]!="" && $newodd[$i]!="")
  {
   mysql_query("INSERT INTO jogosug (data, hora, timea, timeb, link, resultado, oddini, status) values ('$dia','$timep[$i]', '$timea[$i]','$timeb[$i]','$link[$i]','$resultado[$i]','$newodd[$i]','$status')");	 
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
		if (mysql_affected_rows() != 0 ){	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=8'>
				<script type=\"text/javascript\">
					alert(\"Jogo(s) cadastrado(s) com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=8'>
				<script type=\"text/javascript\">
					alert(\"Jogo não cadastrado.\");
				</script>
			";		   

		}

		?>
	</body>
</html>