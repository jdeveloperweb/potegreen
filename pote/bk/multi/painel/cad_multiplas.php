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
			                                    <form class="form-horizontal" method="POST" action="processa/proc_cad_multipla.php">


			                                        <div class="form-group mb-0">
			                                            <div class="form-group col-lg-12"><input type="hidden" name="CCC" id="CCC" value="TECCSTE" /></div>
			                                            <?php
                                                        $data = date("d/m/Y");

                                                        $data = explode("/", $data);

                                                        list($dia, $mes, $ano) = $data;

                                                        $dia = $dia - 1;

                                                        $data = "$ano-$mes-$dia";


                                                        $hoje = date('d-m-Y');
                                                        $resultado = mysqli_query($conectar, "SELECT * FROM jogosug WHERE data >= '$data' and status='Pendente'");
                                                        $linhas = mysqli_num_rows($resultado);
                                                        ?> <h5>Cadastrar múltipla de Odd <span class="badge badge-pill badge-success">@<span id="TotCubagem"> 0</span></span></h5>
			                                            <div>1º - Escolha duas ou mais opções abaixo ( segurando tecla "Ctrl") </br></div>
			                                            <div>2º - Clique em "Cadastrar Múltipla" </br></div>
			                                            <hr>

			                                            <div class="form-group">
			                                                <label>Data da múltipla</label>
			                                                <div>
			                                                    <div class="input-group col-lg-4">
			                                                        <input type="date" class="form-control" name="dia">
			                                                        <div class="input-group-append">
			                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
			                                                        </div>
			                                                    </div><!-- input-group -->
			                                                </div>
			                                            </div>
			                                            <label>Selecionar jogos da múltipla</label>
			                                            <div class="form-group col-lg-8">
			                                                <select class="form-control" name="idservico[]" id="idservico" multiple size="30" style="height: 100%;">
			                                                    <?php while ($linhas = mysqli_fetch_array($resultado)) {
                                                                    echo "<option data-valor='" . $linhas['oddini'] / 100 . "' value='" . $linhas['id'] . "' name='id'>" . $linhas['timea'] . " v " . $linhas['timeb'] . " || " . $linhas['resultado'] . " - @" . $linhas['oddini'] / 100 ."</option>";
                                                                } ?>
			                                                </select>
			                                            </div>
			                                            <div class="form-group col-lg-12"><input type="hidden" name="valor" id="valor" />

			                                                </br>
			                                                <p class="text-align-center"> <button type="submit" class="btn btn-success">Cadastrar Múltipla</button></br></p>
			                                            </div>
			                                        </div>
			                                </div>
			                                <div class="form-group">

			                                </div>

			                                <script>
			                                    document.addEventListener("DOMContentLoaded", () => {
			                                        document.querySelector("#idservico").addEventListener("change", (e) => {
			                                            let total = 1;
			                                            for (let x of e.target.options) {
			                                                let val = parseFloat(x.dataset.valor.replace(',', '.'));
			                                                total *= x.selected ? val : 1;
			                                            }
			                                            document.querySelector("#valor").value = total.toFixed(2).replace('.', ',');
			                                            document.getElementById("TotCubagem").innerHTML = total.toFixed(2);
			                                        });
			                                    });
			                                </script>

			                                </form>
			                                <div class="card m-b-20">
			                                    <div class="card-body"></br></br>
			                                        <h4 class="mt-0 m-b-30 header-title">Múltiplas ja cadastradas</h4>

			                                        <!-- RETORNA DO BANCO AS MULTIPLAS CADASTRADAS QUE AINDA NÃO FORAM PROCESSADAS -->
			                                        <?php

                                                    $resultado2 = mysqli_query($conectar, "SELECT * FROM multiplassug WHERE data >= '$data' status ='Pendente' ORDER BY id DESC");
                                                    $linhas2 = mysqli_num_rows($resultado2);

                                                    ?>



			                                        <div class="table-responsive">
			                                            <table class="table table-vertical mb-0">
			                                                <thead>
			                                                    <tr>
			                                                        <th>Id</th>
			                                                        <th>Jogos</th>
			                                                        <th>Odd</th>
			                                                        <th>Status</th>
			                                                        <th></th>
			                                                        <th></th>
			                                                        <th></th>
			                                                        <th></th>
			                                                    </tr>
			                                                </thead>
			                                                <tbody>
			                                                    <?php while ($linhas3 = mysqli_fetch_array($resultado2)) {
                                                                    echo "<tr>";
                                                                    echo "<td><i class='mdi mdi-checkbox-blank-circle text-blue-grey'></i>" . $linhas3['id'] . "</td>";
                                                                    echo "<td><p class='m-0 text-muted font-14'>" . $linhas3['descricao'] . "</p></td>";
                                                                    echo "<td> <p class='m-0 text-muted font-14'>@" . $linhas3['oddtotal'] / 100 . "</p></td>	";
                                                                    if ($linhas3['status'] == 'Vencida') {
                                                                        echo "<td><span class='badge badge-pill badge-success'>" . $linhas3['status'] . "</span></td>";
                                                                    } else if ($linhas3['status'] == 'Perdida') {
                                                                        echo "<td><span class='badge badge-pill badge-danger'>" . $linhas3['status'] . "</span></td>";
                                                                    } else if ($linhas3['status'] == 'Em análise') {
                                                                        echo "<td><span class='badge badge-pill badge-primary'>" . $linhas3['status'] . "</span></td>";
                                                                    } else {
                                                                        echo "<td><span class='badge badge-pill badge-warning'>" . $linhas3['status'] . "</span></td>";
                                                                    }
                                                                ?>
			                                                        <td><a href='processa/proc_edit_multipla.php?status=1&id=<?php echo $linhas3['id']; ?>'><button type='button' class='btn btn-success btn-sm waves-effect'>Vencida</button></a>
			                                                            <a href='processa/proc_edit_multipla.php?status=2&id=<?php echo $linhas3['id']; ?><button type=' button' class='btn btn-danger btn-sm waves-effect'>Perdida</button></a>
			                                                            <a href='processa/proc_edit_multipla.php?status=3&id=<?php echo $linhas3['id']; ?><button type=' button' class='btn btn-primary btn-sm waves-effect'>Aprovada</button></a>
			                                                            <a href='processa/proc_apagar_multipla.php?&id=<?php echo $linhas3['id']; ?><button type=' button' class='btn btn-secondary btn-sm waves-effect'>Excluir</button>
			                                                        </td></a>
			                                                        </tr>
			                                                    <?php } ?>

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