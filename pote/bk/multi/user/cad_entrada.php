<?php include 'seguranca.php'; 
include_once("conexao.php");?>
<?php

$meses = array(
	'01'=>'Janeiro',
	'02'=>'Fevereiro',
	'03'=>'Março',
	'04'=>'Abril',
	'05'=>'Maio',
	'06'=>'Junho',
	'07'=>'Julho',
	'08'=>'Agosto',
	'09'=>'Setembro',
	'10'=>'Outubro',
	'11'=>'Novembro',
	'12'=>'Dezembro'
);
$id = $_GET['id'];
$aprov = "";

$result=mysql_query("SELECT * FROM jogosug WHERE id = '$id'");
$resultado = mysql_fetch_assoc($result);

$yourtime = $resultado['hora'];
																	preg_match("/([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})/", $yourtime, $match);
																	$hour = $match[1];
																	$min = $match[2];
																	$sec = $match[3];
																	$hora = $hour.":".$min;
$encoding = mb_internal_encoding();

?>
<!-- Begin page -->
<div id="wrapper">


<!-- Start right Content here -->
<div class="content-page">
	<!-- Start content -->
	<div class="content">

		<!-- Top Bar Start -->
		<div class="topbar">

			<nav class="navbar-custom">
				<!-- Search input -->
				<div class="search-wrap" id="search-wrap">
					<div class="search-bar">
						<input class="search-input" type="search" placeholder="Search" />
						<a href="#" class="close-search toggle-search" data-target="#search-wrap">
							<i class="mdi mdi-close-circle"></i>
						</a>
					</div>
				</div>

				<ul class="list-inline float-right mb-0">
					<!-- Search -->
					<li class="list-inline-item dropdown notification-list">
						<a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
							<i class="mdi mdi-magnify noti-icon"></i>
						</a>
					</li>
					<!-- Fullscreen -->
					<li class="list-inline-item dropdown notification-list hidden-xs-down">
						<a class="nav-link waves-effect" href="#" id="btn-fullscreen">
							<i class="mdi mdi-fullscreen noti-icon"></i>
						</a>
					</li>
					<!-- language-->
					<li class="list-inline-item dropdown notification-list hidden-xs-down">
						<a class="nav-link dropdown-toggle arrow-none waves-effect text-muted" data-toggle="dropdown" href="#" role="button"
						   aria-haspopup="false" aria-expanded="false">
							Português <img src="public/assets/images/flags/brasil_flag.jpg" class="ml-2" height="16" alt=""/>
						</a>
						<div class="dropdown-menu dropdown-menu-right language-switch">
							<a class="dropdown-item" href="#"><img src="public/assets/images/flags/us_flag.jpg" alt="" height="16"/><span> English </span></a>
									  <a class="dropdown-item" href="#"><img src="public/assets/images/flags/germany_flag.jpg" alt="" height="16"/><span> German </span></a>
							<a class="dropdown-item" href="#"><img src="public/assets/images/flags/french_flag.jpg" alt="" height="16"/><span> French </span></a>
							<a class="dropdown-item" href="#"><img src="public/assets/images/flags/spain_flag.jpg" alt="" height="16"/><span> Spanish </span></a>
						</div>
					</li>
					<!-- notification-->
					
					<!-- User-->
					<li class="list-inline-item dropdown notification-list">
						<a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
						   aria-haspopup="false" aria-expanded="false">
							<img src="public/assets/images/users/<?php echo $_SESSION['usuarioAvatar'];?>" alt="user" class="rounded-circle">
						</a>
						<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
							<a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Meus dados</a>
							
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="sair.php"><i class="dripicons-exit text-muted"></i> Sair</a>
						</div>
					</li>
				</ul>

				<!-- Page title -->
				<ul class="list-inline menu-left mb-0">
					<li class="list-inline-item">
						<button type="button" class="button-menu-mobile open-left waves-effect">
							<i class="ion-navicon"></i>
						</button>
					</li>
					<li class="hide-phone list-inline-item app-search">
						<h3 class="page-title">Gestão de Banca - Multiplagreen</h3>
					</li>
				</ul>

				<div class="clearfix"></div>
			</nav>

		</div>
		<!-- Top Bar End -->

		<!-- ==================
			 PAGE CONTENT START
			 ================== -->

		 <div class="page-content-wrapper">

			<div class="container-fluid">

				<div class="row">
					<div class="col-lg-12">
					   

						<div class="card m-b-20">
							<div class="card-body">
							 <form class="form-horizontal" method="POST" action="processa/proc_cad_entrada.php">	
							<div class="form-group">
										<label>CADASTRAR DE ENTRADA</label>
										<!--  VERIFICAR SE O SALDO NÃO É 0-->
										
										<p class="text-muted m-b-30 font-14"> Sugerimos seguir nossa estratégia de gestão de banca. Porém,  você pode definir o valor que desejar como entrada para essa aposta. </br></br> 1 - Verificando sua banca, percebemos que você possui <strong>R$ <?php echo number_format($_SESSION['bancaAtual']/100,2,",","."); ?></strong>
										</br>2 -  De acordo com nossa estratégia, sugerimos uma entrada de <strong>R$ <?php echo number_format($_SESSION['bancaAtual']/100/200,2,",","."); ?></strong> 
										</br>3 - Entretanto, você pode escolher o valor que desejar para entrar nessa aposta.</p>
										<div><label for="example-email-input" class="col-sm-2 col-form-label"> Entrada no jogo:</label>
										 <h5><span class="badge badge-success"> <?php echo  $hora." || ". mb_strtoupper($resultado['timea']." v ".$resultado['timeb']."  || ".$resultado['resultado']." || @".$resultado['oddini']/100, $encoding);?></span></h5>
											<hr>
											<h5><span>Confiança dos analistas: </span><input type="hidden" class="rating-tooltip-manual" data-fractions="3" data-filled="mdi mdi-star font-32 text-success" disabled="disabled" data-empty="mdi mdi-star-outline font-32 text-muted" value="<?php echo  $resultado['confianca']*5/9?>"/></h5>
											<h5><span><i class="mdi mdi-clock  "> </i> <?php echo  $hora ?></span></h5>
											<h5><span><i class="mdi mdi-soccer  "> <?php echo  mb_strtoupper($resultado['timea']." v ".$resultado['timeb'], $encoding);?> </i></span></h5>
											<h5><span><i class="fa fa-check-square-o  "> <?php echo  mb_strtoupper($resultado['resultado'], $encoding);?></i></span></h5>
											<h5><span><i class="fa fa-percent   "> <?php echo  mb_strtoupper($resultado['oddini']/100, $encoding);?></i></span></h5>
											<h5><span><i class="fa fa-money   "> R$ <?php echo number_format($_SESSION['bancaAtual']/100/200,2,",","."); ?> - (Entrada Sugerida)</i></h5></span> 
											<hr>
											<label for="example-email-input" class="col-sm-2 col-form-label">Valor da aposta</label>
											<div class="input-group col-lg-4">
											<input class="input-group " id="jogoid" name="jogoid" type="hidden" value="<?php echo $resultado['id']; ?>" />
											<input class="input-group " id="timea" name="timea" type="hidden" value="<?php echo $resultado['timea']; ?>" />
											<input class="input-group " id="timeb" name="timeb" type="hidden" value="<?php echo $resultado['timeb']; ?>" />
											<input class="input-group " id="resultado" name="resultado" type="hidden" value="<?php echo $resultado['resultado']; ?>" />
											<input class="input-group " id="oddini" name="oddini" type="hidden" value="<?php echo $resultado['oddini']; ?>" />
											<input class="input-group " id="data" name="data" type="hidden" value="<?php echo $resultado['data']; ?>" />
											<input class="input-group " id="hora" name="hora" type="hidden" value="<?php echo $resultado['hora']; ?>" />											
											<input class="input-group " id="status" name="status" type="hidden" value="<?php echo $resultado['status']; ?>" />
												 <p class= "text-align-center"><input type="number"  step="0.01"  min="1.00"class="form-control" maxlength="25" name="valor_ent"  placeholder="<?php echo number_format($_SESSION['bancaAtual']/100/200,2,",","."); ?> " id="valor_ent" required /></p>
												</div>
												 
												<label for="example-email-input" class="col-sm-2 col-form-label">Odd na entrada</label>
												<div class="input-group col-lg-4">
												 <p class= "text-align-center"><input type="number"  step="0.01"  min="1.00"class="form-control" maxlength="25" name="oddent"  placeholder="<?php echo $resultado['oddini']/100; ?>" id="oddent"  required /></p>
												 <button type="submit" class="btn btn-success">Cadastrar entrada</button>
												</div>
											</div><!-- input-group -->
										</div>
										
									</div>

								

</div>

				   </form>          

							</div>
						</div>

						

					</div> <!-- end col -->

				   <!-- end col -->
				</div> <!-- end row -->

			</div><!-- container-fluid -->

		</div> <!-- Page content Wrapper -->

	</div> <!-- content -->
<!-- Parsley js -->
        <script type="text/javascript" src="public/plugins/parsleyjs/parsley.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>
	<?php include 'layouts/footer.php'; ?>

</div>
<!-- End Right content here -->

</div>
<!-- END wrapper -->
