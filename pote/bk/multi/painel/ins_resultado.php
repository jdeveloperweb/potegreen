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

                      <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-lg-12">
                                   

                                    <div class="card m-b-20">
                                        <div class="card-body">
																				        
<div class="card m-b-20">
                                        <div class="card-body"></br></br>
                                            <h4 class="mt-0 m-b-30 header-title">Jogos selecionados </h4> <p class="text-muted m-b-30 font-14"> Lista dos jogos que ainda não foram avaliados ou que serão realizados a partir de hoje.</p>

<!-- RETORNA DO BANCO AS MULTIPLAS CADASTRADAS QUE AINDA NÃO FORAM PROCESSADAS -->
<?php
$data = date("d/m/Y");

$data = explode("/", $data);

list($dia, $mes, $ano) = $data;

$dia = $dia-1;

$data = "$ano-$mes-$dia";
 
 
	$hoje= date('d-m-Y');
	$resultado2=mysqli_query($conectar, "SELECT * FROM jogosug WHERE data >= '$data' OR status =  'Pendente' ORDER BY status ASC, data DESC, hora ASC");
	$linhas2=mysqli_num_rows($resultado2);
	
?>	

											

                                            <div class="table-responsive">
                                                <table class="table table-vertical mb-0">
												<thead>
                                                    <tr>
                                                        <th>Hora</th>
                                                        <th class="col-sm-3">Jogo</th>
                                                        <th>Odd</th>
                                                        <th>Status</th>
                                                        <th></th>
                                                        <th></th>
																		<th></th>
                                                    </tr>
                                                </thead>
															 <tbody>
															<?php  
while($linhas2 = mysqli_fetch_array($resultado2)){	
															        $encoding = mb_internal_encoding();
																	echo "<tr> ";
																	//converte hora min seg apenas para hora e minuto
																	$yourtime = $linhas2['hora'];
																	preg_match("/([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})/", $yourtime, $match);
																	$hour = $match[1];
																	$min = $match[2];
																	$sec = $match[3];
																	$hora = $hour.":".$min;
																	
																	echo "<td><i class='mdi mdi-checkbox-blank-circle text-blue-grey'></i>".$hora."</td>";
																	echo "<td><p text-transform: capitalize class='m-0 text-muted font-14 uppercase'>".mb_strtoupper($linhas2['timea'],$encoding)."  v ".mb_strtoupper($linhas2['timeb'],$encoding)." </br><strong>".mb_strtoupper($linhas2['resultado'],$encoding)." </strong></p></td>";
																	echo "<td> <p class='m-0 text-muted font-14'>@".$linhas2['oddini']/100 ."</p></td>	";
																	 if($linhas2['status']=='Vencida') {
																		 echo "<td><span class='badge badge-pill badge-success'>".$linhas2['status']."</span></td>";}

																	    else if($linhas2['status']=='Perdida') {
																		 echo "<td><span class='badge badge-pill badge-danger'>".$linhas2['status']."</span></td>";}
																		 
																		 else if($linhas2['status']=='Anulado') {
																		 echo "<td><span class='badge badge-pill badge-blue-grey'>".$linhas2['status']."</span></td>";}
																		 else if($linhas2['status']=='Em análise') {
																		 echo "<td><span class='badge badge-pill badge-primary'>".$linhas2['status']."</span></td>";}

																		else {
															echo "<td><span class='badge badge-pill badge-warning'>".$linhas2['status']."</span></td>";}	 
															
															?>
															<td><a href='processa/proc_ins_resultado.php?tipo=Simples&status=1&id=<?php echo $linhas2['id']; ?>'><button type='button' class='btn btn-success btn-sm waves-effect'><i class="fa fa-check  "></i> GREEN</button></a>
																	<a href='processa/proc_ins_resultado.php?tipo=Simples&status=2&id=<?php echo $linhas2['id']; ?>'><button type='button' class='btn btn-danger btn-sm waves-effect'><i class="fa fa-close  "></i> RED</button></a>
																	<a href='processa/proc_ins_resultado.php?tipo=Simples&status=3&id=<?php echo $linhas2['id']; ?>'><button type='button' class='btn btn-primary btn-sm waves-effect'><i class="fa   fa-circle-o  "></i> ANULADO</button></a>
															 </tr>
															 <?php }?>													
																 
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                        </div>
										
                                    </div>
									 

                                    

                                </div> <!-- end col -->

                               <!-- end col -->
                            </div> <!-- end row -->

                        </div><!-- container-fluid -->

                    </div> <!-- Page content Wrapper -->

              

                </div> <!-- content -->

                <?php include 'layouts/footer.php'; ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->
