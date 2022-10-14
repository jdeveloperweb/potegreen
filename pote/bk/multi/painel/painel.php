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
                                    <h3 class="page-title">Administração - Multiplagreen</h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>
                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <!-- ==================
                         PAGE CONTENT START
                         ================== -->
						<?php

						$id = $_SESSION['usuarioId'];

						$data = date("d/m/Y");
						$data = explode("/", $data);
						list($dia, $mes, $ano) = $data;
						$dia_antes = $dia - 1;
						$data = "$ano-$mes-$dia";

						$hoje= date('d-m-Y');
                    
                        $investia = 0;
                    	$resultado2=mysqli_query($conectar,"SELECT *, SUM(invest) as investdia, SUM(retorno) as retornomes FROM multiplassug WHERE YEAR(data)=YEAR( CURRENT_DATE ) and  MONTH(data)=MONTH( CURRENT_DATE )");
                    	while ($row1 = mysqli_fetch_array($resultado2)) {
							$investia = $row1['investdia'];
							$retornomes = number_format($row1['retornomes']/100, 2, ",", ".");
							$saldo = number_format(($row1['retornomes']/100)-$investia, 2, ",", ".");;
                    	}
							
                    	$resultado3=mysqli_query($conectar,"SELECT *, SUM(invest) as investmes FROM multiplassug WHERE YEAR(data)=YEAR( CURRENT_DATE ) and MONTH(data)=MONTH( CURRENT_DATE ) AND DAY(data)=DAY( CURRENT_DATE )");
                        while ($row2 = mysqli_fetch_array($resultado3)) {
                        	  $investmes = $row2['investmes'];
                         }
					

						$tot_dia = 0;
						while ($linhas3 = mysqli_fetch_array($resultado3)) {
							if ($linhas3['id_user'] == $id) {
								$result_dia = number_format($linhas3['total_valor'] / 100, 2, ",", ".");
								$tot_dia = $result_dia;
							}
						}
						@$porcent_dia = number_format($tot_dia * 100 / (($_SESSION['bancaAtual'] / 100) - $tot_dia), 2, ",", ".");
						@$porcent_mes = number_format($tot_mes * 100 / (($_SESSION['bancaAtual'] / 100) - $tot_mes), 2, ",", ".");

	                    $resultadox=mysqli_query($conectar,"SELECT count(status) as ativos FROM user WHERE status='Ativo'");
	                    $rowx=mysqli_fetch_assoc($resultadox);
                        $ativos = $rowx['ativos'];
						?>
						<div class="page-content-wrapper">

							<div class="container-fluid">
								<hr>
								<h5><span class="counter text-blue-grey"> Resultados Multiplagreen - <?php echo date("d") . " de " . $meses[date('m')]; ?></span></h5>
								<div class="row">
									<div class="col-md-6 col-xl-3">
										<div class="mini-stat clearfix bg-white">
											<span class="mini-stat-icon bg-success mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
											<div class="mini-stat-info">
												<span class="counter text-success"><?php echo $investmes ?> unidades</span>
												Investimento no dia
												<p class="text-muted mb-0 m-t-20"><cite><?php echo $investmes ?>% do total da banca - Stake 1%</cite></p>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-xl-3">
										<div class="mini-stat clearfix bg-white">
											<span class="mini-stat-icon bg-success mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
											<div class="mini-stat-info">
												<span class="counter text-success"><?php echo $investia ?> unidades</span>
												Investimento no mês
												<p class="text-muted mb-0 m-t-20"><cite><?php echo $investia ?>% sobre a banca</cite></p>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-xl-3">
										<div class="mini-stat clearfix bg-white">
											<span class="mini-stat-icon bg-success mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
											<div class="mini-stat-info">
												<span class="counter text-success"><?php echo $retornomes ?> unidades</span>
												Retorno no mês
												<p class="text-muted mb-0 m-t-20"><cite><?php echo $retornomes ?>% sobre a banca</cite></p>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-xl-3">
										<div class="mini-stat clearfix bg-white">
											<span class="mini-stat-icon bg-success mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
											<div class="mini-stat-info">
												<span class="counter text-success"><?php echo $saldo ?> unidades</span>
												Saldo do mês
												<p class="text-muted mb-0 m-t-20"><cite>Lucro Acumulado: <?php echo $saldo ?>%</cite></p>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-xl-3">
										<div class="mini-stat clearfix bg-white">
											<span class="mini-stat-icon bg-primary mr-0 float-right"><i class="mdi mdi-account-check "></i></span>
											<div class="mini-stat-info">
												<span class="counter text-primary"><?php echo $ativos ?> Ativos no site</span>
												
												
											</div>
										</div>
									</div>
									<div class="col-md-6 col-xl-3">
										<div class="mini-stat clearfix bg-white">
											<span class="mini-stat-icon bg-warning mr-0 float-right"><i class="mdi mdi-account-check "></i></span>
											<div class="mini-stat-info">
												<span class="counter text-warning"><?php echo $ativos-4 ?> Ativos no Eduzz</span>
												
												
											</div>
										</div>
									</div>
								</div>
								<hr>
								

						</div><!-- container -->

					</div> <!-- Page content Wrapper -->

				</div> <!-- content -->

                <?php include 'layouts/footer.php'; ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->
