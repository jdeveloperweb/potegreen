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

			                                    <div class="card m-b-20">
			                                        <div class="card-body"></br></br>
			                                            <h4 class="mt-0 m-b-30 header-title"> Resultados das Múltiplas selecionadas pelo Multiplagreen </h4>

			                                            <!-- RETORNA DO BANCO AS MULTIPLAS CADASTRADAS QUE AINDA NÃO FORAM PROCESSADAS -->
			                                            <?php

                                                        $novadata =  @$_GET['ndate'];
                                                        $data = date("d/m/Y");

                                                        $data = explode("/", $data);

                                                        list($dia, $mes, $ano) = $data;

                                                        $dia_antes = $dia - 1;

                                                        if ($novadata == "") {
                                                            $data = "$ano-$mes-$dia";
                                                        } else {
                                                            $data = $novadata;
                                                        }


                                                        $hoje = date('d-m-Y');
                                                        $resultado2 = mysqli_query($conectar, "SELECT * FROM multiplassug WHERE data = '$data'");
                                                        $linhas2 = mysqli_num_rows($resultado2);

                                                        ?>
			                                            <p class="text-muted m-b-30 font-14"> Resultados do dia <strong><?php echo date(('d/m/Y'), strtotime($data)); ?></strong>.</br>
			                                                Para ver o resultado de alguma outra data, selecione o dia
			                                            <form class="form-horizontal" method="GET" action="administrador.php?link=3">
			                                                <div class="form-group">
			                                                    <div>
			                                                        <div class="input-group col-lg-4">
			                                                            <input class="input-group " id="link" name="link" type="hidden" value="3" />
			                                                            <input type="date" class="form-control" name="ndate">
			                                                            <div class="input-group-append">
			                                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
			                                                            </div>
			                                                        </div><!-- input-group -->
			                                                    </div>
			                                                </div>

			                                                <div class="form-group mb-0">

			                                                    <div>
			                                                        <div class="form-group col-lg-12">
			                                                            <p class="text-align-center"> <button type="submit" class="btn btn-primary">Buscar</button></br></p>


			                                                        </div>
			                                                    </div>
			                                                </div>
			                                                <div class="form-group">

			                                                </div>

			                                            </form>



			                                            </p>

			                                            <?php if ($linhas2 < 1) {
                                                            echo "<p class='text-muted m-b-30 font-14'> Não temos resultados cadastrados nesta data. </br></br></br></br></br> Obs: Para jogos ateriores a 31/04/2021, favor solicitar a um de nossos atendentes. Essa versão de painel administrativo está no ar desde 31/04/2021 apesar de termos contabilizados jogos desde outubro de 2020.</p>";
                                                        } else { ?>
			                                                <div class="table-responsive">
			                                                    <table class="table table-vertical mb-0">
			                                                        <thead>
			                                                            <tr>
			                                                                <th class="col-sm-1">Hora</th>
			                                                                <th class="col-sm-5">Jogo</th>
			                                                                <th>Odd</th>
			                                                                <th>Status</th>
			                                                                <th>Retorno</th>


			                                                            </tr>
			                                                        </thead>
			                                                        <tbody>
			                                                            <?php while ($linhas2 = mysqli_fetch_array($resultado2)) {
                                                                            $encoding = mb_internal_encoding();
                                                                            echo "<tr> ";


                                                                            echo "<td><i class='mdi mdi-checkbox-blank-circle text-blue-grey'></i>" . $linhas2['data'] . "</td>";
                                                                            echo "<td><p text-transform: capitalize class='m-0 text-muted font-14 uppercase'>" . mb_strtoupper($linhas2['descricao'], $encoding) . " </strong></p></td>";
                                                                            echo "<td> <p class='m-0 text-muted font-14'>@" . $linhas2['oddtotal'] / 100 . "</p></td>	";
                                                                            if ($linhas2['status'] == 'Vencida') {
                                                                                echo "<td><span class='badge badge-pill badge-success'>" . $linhas2['status'] . "</span></td>";
                                                                            }  else if($linhas2['status']=='Cash out') {
																		        echo "<td><span class='badge badge-pill badge-primary'>".$linhas2['status']."</span></td>";
                                                                            }
                                                                            else if ($linhas2['status'] == 'Perdida') {
                                                                                echo "<td><span class='badge badge-pill badge-danger'>" . $linhas2['status'] . "</span></td>";
                                                                            } else if ($linhas2['status'] == 'Em análise') {
                                                                                echo "<td><span class='badge badge-pill badge-primary'>" . $linhas2['status'] . "</span></td>";
                                                                            } else {
                                                                                echo "<td><span class='badge badge-pill badge-warning'>" . $linhas2['status'] . "</span></td>";
                                                                            }
                                                                            	echo "<td> <p class='m-0 text-muted font-14'>".$linhas2['retorno']/100 ." un</p></td>	";
                                                                        ?>
			                                                                </tr>


			                                                            <?php } ?>

			                                                        </tbody>
			                                                    </table>
			                                                </div> <?php } ?>
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