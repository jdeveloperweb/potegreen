<?php
session_start();
include_once("../conexao.php");

$times = $_POST['idservico'];
$count_states = count($times);
$dia = $_POST['dia'];

if ($count_states > 0) {
	$states = implode(',', $times);
	// echo "</br>ESTADOS = ".$states;
}

$aux = 1;
$var = '';
$status = 'Em análise';
for ($i = 0; $i < count($times); $i++) {
	$id[$i] = $times[$i];
	$resultado = mysqli_query($conectar, "SELECT * FROM jogosug WHERE id = '$id[$i]'");
	$linhas = mysqli_num_rows($resultado);


	while ($linhas = mysqli_fetch_array($resultado)) {
		$encoding = mb_internal_encoding();
		$yourtime = $linhas['hora'];
		preg_match("/([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})/", $yourtime, $match);
		$hour = $match[1];
		$min = $match[2];
		$sec = $match[3];
		$hora = $hour . ":" . $min;
		$cadastro = "<a href=" . $linhas['link'] . ">||Bet365||</a>:: " .$hora." - ". $linhas['timea'] . " v " . $linhas['timeb'] . " || " . $linhas['resultado'] . "</br>";
		$aux *= $linhas['oddini'] / 100;
		$var .= "<a href=" . $linhas['link'] . "> ||Bet365|| </a>:: ".$hora." - " . $linhas['timea'] . " v " . $linhas['timeb'] . " || " . $linhas['resultado'] . "</br>";
	}
}
$aux = number_format($aux, 2, '.', '') * 100;
echo "ODD =" . $aux;
echo "DESCRICAO =" . $var;
echo "STATUS =" . $status;
echo "DATA =" . $dia;
mysqli_query($conectar, "INSERT INTO multiplassug (data, descricao, ids, oddtotal, status) values ('$dia','$var','$states','$aux','$status')");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
</head>

<body>
	<?php
	if (mysqli_affected_rows($conectar) != 0) {
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=15'>
				<script type=\"text/javascript\">
					alert(\"Dica cadastrada com Sucesso.\");
				</script>
			";
	} else {
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=15'>
				<script type=\"text/javascript\">
					alert(\"Dica não foi cadastrada com Sucesso.\");
				</script>
			";
	}

	?>
</body>

</html>