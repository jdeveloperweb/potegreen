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
                 <?= $this->include('partials/userinfos') ?>
                <!-- start row -->
                <div class="row">
                  <div class="col-md-12 col-xl-12">
                        <div class="row">
                           
                            
                        </div>

                        <div class="card">
                            <div class="card-body" style="padding-top: 50px;">
 <h4 class="card-title mb-4"></h4>
                               
                                <div class="mb-3">
                                                    <h5 class="card-title">Confira como funciona a conversão</h5>
                                               
                                                    <p><br> O valor base de uma moeda é sempre o menor valor pelo qual um usuário pode comprar em nosso site.</p>
                                                    <p> Dependendo do pacote de moedas, ela pode variar entre R$2,00, R$2,60, R$3,00... logo, o menor valor dela será R$2,00 </p><br>
                                                    <p>Portanto, você pode ter comprado, por sua opção, um pacote com o valor médio da moeda a R$3,00 que no ato do saque o cálculo será sempre R$2,00.</p>
                                                    <br><br>
                                                    
                                                    <div class="card border border-warning">
                                                        <div class="card-header bg-transparent border-success">
                                                            <h5 class="my-0 text-success"><i class="mdi mdi-check-all me-3"></i>Na conversão, o valor é fixo. Portanto, prefira sempre o melhor pacote!</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <h5 class="card-title">Exemplo 1</h5>
                                                            <p class="card-text">
                                                                <p><li> Você comprou o pacote com 250 moedas e pagou R$500,00 (R$2,00 em cada)</li></p>
                                                                <p><li> Recebeu 20.000 moedas de premiação.</li></p>
                                                                <p><li> Um amigo lhe enviou 200 moedas.</li></p>
                                                                <p><li> Se você decidir sacar tudo, receberá o total de moedas (250 + 20.000 + 200) x R$2,00 = R$40.900,00.</li></p>
                                                                <hr>
                                                            </p>
                                                            <h5 class="card-title">Exemplo 2</h5>
                                                             <p class="card-text">
                                                                <p><li> Você comprou o pacote com 15 moedas e pagou R$59,00 (R$3,91 em cada)</li></p>
                                                                <p><li> Recebeu 20 moedas de premiação.</li></p>
                                                                <p><li> Se você decidir sacar tudo, receberá o total de moedas (35) x R$2,00 = R$70,00.</li></p>
                                                                <hr>
                                                            </p>
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                   

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