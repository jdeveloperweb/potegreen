<?php
$meses = array(
				'01' => 'January',
				'02' => 'February',
				'03' => 'March',
				'04' => 'April',
				'05' => 'May',
				'06' => 'Juny',
				'07' => 'July',
				'08' => 'August',
				'09' => 'September',
				'10' => 'Octuber',
				'11' => 'November',
				'12' => 'December'
);
?>
<!-- Begin page -->
<div id="wrapper">


    <!-- Start right Content here -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">

        <?php include 'layouts/topbaruser.php'; ?>

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
                                            <h4 class="mt-0 m-b-30 header-title"> Banking situation in a given period. </h4>

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
                                                $retorno = $retorno + $linhas3['sum(retorno)']/100;
                                                $resdia = $retorno - $invest;

                                             }

                                            ?>
                                            <p class="text-muted m-b-30 font-14"> Banking result from <strong><?php echo date(('F, d'), strtotime($inimes)); ?></strong> to <strong><?php echo date(('F, d'), strtotime($fimes)); ?></strong>, counting the games already processed by Multiplagreen.
                                            <?php if ($resdia>= 0){?>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="card m-b-20">
                                                    <div class="card-body">
                                                        <div class="color-box bg-success">
                                                            Obtained  <?php echo $resdia;?> % of the total banking from <strong><?php echo date(('F, d'), strtotime($inimes)); ?></strong> to <strong><?php echo date(('F, d'), strtotime($fimes)); ?></strong>, <footer class="blockquote-footer text-white"><cite>without counting possible cash out</cite></footer>
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
                                                            Obtained <?php echo $resdia;?>  % of the total banking from <strong><?php echo date(('F, d'), strtotime($inimes)); ?></strong> to <strong><?php echo date(('F, d'), strtotime($fimes)); ?></strong>,<footer class="blockquote-footer text-white"><cite>without counting possible cash out</cite></footer>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></br>
                                            <?php
                                            }?>
                                            <div class="col-lg-8">

                                            </div>


                                            </br>To see the situation in a certain period, select the desired start and end date.:</br></br>
                                            <form class="form-horizontal" method="GET" action="administrador.php?link=13">
                                                <div class="form-group">
                                                    <div>
                                                        <div class="input-group col-lg-5">
                                                            <input class="input-group " id="link" name="link" type="hidden" value="13" />
                                                            <label for="example-date-input" class="col-sm-3 col-form-label">From:</label><input type="date" class="form-control" name="nini">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                            </div>
                                                            
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div>
                                                        <div class="input-group col-lg-5">
                                                            <input class="input-group " id="link" name="link" type="hidden" value="13" />
                                                            
                                                            <label for="example-date-input" class="col-sm-3 col-form-label">To:</label><input type="date" class="form-control" name="nfim">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                            </div>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0">

                                                    <div>
                                                        <div class="form-group col-lg-5">
                                                            <p class="text-align-center"> <button type="submit" class="btn-block btn-primary">Search</button></br></p>


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">

                                                </div>

                                            </form>



                                            </p>

                                            <?php if ($linhas2 < 1) {
                                                echo "We do not have results registered on this date. </br></br></br></br></br> Note: For games prior to 04/31/2021, <a href='https://multiplagreen.com/resultados.php'  target='_blank'>click here.</a>";
                                            } else { ?>
                                                <div class="table-responsive">
                                                    <table class="table table-vertical mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th class="col-sm-2">Time</th>
                                                                <th class="col-sm-2">Match</th>
                                                                <th>Odd</th>
                                                                <th>Status</th>
                                                                <th>Investment</th>
                                                                <th>Return</th>


                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            $resultado4 = mysqli_query($conectar, "SELECT * FROM multiplassug WHERE data between '$inimes' and '$fimes'");
                                                            $linhas4 = mysqli_num_rows($resultado4);
                                                            
                                                            while ($linhas4 = mysqli_fetch_array($resultado4)) {
                                                                $encoding = mb_internal_encoding();
                                                                echo "<tr> ";
                                                                $datacad4 = date(('M, d'), strtotime($linhas4['data']));
                                                                echo "<td><i class='mdi mdi-checkbox-blank-circle text-blue-grey'></i>" . $datacad4 . "</td>";
                                                                echo "<td><p text-transform: capitalize class='m-0 text-muted font-14 uppercase'>Múltipla </strong></p></td>";
                                                                echo "<td> <p class='m-0 text-muted font-14'>@" . $linhas4['oddtotal'] / 100 . "</p></td>	";
                                                                if ($linhas4['status'] == 'Vencida') {
                                                                    echo "<td><span class='badge badge-pill badge-success'> Win </span></td>";
                                                                } else if ($linhas4['status'] == 'Perdida') {
                                                                    echo "<td><span class='badge badge-pill badge-danger'> Lose </span></td>";
                                                                } else if ($linhas4['status'] == 'Em análise') {
                                                                    echo "<td><span class='badge badge-pill badge-primary'>" . $linhas4['status'] . "</span></td>";
                                                                } else {
                                                                    echo "<td><span class='badge badge-pill badge-warning'> Waiting </span></td>";
                                                                }
                                                                echo "<td> <p class='m-0 text-muted font-14'>" . $linhas4['invest'] . "</p></td>	";
                                                                echo "<td> <p class='m-0 text-muted font-14'>" . $linhas4['retorno']/100 . "</p></td>	";
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