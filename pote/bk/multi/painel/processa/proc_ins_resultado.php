<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id = $_GET['id'];
$conf = $_GET['status'];
$tipo = $_GET['tipo'];

if ($conf == '1') {

	$query = mysqli_query($conectar, "UPDATE jogosug set status = 'Vencida', retorno = 1 WHERE id='$id'");
	$linhas2 = mysqli_affected_rows($conectar) ;

	$resultado2=mysqli_query($conectar, "SELECT * FROM multiplassug WHERE FIND_IN_SET('$id',ids)");
	$linhas3=mysqli_num_rows($resultado2);

	while($linhas3 = mysqli_fetch_array($resultado2)){
		$idm = $linhas3['id'];
		$arr = explode(",",trim($linhas3['ids']));
		$soma =0;
		$conta = count($arr);
		foreach ($arr as $key => $value) {
		$checar = $value;
		$result_j = 0;
		$consulta=mysqli_query($conectar, "SELECT retorno FROM jogosug WHERE id='$value'");
		$linhas4 =mysqli_fetch_array($consulta);
		$soma = $soma + $linhas4['retorno'];
		}
		if ($soma == $conta) {
			mysqli_query($conectar, "UPDATE multiplassug set status = 'Vencida', retorno = oddtotal WHERE  id='$idm'");;
		} else {
			mysqli_query($conectar, "UPDATE multiplassug set retorno = 0 WHERE id='$idm'");
		}		
	}

} else if ($conf == '2') {

	$query = mysqli_query($conectar, "UPDATE jogosug set status = 'Perdida', retorno = 0 WHERE id='$id'");
	$resultado2 = mysqli_query($conectar, "UPDATE multiplassug set status = 'Perdida' WHERE FIND_IN_SET('$id',ids)");
} else if ($conf == '3') {
	$query = mysqli_query($conectar, "UPDATE jogosug set status = 'Anulado' WHERE id='$id'");
}


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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=8'>
			";
	} else {
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL= https://multiplagreen.com/painel/administrador.php?link=8'>
			";
	}

	?>
</body>

</html>