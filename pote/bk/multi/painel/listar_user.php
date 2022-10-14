<?php
            $meses = array(
                '01' => 'Janeiro',
                '02' => 'Fevereiro',
                '03' => 'Março',
                '04' => 'Abril',
                '05' => 'Maio',
                '06' => 'Junho',
                '07' => 'Julho',
                '08' => 'Agosto',
                '09' => 'Setembro',
                '10' => 'Outubro',
                '11' => 'Novembro',
                '12' => 'Dezembro'
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
			                            <a class="nav-link waves-effect toggle-search" href="#" data-target="#search-wrap">
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
			                            <a class="nav-link dropdown-toggle arrow-none waves-effect text-muted" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
			                                Português <img src="public/assets/images/flags/brasil_flag.jpg" class="ml-2" height="16" alt="" />
			                            </a>
			                            <div class="dropdown-menu dropdown-menu-right language-switch">
			                                <a class="dropdown-item" href="#"><img src="public/assets/images/flags/us_flag.jpg" alt="" height="16" /><span> English </span></a>
			                                <a class="dropdown-item" href="#"><img src="public/assets/images/flags/germany_flag.jpg" alt="" height="16" /><span> German </span></a>
			                                <a class="dropdown-item" href="#"><img src="public/assets/images/flags/french_flag.jpg" alt="" height="16" /><span> French </span></a>
			                                <a class="dropdown-item" href="#"><img src="public/assets/images/flags/spain_flag.jpg" alt="" height="16" /><span> Spanish </span></a>
			                            </div>
			                        </li>
			                        <!-- notification-->

			                        <!-- User-->
			                        <li class="list-inline-item dropdown notification-list">
			                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
			                                <img src="public/assets/images/users/<?php echo $_SESSION['usuarioAvatar']; ?>" alt="user" class="rounded-circle">
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

                                       
                                        <?php
                                        $resultado3 = mysqli_query($conectar, "SELECT * FROM user ORDER  BY id DESC");
                                        $linhas3 = mysqli_num_rows($resultado3);
                                        ?>
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%">

                                            <thead>
                                                <tr>
                                                    <td>Nome</td>
                                                    <td>E-mail</td>
                                                    <td>Status</td>
                                                    <td>Plano</td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <?php
                                            while ($row = mysqli_fetch_array($resultado3)) {
                                                // echoing the fetched data from the database per column names
                                                echo '  
                               <tr>
                                    <td>' . $row["username"] . '</td>  
                                    <td>' . $row["email"] . '</td> 
                                    <td>' . $row["status"] . '</td>   
                                    <td>' . $row["plano"] . '</td> 
                                    <td>  <a href=administrador.php?link=22&id='.$row['id'].'><button type="button" class="btn btn-warning btn-sm waves-effect">Editar</button></a> 
                                    <a href=processa/proc_apagar_usuario.php?id='.$row['id'].'><button type="button" class="btn btn-danger btn-sm waves-effect">Excluir</button></a></td>  
                               </tr>  
                               ';
                                            }
                                            ?>
                                        </table>

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