<!-- Incluindo componentes header links css e js-->
<?php include 'layouts/header.php'; ?>
<?php include 'layouts/headerStyle.php'; ?>
<?php
session_start();
include_once("conexao.php");
include_once("seguranca.php");
?>


<body class="fixed-left">

	<?php include 'layouts/loader.php'; ?>

	<!-- Begin page -->
	<div id="wrapper">

		<?php include 'layouts/menu.php'; ?>




		<?php

		$link = $_GET["link"];

		$pag[1] = "painel.php";
		$pag[2] = "resultados.php";
		$pag[3] = "nresultados.php";
		$pag[4] = "cad_banca.php";
		$pag[6] = "cad_jogos.php";
		$pag[7] = "listar_jogos.php";
		$pag[8] = "ins_resultado.php";
		$pag[9] = "avaliar_jogos.php";
		$pag[10] = "cad_entrada.php";
		$pag[11] = "cad_entrada_multipla.php";
		$pag[12] = "bancadia.php";
		$pag[13] = "bancames.php";
		$pag[14] = "listar_multiplas.php";
		$pag[15] = "cad_multiplas.php";
		$pag[16] = "visual_multiplas.php";
		$pag[17] = "ins_resultado_multipla.php";
	    $pag[18] = "listar_user.php";
	    $pag[19] = "ins_usuario.php";
		$pag[20] = "contato.php";
		$pag[21] = "editar_multipla.php";
		$pag[22] = "editar_usuario.php";
		$pag[23] = "editar_jogo.php";
		$pag[24] = "listar_ativos.php";
		$pag[25] = "editar_ativo.php";

		if (!empty($link)) {
			if (file_exists($pag[$link])) {
				include $pag[$link];
			} else {
				include "painel.php";
			}
		} else {
			include "painel.php";
		}

		?>
	</div> <!-- Page content Wrapper -->

	</div> <!-- content -->

	<?php include 'layouts/footer.php'; ?>

	</div>
	<!-- End Right content here -->

	</div>
	<!-- END wrapper -->

	<?php include 'layouts/footerScript.php'; ?>



</body>

</html>