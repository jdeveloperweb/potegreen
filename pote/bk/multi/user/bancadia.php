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
                                            <h4 class="mt-0 m-b-30 header-title"> Situação da banca em um determinado dia. </h4>

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
                                            <p class="text-muted m-b-30 font-14"> Resultado da banca no dia <strong><?php echo date(('d/m/Y'), strtotime($data)); ?></strong>, contabilizando os jogos já processados pelo Multiplagreen.
                                            <?php if ($resdia>= 0){?>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="card m-b-20">
                                                    <div class="card-body">
                                                        <div class="color-box bg-success">
                                                            Obtidos <?php echo $resdia;?> % do total da banca em <?php echo date(('d/m/Y'), strtotime($data)); ?><footer class="blockquote-footer text-white"><cite>sem contabilizar possíveis cash out</cite></footer>
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


                                            </br>Para ver a situação em uma data específica, selecione o dia:
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
                                                            $resultado4 = mysqli_query($conectar, "SELECT * FROM multiplassug WHERE data = '$data'");
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