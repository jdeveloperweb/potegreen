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

                      <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-lg-12">
                                   

                                    <div class="card m-b-20">
                                        <div class="card-body">
																				        
<div class="card m-b-20">
                                        <div class="card-body"></br></br>
                                            <h4 class="mt-0 m-b-30 header-title">Jogos Simples selecionados pelo Multiplagreen </h4>

<!-- RETORNA DO BANCO AS MULTIPLAS CADASTRADAS QUE AINDA NÃO FORAM PROCESSADAS -->
<?php
	
	
$data = date("d/m/Y");

$data = explode("/", $data);

list($dia, $mes, $ano) = $data;

$dia_antes = $dia-1;

$data = "$ano-$mes-$dia";
 
 
	$hoje= date('d-m-Y');
	$resultado2=mysql_query("SELECT * FROM jogosug WHERE data >= '$data' ORDER  BY confianca DESC");
	$linhas2=mysql_num_rows($resultado2);
	
?>	
<p class="text-muted m-b-30 font-14"> Lista dos jogos selecionados que ocorrerão a partir de <strong><?php echo date("d")." de ".$meses[date('m')]; ?></strong>. Você pode cadastrar uma entrada para sua gestão de banca caso queira seguir alguma dessas dicas que seguem. Basta clicar em "Cadastrar".</p>
											

                                            <div class="table-responsive">
                                                <table class="table table-vertical mb-0">
												<thead>
                                                    <tr>
                                                        <th>Hora</th>
                                                        <th class="col-sm-3">Jogo</th>
                                                        <th>Odd</th>
                                                        <th>Status</th>
                                                        <th>Confiança</th>
                                                        <th>Entrada Simples</th>
                                                        <th>Link Bet365</th>
																		<th></th>
                                                    </tr>
                                                </thead>
															 <tbody>
															<?php  while($linhas2 = mysql_fetch_array($resultado2)){	
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
																		 else if($linhas2['status']=='Em análise') {
																		 echo "<td><span class='badge badge-pill badge-primary'>".$linhas2['status']."</span></td>";}

																		else {
															echo "<td><span class='badge badge-pill badge-warning'>".$linhas2['status']."</span></td>";}	 
															if( $linhas2['confianca'] == 0 ) {
																		 ?>	
																	<td><i class="mdi mdi-star-half   "></i><i class="mdi mdi-star-outline  "></i><i class="mdi mdi-star-outline  "></i><i class="mdi mdi-star-outline  "></i><i class="mdi mdi-star-outline  "></i></td>
															
															<?php }
															else if($linhas2['confianca'] == 1 ) {
																		 ?>	
																	<td><i class="mdi mdi-star   "></i><i class="mdi mdi-star-outline  "></i><i class="mdi mdi-star-outline  "></i><i class="mdi mdi-star-outline  "></i><i class="mdi mdi-star-outline  "></i></td>
															
															<?php }
															else if($linhas2['confianca'] == 2) {
																		 ?>	
																	<td><i class="mdi mdi-star   "></i><i class="mdi mdi-star-half"></i><i class="mdi mdi-star-outline "></i><i class="mdi mdi-star-outline  "></i><i class="mdi mdi-star-outline  "></i></td>
															
															<?php }
															else if($linhas2['confianca'] == 3) {
																		 ?>	
																	<td><i class="mdi mdi-star   "></i><i class="mdi mdi-star "></i><i class="mdi mdi-star-outline "></i><i class="mdi mdi-star-outline  "></i><i class="mdi mdi-star-outline  "></i></td>
															
															<?php }
															else if($linhas2['confianca'] == 4 ) {
																		 ?>	
																	<td><i class="mdi mdi-star   "></i><i class="mdi mdi-star "></i><i class="mdi mdi-star-half "></i><i class="mdi mdi-star-outline "></i><i class="mdi mdi-star-outline "></i></td>
															
															<?php }

																	    else if($linhas2['confianca'] == 5 ) {
																		 ?>	
																	<td><i class="mdi mdi-star   "></i><i class="mdi mdi-star  "></i><i class="mdi mdi-star "></i><i class="mdi mdi-star-outline  "></i><i class="mdi mdi-star-outline  "></i></td>
															
															<?php }
															 else if($linhas2['confianca'] == 6 ) {
																		 ?>	
																	<td><i class="mdi mdi-star   "></i><i class="mdi mdi-star  "></i><i class="mdi mdi-star "></i><i class="mdi mdi-star-half  "></i><i class="mdi mdi-star-outline  "></i></td>
															
															<?php }
																		 else if($linhas2['confianca'] == 7 ) {
																		 ?>	
																	<td><i class="mdi mdi-star   "></i><i class="mdi mdi-star   "></i><i class="mdi mdi-star "></i><i class="mdi mdi-star"></i><i class="mdi mdi-star-outline  "></i></td>
															
															<?php }
																		 else if($linhas2['confianca'] == 8 ) {
																		 ?>	
																	<td><i class="mdi mdi-star   "></i><i class="mdi mdi-star   "></i><i class="mdi mdi-star   "></i><i class="mdi mdi-star  "></i><i class="mdi mdi-star-half  "></i></td>
															
															<?php }
																		 else if($linhas2['confianca'] == 9 ) {
																		 ?>	
																	<td><i class="mdi mdi-star   "></i><i class="mdi mdi-star   "></i><i class="mdi mdi-star   "></i><i class="mdi mdi-star   "></i><i class="mdi mdi-star   "></i></td>
															
															<?php }

																		else {
													
																		 ?>	
																	<td><i class="mdi mdi-star-outline  "></i><i class="mdi mdi-star-outline  "></i><i class="mdi mdi-star-outline  "></i><i class="mdi mdi-star-outline  "></i><i class="mdi mdi-star-outline  "></i></td>
															
															<?php }
															?>							
<?php 
 if($linhas2['status']=='Pendente') { ?> 
															<td><a href='administrador.php?link=10&tipo=Simples&id=<?php echo $linhas2['id']; ?>'><button type='button' class='btn btn-success btn-sm waves-effect'><i class="fa fa-check  "></i> Cadastrar</button></a>
															<td><a href='<?php echo $linhas2['link']; ?>' target='_blank'><button type='button' class='btn btn-outline-success btn-sm waves-effect'><i class="fa fa-external-link   "></i> Bet365</button></a><td>
															 </tr>
															<?php }
															
																		else {	?> 
															<td><a href='#'><button type='button' class='btn btn-outline-secondary  btn-sm waves-effect' data-toggle="tooltip" data-placement="top" title="Jogo já processado"><i class="fa fa-check  "></i> Cadastrar</button></a>
															<td><a href='#' ><button type='button' class='btn btn-outline-secondary btn-sm waves-effect' data-toggle="tooltip" data-placement="top" title="Jogo já processado"><i class="fa fa-external-link   "></i> Bet365</button></a><td>
															 </tr>
															
															<?php	}	 ?>															
															
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
