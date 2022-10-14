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
<?php 

$id = $_SESSION['usuarioId'];

$data = date("d/m/Y");
$data = explode("/", $data);
list($dia, $mes, $ano) = $data;
$dia_antes = $dia-1;
$data = "$ano-$mes-$dia";

	$hoje= date('d-m-Y');
	$resultado2=mysql_query("SELECT *, SUM(valor_fim) as total_valor FROM entradas WHERE id_user ='$id' AND MONTH(data)=MONTH( CURRENT_DATE )");
	$linhas2=mysql_num_rows($resultado2);
	$resultado3=mysql_query("SELECT *, SUM(valor_fim) as total_valor FROM entradas WHERE id_user ='$id' AND MONTH(data)=MONTH( CURRENT_DATE ) AND DAY(data)=DAY( CURRENT_DATE )");
	$linhas3=mysql_num_rows($resultado3);
	
	$tot_mes=0;
	while($linhas2 = mysql_fetch_array($resultado2)){
	if($linhas2['id_user']==$id ){
	$result_mes= number_format($linhas2['total_valor']/100,2,",","."); 
	$tot_mes=$result_mes;
	}
	
}

$tot_dia=0;
while($linhas3 = mysql_fetch_array($resultado3)){
	if($linhas3['id_user']==$id ){
	$result_dia= number_format($linhas3['total_valor']/100,2,",","."); 
	$tot_dia=$result_dia;
	}
}
$porcent_dia = number_format($tot_dia*100/(($_SESSION['bancaAtual']/100)-$tot_dia),2,",",".");
$porcent_mes = number_format($tot_mes*100/(($_SESSION['bancaAtual']/100)-$tot_mes),2,",",".");

 
?>
                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-success">
                                        <span class="mini-stat-icon bg-white mr-0 float-right"><i class=" text-success mdi mdi-coin"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-white">R$<?php echo $_SESSION['bancaAtual']/100 ?></br> </span>
											
                       
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class=" mb-0 m-t-20 text-white">Saldo na banca</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        
													<span class="mini-stat-icon bg-success mr-0 float-right"><i class="mdi mdi-coin"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-secondary">R$ <?php echo $tot_dia; ?></span>
                                           Resultado em </br> <?php echo date('d')." de ".$meses[date('m')]; ?>
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="text-muted mb-0 m-t-20">Total do dia <span class="pull-right">
										<?php if ($tot_dia<0)
																{ 
															echo "<i class='fa fa-caret-down text-danger m-r-5'></i>";
															} else {
																	echo "<i class='fa fa-caret-up text-success m-r-5'></i>";
																		}?>
										<?php echo $porcent_dia ?>%</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        
													<span class="mini-stat-icon bg-success mr-0 float-right"><i class="mdi mdi-coin"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-secondary">R$ <?php echo $tot_mes; ?></span>
                                           Resultado no mês </br> <?php echo " de ".$meses[date('m')]; ?>
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="text-muted mb-0 m-t-20">Total do mês <span class="pull-right">
										<?php if ($tot_mes<0)
																{ 
															echo "<i class='fa fa-caret-down text-danger m-r-5'></i>";
															} else {
																	echo "<i class='fa fa-caret-up text-success m-r-5'></i>";
																		}?>
										<?php echo $porcent_mes ?>%</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-success">
                                        <span class="mini-stat-icon bg-success mr-0 float-right"><i class="mdi mdi-margin"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-white ">20%</span>
                                            
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="text-white mb-0 m-t-20">Retorno sobre investimento</p>
                                    </div>
                                </div>
                            </div>
  <div class="row">

                                <div class="col-xl-9">

                                    <div class="row">
                                        <div class="col-md-12 pr-md-0">
                                            <div class="card m-b-20" style="height: 486px;">
                                                <div class="card-body">
                                                    <h4 class="mt-0 header-title">Dia a dia em  <?php echo $meses[date('m')]; ?></h4>

                                                    

                                                    <div id="combine-chart" class="m-t-20"></div>

                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>

                                <div class="col-xl-3">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title text-center">Apostas do dia</h4>

                                            <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">8</h5>
                                                    <p class="text-muted font-14">Vencidas</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">2</h5>
                                                    <p class="text-muted font-14">Perdidas</p>
                                                </li>
                                            </ul>

                                            <div id="donut-chart"></div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                          

                              <!-- end row -->


                           
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 m-b-30 header-title">Apostas de hoje</h4>

                                            <div class="table-responsive">
                                                <table class="table table-vertical mb-0">
															 <tbody>
															   <tr>
																	<td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Simples Sugerido 01</td>
																	<td>2.00 <p class="m-0 text-muted font-14">Odd esperada</p></td>
																	<td>R$50<p class="m-0 text-muted font-14">Apostado</p></td>
																	<td>R$50 <p class="m-0 text-muted font-14">Ganhos</p></td>
																	<td><button type="button" class="btn btn-primary btn-sm waves-effect">Editar</button>  
																	<button type="button" class="btn btn-warning btn-sm waves-effect">Ver</button>  
																	<button type="button" class="btn btn-danger btn-sm waves-effect">Excluir</button></td>
																</tr>
																 <tr>
																	<td><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Jogo Próprio 01</td>
																	<td>2.10 <p class="m-0 text-muted font-14">Odd esperada</p></td>
																	<td>R$50<p class="m-0 text-muted font-14">Apostado</p></td>
																	<td>R$51 <p class="m-0 text-muted font-14">Perdas</p></td>
																	<td><button type="button" class="btn btn-primary btn-sm waves-effect">Editar</button>  
																	<button type="button" class="btn btn-warning btn-sm waves-effect">Ver</button>  
																	<button type="button" class="btn btn-danger btn-sm waves-effect">Excluir</button></td>
																</tr>
																 <tr>
																	<td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Múltipla Sugerida 01</td>
																	<td>8.00 <p class="m-0 text-muted font-14">Odd esperada</p></td>
																	<td>R$50<p class="m-0 text-muted font-14">Apostado</p></td>
																	<td>R$400 <p class="m-0 text-muted font-14">Ganhos</p></td>
																	<td><button type="button" class="btn btn-primary btn-sm waves-effect">Editar</button>  
																	<button type="button" class="btn btn-warning btn-sm waves-effect">Ver</button>  
																	<button type="button" class="btn btn-danger btn-sm waves-effect">Excluir</button></td>
																</tr>
																 <tr>
																	<td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Múltipla Sugerida 02</td>
																	<td>20.00 <p class="m-0 text-muted font-14">Odd esperada</p></td>
																	<td>R$50<p class="m-0 text-muted font-14">Apostado</p></td>
																	<td>R$1000 <p class="m-0 text-muted font-14">Ganhos</p></td>
																	<td><button type="button" class="btn btn-primary btn-sm waves-effect">Editar</button>  
																	<button type="button" class="btn btn-warning btn-sm waves-effect">Ver</button>  
																	<button type="button" class="btn btn-danger btn-sm waves-effect">Excluir</button></td>
																</tr>
																 <tr>
																	<td><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Simples Sugerido 02</td>
																	<td>2.00 <p class="m-0 text-muted font-14">Odd esperada</p></td>
																	<td>R$50<p class="m-0 text-muted font-14">Apostado</p></td>
																	<td>R$  <p class="m-0 text-muted font-14">Aguardando</p></td>
																	<td><button type="button" class="btn btn-primary btn-sm waves-effect">Editar</button>  
																	<button type="button" class="btn btn-warning btn-sm waves-effect">Ver</button>  
																	<button type="button" class="btn btn-danger btn-sm waves-effect">Excluir</button></td>
																</tr>
																 <tr>
																	<td><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Jogo Próprio 02</td>
																	<td>2.00 <p class="m-0 text-muted font-14">Odd esperada</p></td>
																	<td>R$50<p class="m-0 text-muted font-14">Apostado</p></td>
																	<td>R$  <p class="m-0 text-muted font-14">Aguardando</p></td>
																	<td><button type="button" class="btn btn-primary btn-sm waves-effect">Editar</button>  
																	<button type="button" class="btn btn-warning btn-sm waves-effect">Ver</button>  
																	<button type="button" class="btn btn-danger btn-sm waves-effect">Excluir</button></td>
																</tr>
																 <tr>
																	<td><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Jogo Próprio 03</td>
																	<td>2.00 <p class="m-0 text-muted font-14">Odd esperada</p></td>
																	<td>R$50<p class="m-0 text-muted font-14">Apostado</p></td>
																	<td>R$  <p class="m-0 text-muted font-14">Aguardando</p></td>
																	<td><button type="button" class="btn btn-primary btn-sm waves-effect">Editar</button>  
																	<button type="button" class="btn btn-warning btn-sm waves-effect">Ver</button>  
																	<button type="button" class="btn btn-danger btn-sm waves-effect">Excluir</button></td>
																</tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <?php include 'layouts/footer.php'; ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->
