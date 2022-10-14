			<?php include 'seguranca.php'; ?>
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
																				<form class="form-horizontal" method="POST" action="processa/proc_cad_jogos.php">	
										<div class="form-group">
                                                    <label>Data do(s) Jogo(s)</label>
                                                    <div>
                                                        <div class="input-group col-lg-4">
                                                            <input type="date" class="form-control" name="dia">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                            </div>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>

                                            <div class="form-group mb-0">
                                                    
                                                    <div>
                                                        <div class="form-group col-lg-12">
											 <p class= "text-align-center"> <button type="submit" class="btn btn-primary">Cadastrar jogo(s) abaixo</button></br></p>
												 <table id="employee_table" align=left>
													<tr id="row1">
													<td><input type="time" class="form-control" maxlength="25"  name="timep[]"   id="timep" /></td>
                                            <td><input type="text" class="form-control" maxlength="25"  name="timea[]"  placeholder="TIMEA" id="timeA" /></td>
														<td><input type="text" class="form-control" maxlength="25" name="timeb[]"  placeholder="TIMEB" id="timeB" /></td>
														<td><input type="text" class="form-control" maxlength="255" name="link[]"  placeholder="http://" id="link" /></td>
														
														  <td width="25%"><select class="form-control " name="resultado[]"  >
                                                        <option >Select</option>
                                                           <option value="Time1">Time1 vence</option>
                                                           <option value="Time1 1T">Time1 1T</option>
                                                            <option value="Time2 1T">Time 2 vence</option>
                                                            <option value="Time2 1T">Time2 1T</option>
                                                            <option value="Empate">Empate</option>
                                                            <option value="Time1 ou X">Time1 ou Empate</option>
                                                            <option value="Time2 ou X">Time2 ou Empate</option>
                                                            <option value="+1,5 gols">+1,5 gols</option>
                                                            <option value="+ 2,5 gols">+ 2,5 gols</option>
                                                            <option value="Handcap -0.5 , -1.0">Handcap -0.5 , -1.0</option>
                                                            <option value="Ambos marcam">Ambos marcam</option>
                                                            <option value="- 3,5 gols">- 3,5 gols</option>
                                                            <option value="Time1 hand -1,5">Time1 hand -1,5</option>
                                                            <option value="Time2 hand -1,5">Time2 hand -1,5</option>
                                                        </optgroup>
                                                    </select></td>
														<td><input type="number"  step="0.01"  min="1.00"class="form-control" maxlength="25" name="odd[]"  placeholder="1.00" id="odd" /></td>
													   <td><button type="button" class="btn btn-success waves-effect waves-light" onclick="add_row();" value="ADD ROW"><i class="mdi mdi-plus "></i></button></td>
													   </tr>
													  </table>
													  
                                                        </div> 
                                                    </div>
                                                </div><div class="form-group">

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

                <?php include 'layouts/footer.php'; ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->
