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
                                            <h4 class="mt-0 m-b-30 header-title">Jogos selecionados pelo Multiplagreen. </h4>

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
                                            <p class="text-muted m-b-30 font-14"> Lista dos jogos selecionados que ocorrerão a partir de <strong><?php echo date("d") . " de " . $meses[date('m')]; ?></strong>. Informamos que estes jogos servirão apenas como base para a montagem das nossas múltiplas. Lembramos que nossa gestão é baseada nos resultados das múltiplas. Logo, o uso em jogos individuais, duplas ou triplas deve ser feito de forma consciente. Não levamos em consideração os lucros ou perdas destes para efeito de nossa gestão.</p>
                                            <p class="text-muted m-b-30 font-14"> Para ver as múltiplas que preparamos, basta clicar abaixo:</br>
                                            <a href='administrador.php?link=14'><button type='button' class='btn btn-success btn-sm waves-effect'><i class="fa fa-external-link   "></i> Ver múltiplas</button></a></p>

                                            <div class="table-responsive">
                                                <table class="table table-vertical mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Hora</th>
                                                            <th class="col-sm-3">Jogo</th>
                                                            <th>Odd</th>
                                                            <th>Status</th>
                                                            <th>Link Bet365</th>
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