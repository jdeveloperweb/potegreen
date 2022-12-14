<?= $this->include('partials/main') ?>

<head>

    <?= $title_meta ?>

    <?= $this->include('partials/head-css') ?>

</head>

<?= $this->include('partials/body') ?>

<div class="container-fluid">
    <!-- Begin page -->
    <div id="layout-wrapper">

        <?= $this->include('partials/mnew') ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <?= $page_title ?>

                <!-- start row -->
                <div class="row">
                  <div class="col-md-12 col-xl-12">
                        <div class="row">
                           
                            
                        </div>

                        <div class="card">
                            <div class="card-body" style="padding-top: 50px;">
 <h4 class="card-title mb-4"><?= lang('Files.How_it_works') ?></h4>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#experience" role="tab">
                                            <span class="d-block d-sm-none"><i class="fas fa-tools "></i></span>
                                            <span class="d-none d-sm-block">Funcionamento do site</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#avaliacao" role="tab">
                                            <span class="d-block d-sm-none"><i class="fas fa-user-check  "></i></span>
                                            <span class="d-none d-sm-block">Avalia????es</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#valordamoeda" role="tab">
                                            <span class="d-block d-sm-none"><i class="fas fa-coins "></i></span>
                                            <span class="d-none d-sm-block">Valor da moeda</span>
                                        </a>
                                    </li>
                                   
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content p-3 text-muted">
                                    <!-- Inicio como funciona o site -->
                                    <div class="tab-pane active" id="experience" role="tabpanel">
                                        <div class="timeline-count mt-5">
                                            <!-- Timeline row Start -->
                                            <div class="row">

                                                <!-- Timeline 1 -->
                                                <div class="timeline-box col-lg-3 text-justify">
                                                    <div class="mb-5 mb-lg-0">
                                                        <div class="item-lable bg-primary rounded">
                                                            <p class="text-center text-white">1??</p>
                                                        </div>
                                                        <div class="timeline-line active">
                                                            <div class="dot bg-primary"></div>
                                                        </div>
                                                        <div class="vertical-line">
                                                            <div class="wrapper-line bg-light"></div>
                                                        </div>
                                                        <div class="bg-light p-4 rounded mx-3">
                                                            <h5>Adquira moedas</h5>
                                                            <p class="text-muted mt-1 mb-0"><p class="text-justify">Escolha um pacote de moedas e efetue a compra. </p><p> Quanto mais moedas no pacote, menor o valor unit??rio da moeda.</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Timeline 1 -->

                                                <!-- Timeline 2 -->
                                                <div class="timeline-box col-lg-3">
                                                    <div class="mb-5 mb-lg-0">
                                                        <div class="item-lable bg-primary rounded">
                                                            <p class="text-center text-white">2??</p>
                                                        </div>
                                                        <div class="timeline-line active">
                                                            <div class="dot bg-primary"></div>
                                                        </div>
                                                        <div class="vertical-line">
                                                            <div class="wrapper-line bg-light"></div>
                                                        </div>
                                                        <div class="bg-light p-4 rounded mx-3">
                                                            <h5>Avalie a opini??o do site</h5>
                                                            <p class="text-muted mt-1 mb-0">Veja o resultado proposto pelo site. Avalie se o site acertar?? ou errar?? o resultado. </p> <p><br>A cada avalia????o, uma moeda ser?? debitada do saldo do usu??rio e ir?? para o pote.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Timeline 2 -->

                                                <!-- Timeline 3 -->
                                                <div class="timeline-box col-lg-3">
                                                    <div class="mb-5 mb-lg-0">
                                                        <div class="item-lable bg-primary rounded">
                                                            <p class="text-center text-white">3??</p>
                                                        </div>
                                                        <div class="timeline-line active">
                                                            <div class="dot bg-primary"></div>
                                                        </div>
                                                        <div class="vertical-line">
                                                            <div class="wrapper-line bg-light"></div>
                                                        </div>
                                                        <div class="bg-light p-4 rounded mx-3">
                                                            <h5>Pontue acertando ou errando</h5>
                                                            <p class="text-muted mt-1 mb-0">Se voc?? acertar a avalia????o, receber?? 5 pontos. <br>Se errar a avalia????o, receber?? 2 pontos.</p> <p><br>Portanto avalie e pontue sempre!!</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Timeline 3 -->
                                                <!-- Timeline 3 -->
                                                <div class="timeline-box col-lg-3">
                                                    <div class="mb-5 mb-lg-0">
                                                        <div class="item-lable bg-primary rounded">
                                                            <p class="text-center text-white">4??</p>
                                                        </div>
                                                        <div class="timeline-line active">
                                                            <div class="dot bg-primary"></div>
                                                        </div>
                                                        <div class="vertical-line">
                                                            <div class="wrapper-line bg-light"></div>
                                                        </div>
                                                        <div class="bg-light p-4 rounded mx-3">
                                                            <h5>Receba o pr??mio</h5>
                                                            <p class="text-muted mt-1 mb-0">Todos os dias, os primeiros colocados no ranking repartir??o o pr??mio.<br><br> O pr??mio consiste na distribui????o das moedas acumuladas no pote que poder?? ser convertida em dinheiro ou transferida entre usu??rios.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Timeline 3 -->
                                                
                                            </div>
                                            <!-- Timeline row Over -->

                                        </div>
                                    </div>
                                    <!-- Fim como funciona o site -->
                                    
                                    <!-- Inicio Avalia????es -->
                                    <div class="tab-pane" id="avaliacao" role="tabpanel">
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <h5 class="card-title">Como e por que avaliar?</h5>
                                               
                                                    <p><br>Diariamente o site ir?? opniar sobre poss??veis resultados de confrontos esportivos. Cada usu??rio poder?? avaliar o resultado proposto pelo site e concorrer ao pote do dia.</p>
                                                    <p>Cada vez que o usu??rio avaliar a opin??o do site, uma moeda ser?? debitada do saldo e adicionada ao pote do dia.</p><br>
                                                    <p>Se a avalia????o for correta, assim que o site processar o resultado do confronto, o usu??rio receber?? 5 pontos. Caso a avalia????o seja errada, o usu??rio receber?? ainda 2 pontos.</p>
                                                    <p>Ao t??rmino do ??ltimo confronto do dia, ap??s processados todos os resultados, os primeiros colocados no ranking receber??o uma distribui????o das moedas arrecadadas.</p>
                                                    <p>Todos os dias as pontua????es e o pote s??o zerados.</p><br><br>
                                                    
                                                    <div class="card border border-warning">
                                                        <div class="card-header bg-transparent border-success">
                                                            <h5 class="my-0 text-success"><i class="mdi mdi-check-all me-3"></i>Errando ou acertando, ganhe pontos! Apenas avalie!</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <h5 class="card-title">Exemplo 1</h5>
                                                            <p class="card-text">
                                                                <p><li>Em uma determinada partida de futebol, jogando <strong>TIME A vs TIME B</strong>, o site diz que <strong>TIME B VENCE</strong></li></p>
                                                                <p><li>O usu??rio decide concordar e diz que <strong>O SITE ACERTA</strong></li></p>
                                                                <p><li>Se o resultado final for<strong> TIME B VENCEU</strong>, logo o site acertou e o usu??rio ganha 5 pontos</li></p>
                                                                <p><li>Se o resultado final for<strong> TIME A VENCEU</strong>, logo o site errou e o usu??rio ganha 2 pontos</li></p>
                                                                <hr>
                                                            </p>
                                                            <h5 class="card-title">Exemplo 2</h5>
                                                            <p class="card-text">
                                                                <p><li>Em uma determinada partida de futebol, jogando <strong>TIME A vs TIME B</strong>, o site diz que <strong>TIME B VENCE</strong></li></p>
                                                                <p><li>O usu??rio decide discordar e diz que <strong>O SITE ERRA</strong></li></p>
                                                                <p><li>Se o resultado final for<strong> TIME B VENCEU</strong>, logo o site acertou e o usu??rio ganha 2 pontos</li></p>
                                                                <p><li>Se o resultado final for<strong> TIME A VENCEU</strong>, logo o site errou e o usu??rio ganha 5 pontos</li></p>
                                                                <hr>
                                                            </p>
                                                            <h5 class="card-title">Exemplo 3</h5>
                                                            <p class="card-text">
                                                                <p><li>Em uma determinada corrida de cavalos, o site diz que <strong>CAVALO 1 vence CAVALO 4 e CAVALO 3</strong></li></p>
                                                                <p><li>O usu??rio decide concordar e diz que <strong>O SITE ACERTA</strong></li></p>
                                                                <p><li>Se o resultado final for<strong> 2 - 1 - 3 - 4</strong>, logo o site acertou e o usu??rio ganha 5 pontos</li></p>
                                                                <p><li>Se o resultado final for<strong> 3 - 1 - 2 - 4</strong>, logo o site errou e o usu??rio ganha 2 pontos</li></p>
                                                                <hr>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    
                                                   

                                                </div>
                                            </div>
                                             <!-- end col -->
                                        </div>
                                    </div>
                                    <!-- Fim Avalia????es -->
                                    
                                    <!-- Inicio Valor da moeda -->
                                    <div class="tab-pane" id="valordamoeda" role="tabpanel">
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <h5 class="card-title">Valor vari??vel na compra e fixo no saque</h5>
                                               
                                                    <p><br>Confira sempre os pacotes dispon??veis. O valor de uma moeda no ato da compra de um pacote varia conforme a quantidade de moedas adquiridas.</p>
                                                    <p>O valor de uma moeda no ato do saque ser?? sempre o menor valor de uma moeda dispon??vel para compra.  </p><br><br><br>
                                                    
                                                    <div class="card border border-warning">
                                                        <div class="card-header bg-transparent border-success">
                                                            <h5 class="my-0 text-success"><i class="mdi mdi-check-all me-3"></i>Valor vari??vel na compra e fixo no saque</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <h5 class="card-title">Exemplo</h5>
                                                            <p class="card-text">
                                                                <p><li>Em um pacote com 250 moedas por R$500 dispon??vel no site, cada moeda custa R$2,00. Em outro pacote com 50 moedas por R$150 , cada moeda custa R$3,00.</li></p>
                                                                <p><li>Usu??rio optou por comprar o pacote com 50 moedas, pagando R$3,00 em cada uma.</li></p>
                                                                <p><li>Ap??s receber 5.000 moedas como pr??mio, decidiu sacar o pr??mio.</li></p>
                                                                <p><li>O valor que ele sacar?? ser?? de R$2,00 (menor valor da moeda dispon??vel para compra) x 5.000 unidades = R$10.000,00 .</li></p>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    
                                                   

                                                </div>
                                            </div>
                                             <!-- end col -->
                                        </div>
                                    </div>
                                    <!-- Fim Valor da moeda -->
                                </div>

                            </div>
                        </div>

                       
                    </div>
                </div>
               
                <!-- end row -->

            </div>

            <!-- End Page-content -->

            <?= $this->include('partials/footer') ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

</div>
<!-- end container-fluid -->

<?= $this->include('partials/right-sidebar') ?>

<!-- JAVASCRIPT -->
<?= $this->include('partials/vendor-scripts') ?>

<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="assets/js/pages/profile.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>