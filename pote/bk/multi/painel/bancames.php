﻿<?php
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
                                            <h4 class="mt-0 m-b-30 header-title"> Situação da banca em um determinado período. </h4>

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


                                            $data_incio = mktime(0, 0, 0, date('m') , 1 , date('Y'));
                                            $data_fim = mktime(23, 59, 59, date('m'), date("t"), date('Y'));
                                           
                                            $novoini =  @$_GET['nini'];
                                            $inimes = date('d/m/Y',$data_incio);
                                            $inimes = explode("/", $inimes);
                                            list($dia, $mes, $ano) = $inimes;
                                            if ($novoini == "") {
                                                $inimes = "$ano-$mes-$dia";
                                            } else {
                                                $inimes = $novoini;
                                            }

                                            $novofim =  @$_GET['nfim'];
                                            $fimes = date('d/m/Y',$data_fim);
                                            $fimes = explode("/", $fimes);
                                            list($dia, $mes, $ano) = $fimes;
                                            if ($novofim == "") {
                                                $fimes = "$ano-$mes-$dia";
                                            } else {
                                                $fimes = $novofim;
                                            }



                                            $hoje = date('d-m-Y');
                                            $resultado2 = mysqli_query($conectar, "SELECT *, sum(invest), sum(retorno) FROM multiplassug WHERE  data between '$inimes' and '$fimes'");
                                            $linhas2 = mysqli_num_rows($resultado2);
                                            $invest = 0;
                                            $retorno = 0;
                                            $resdia = 0;   
                                            while($linhas3 = mysqli_fetch_array($resultado2)){
                                                $invest = $invest + $linhas3['sum(invest)'];
                                                $retorno = $retorno + $linhas3['sum(retorno)'];
                                                $resdia = $retorno - $invest;

                                             }

                                            ?>
                                            <p class="text-muted m-b-30 font-14"> Resultado da banca de <strong><?php echo date(('d/m/Y'), strtotime($inimes)); ?></strong> a <strong><?php echo date(('d/m/Y'), strtotime($fimes)); ?></strong>, contabilizando os jogos já processados pelo Multiplagreen.
                                            <?php if ($resdia>= 0){?>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="card m-b-20">
                                                    <div class="card-body">
                                                        <div class="color-box bg-success">
                                                            Obtidos <?php echo $resdia;?> % do total da banca de <strong><?php echo date(('d/m/Y'), strtotime($inimes)); ?></strong> a <strong><?php echo date(('d/m/Y'), strtotime($fimes)); ?></strong> <footer class="blockquote-footer text-white"><cite>sem contabilizar possíveis cash out</cite></footer>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></br>
                                            <?php
                                            } else { ?>
                                                <div class="col-xl-6 col-md-6">
                                                <div class="card m-b-20">
                                                    <div class="card-body">
                                                        <div class="color-box bg-danger">
                                                            Obtidos <?php echo $resdia;?> % do total da banca de <strong><?php echo date(('d/m/Y'), strtotime($inimes)); ?></strong> a <strong><?php echo date(('d/m/Y'), strtotime($fimes)); ?></strong><footer class="blockquote-footer text-white"><cite>sem contabilizar possíveis cash out</cite></footer>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></br>
                                            <?php
                                            }?>
                                            <div class="col-lg-4">

                                            </div>


                                            </br>Para ver a situação em determinado período, selecione a data de início e de fim desejados:
                                            <form class="form-horizontal" method="GET" action="administrador.php?link=13">
                                                <div class="form-group">
                                                    <div>
                                                        <div class="input-group col-lg-5">
                                                            <input class="input-group " id="link" name="link" type="hidden" value="13" />
                                                            <label for="example-date-input" class="col-sm-2 col-form-label">Início:</label><input type="date" class="form-control" name="nini">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                            </div>
                                                            <label for="example-date-input" class="col-sm-2 col-form-label">Fim:</label><input type="date" class="form-control" name="nfim">
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
                                                echo "Não temos resultados cadastrados nesta data. </br></br></br></br></br> Obs: Para jogos ateriores a 31/04/2021, <a href='https://multiplagreen.com/resultados.php'  target='_blank'>clique aqui.</a>";
                                            } else { ?>
                                                <div class="table-responsive">
                                                    <table class="table table-vertical mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th class="col-sm-2">Hora</th>
                                                                <th class="col-sm-2">Jogo</th>
                                                                <th>Odd</th>
                                                                <th>Status</th>
                                                                <th>Investido</th>
                                                                <th>Retorno</th>


                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            $resultado4 = mysqli_query($conectar, "SELECT * FROM multiplassug WHERE data between '$inimes' and '$fimes'");
                                                            $linhas4 = mysqli_num_rows($resultado4);
                                                            
                                                            while ($linhas4 = mysqli_fetch_array($resultado4)) {
                                                                $encoding = mb_internal_encoding();
                                                                echo "<tr> ";


                                                                echo "<td><i class='mdi mdi-checkbox-blank-circle text-blue-grey'></i>" . $linhas4['data'] . "</td>";
                                                                echo "<td><p text-transform: capitalize class='m-0 text-muted font-14 uppercase'>Múltipla </strong></p></td>";
                                                                echo "<td> <p class='m-0 text-muted font-14'>@" . $linhas4['oddtotal'] / 100 . "</p></td>	";
                                                                if ($linhas4['status'] == 'Vencida') {
                                                                    echo "<td><span class='badge badge-pill badge-success'>" . $linhas4['status'] . "</span></td>";
                                                                } else if ($linhas4['status'] == 'Perdida') {
                                                                    echo "<td><span class='badge badge-pill badge-danger'>" . $linhas4['status'] . "</span></td>";
                                                                } else if ($linhas4['status'] == 'Em análise') {
                                                                    echo "<td><span class='badge badge-pill badge-primary'>" . $linhas4['status'] . "</span></td>";
                                                                } else {
                                                                    echo "<td><span class='badge badge-pill badge-warning'>" . $linhas4['status'] . "</span></td>";
                                                                }
                                                                echo "<td> <p class='m-0 text-muted font-14'>" . $linhas4['invest'] . "</p></td>	";
                                                                echo "<td> <p class='m-0 text-muted font-14'>" . $linhas4['retorno'] . "</p></td>	";
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