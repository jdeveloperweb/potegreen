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
                                            <h4 class="mt-0 m-b-30 header-title"> Banking situation on a given day. </h4>

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
                                            $resultado2 = mysqli_query($conectar, "SELECT *, sum(invest), sum(retorno) FROM multiplassug WHERE data = '$data'");
                                            $linhas2 = mysqli_num_rows($resultado2);
                                            $invest = 0;
                                            $retorno = 0.0;
                                            $resdia = 0;   
                                            while($linhas3 = mysqli_fetch_array($resultado2)){
                                                $invest = $invest + $linhas3['sum(invest)'];
                                                $retorno = $retorno + number_format($linhas3['sum(retorno)']/100, 2, ",", ".");
                                                $resdia = number_format(($linhas3['sum(retorno)']/100)-$invest, 2, ",", ".");

                                             }

                                            ?>
                                            <p class="text-muted m-b-30 font-14"> Banking result on the day <strong><?php echo date(('M, d'), strtotime($data)); ?></strong>, counting the games already processed by Multiplagreen.
                                            <?php if ($resdia>= 0){?>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="card m-b-20">
                                                    <div class="card-body">
                                                        <div class="color-box bg-success">
                                                            Obtained  <?php echo $resdia;?> % of the total banking on <?php echo date(('F, d'), strtotime($data)); ?><footer class="blockquote-footer text-white"><cite>without counting possible cash out</cite></footer>
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
                                                        Obtidos <?php echo $resdia;?> % do total da banca em <?php echo date(('d/m/Y'), strtotime($data)); ?> <footer class="blockquote-footer text-white"><cite>sem contabilizar possíveis cash out</cite></footer>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></br>
                                            <?php
                                            }?>
                                            <div class="col-lg-4">

                                            </div>


                                            </br>To view the situation on a specific date, select the day:
                                            <form class="form-horizontal" method="GET" action="administrador.php?link=12">
                                                <div class="form-group">
                                                    <div>
                                                        <div class="input-group col-lg-4">
                                                            <input class="input-group " id="link" name="link" type="hidden" value="12" />
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
                                                            <p class="text-align-center"> <button type="submit" class="btn btn-primary">Search</button></br></p>


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
                                                            $resultado4 = mysqli_query($conectar, "SELECT * FROM multiplassug WHERE data = '$data'");
                                                            $linhas4 = mysqli_num_rows($resultado4);
                                                            
                                                            while ($linhas4 = mysqli_fetch_array($resultado4)) {
                                                                $encoding = mb_internal_encoding();
                                                                echo "<tr> ";
                                                                $datacad4 = date(('M, d'), strtotime($linhas4['data']));
                                                                echo "<td><i class='mdi mdi-checkbox-blank-circle text-blue-grey'></i>" . $datacad4 . "</td>";
                                                                echo "<td><p text-transform: capitalize class='m-0 text-muted font-14 uppercase'>Multiple Ticket </strong></p></td>";
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
                                                                echo "<td> <p class='m-0 text-muted font-14'>" . number_format($linhas4['retorno']/100, 2, ",", ".") . "</p></td>	";
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