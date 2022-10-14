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
                                            <h4 class="mt-0 m-b-30 header-title">Games selected by Multiplagreen. </h4>

                                            <!-- RETORNA DO BANCO AS MULTIPLAS CADASTRADAS QUE AINDA NÃO FORAM PROCESSADAS -->
                                            <?php


                                            $data = date("d/m/Y");

                                            $data = explode("/", $data);

                                            list($dia, $mes, $ano) = $data;

                                            $dia_antes = $dia - 1;

                                            $data = "$ano-$mes-$dia";


                                            $hoje = date('d-m-Y');
                                            $resultado2 = mysqli_query($conectar, "SELECT * FROM jogosug WHERE data >= '$data' and status = 'Pendente' ORDER  BY confianca DESC");
                                            $linhas2 = mysqli_num_rows($resultado2);

                                            ?>
                                            <p class="text-muted m-b-30 font-14"> List of selected games that will take place from  <strong><?php echo  $meses[date('m')] . ", " .date("d"); ?></strong>. Please be advised that these games will only serve as a basis for the assembly of our multiples. Remember that our management is based on the results of multiples. Therefore, use in singles, doubles or triples must be done consciously. We do not take into account their profits or losses for the purposes of our management.</p>
                                            <p class="text-muted m-b-30 font-14"> To see the multiples we've prepared, just click below:</br>
                                            <a href='administrador.php?link=14'><button type='button' class='btn btn-success btn-sm waves-effect'><i class="fa fa-external-link   "></i> See multiples</button></a></p>

                                            <div class="table-responsive">
                                                <table class="table table-vertical mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Time</th>
                                                            <th class="col-sm-3">Match</th>
                                                            <th>Odd</th>
                                                            <th>Status</th>
                                                            <th>Bet365 Link</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php while ($linhas2 = mysqli_fetch_array($resultado2)) {
                                                            $encoding = mb_internal_encoding();
                                                            echo "<tr> ";
                                                            //converte hora min seg apenas para hora e minuto
                                                            $yourtime = $linhas2['hora'];
                                                            preg_match("/([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})/", $yourtime, $match);
                                                            $hour = $match[1];
                                                            $min = $match[2];
                                                            $sec = $match[3];
                                                            $hora = $hour . ":" . $min;

                                                            echo "<td><i class='mdi mdi-checkbox-blank-circle text-blue-grey'></i>" . $hora . "</td>";
                                                            echo "<td><p text-transform: capitalize class='m-0 text-muted font-14 uppercase'>" . mb_strtoupper($linhas2['timea'], $encoding) . "  v " . mb_strtoupper($linhas2['timeb'], $encoding) . " </br><strong>" . mb_strtoupper($linhas2['resultado'], $encoding) . " </strong></p></td>";
                                                            echo "<td> <p class='m-0 text-muted font-14'>@" . $linhas2['oddini'] / 100 . "</p></td>	";
                                                            if ($linhas2['status'] == 'Vencida') {
                                                                echo "<td><span class='badge badge-pill badge-success'>" . $linhas2['status'] . "</span></td>";
                                                            } else if ($linhas2['status'] == 'Perdida') {
                                                                echo "<td><span class='badge badge-pill badge-danger'>" . $linhas2['status'] . "</span></td>";
                                                            } else if ($linhas2['status'] == 'Em análise') {
                                                                echo "<td><span class='badge badge-pill badge-primary'>" . $linhas2['status'] . "</span></td>";
                                                            } else {
                                                                echo "<td><span class='badge badge-pill badge-warning'>" . $linhas2['status'] . "</span></td>";
                                                            }
                                                        ?>

                                                            <?php
                                                            if ($linhas2['status'] == 'Pendente') { ?>

                                                                <td><a href='<?php echo $linhas2['link']; ?>' target='_blank'><button type='button' class='btn btn-outline-success btn-sm waves-effect'><i class="fa fa-external-link   "></i> Bet365</button></a>
                                                                <td>
                                                                    </tr>
                                                                <?php } else {    ?>
                                                                <td><a href='#'><button type='button' class='btn btn-outline-secondary btn-sm waves-effect' data-toggle="tooltip" data-placement="top" title="Jogo já processado"><i class="fa fa-external-link   "></i> Bet365</button></a>
                                                                <td>
                                                                    </tr>

                                                                <?php    }     ?>

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