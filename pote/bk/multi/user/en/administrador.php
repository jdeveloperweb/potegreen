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
		$pag[7] = "listar_jogos.php";
		$pag[12] = "bancadia.php";
		$pag[13] = "bancames.php";
		$pag[14] = "listar_multiplas.php";
		$pag[18] = "cad_senha.php";
		$pag[20] = "contato.php";

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