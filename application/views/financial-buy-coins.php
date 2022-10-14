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
                

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card plan-box">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center">
                                    <div class="flex-1 me-3 text-center">
                                        <i class="fas fa-coins h1 text-secondary"></i><i class="fas fa-coins h1 text-secondary"></i><i class="fas fa-coins h1 text-secondary"></i><i class="fas fa-coins h1 text-secondary"></i>
                                          <h1 class="display-4 fw-bold mb-0">250</h1>
                                         <h2 class="m-0 text-secondary"><span class="font-size-13">moedas por </span><small>R$</small>500,00 </h2>
                                    </div>
                                    
                                </div>
                                

                                <div class="plan-features text-muted ">
                                     <hr>
                                    <p><i class="mdi mdi-check-bold text-primary"></i> Nesse pacote, cada moeda custa R$2,00</p>
                                    <hr>
                                    
                                </div>

                                <div class="text-center">
                                    <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light">Comprar moedas</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                     <div class="col-xl-3 col-md-6">
                        <div class="card plan-box">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center">
                                    <div class="flex-1 me-3 text-center">
                                        <i class="fas fa-coins h1 text-secondary"></i><i class="fas fa-coins h1 text-secondary"></i>
                                          <h1 class="display-4 fw-bold mb-0">115</h1>
                                         <h2 class="m-0 text-secondary"><span class="font-size-13">moedas por </span><small>R$</small>299,00 </h2>
                                    </div>
                                </div>
                                <div class="plan-features text-muted ">
                                     <hr>
                                    <p><i class="mdi mdi-check-bold text-primary"></i> Nesse pacote, cada moeda custa R$2,60</p>
                                    <hr>
                                </div>
                                <div class="text-center">
                                    <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light">Comprar moedas</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                      <div class="col-xl-3 col-md-6">
                        <div class="card plan-box">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center">
                                    <div class="flex-1 me-3 text-center">
                                        <i class="fas fa-coins h1 text-secondary"></i>
                                          <h1 class="display-4 fw-bold mb-0">60</h1>
                                         <h2 class="m-0 text-secondary"><span class="font-size-13">moedas por </span><small>R$</small>199,00 </h2>
                                    </div>
                                </div>
                                <div class="plan-features text-muted ">
                                     <hr>
                                    <p><i class="mdi mdi-check-bold text-primary"></i> Nesse pacote, cada moeda custa R$3,31</p>
                                    <hr>
                                </div>
                                <div class="text-center">
                                    <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light">Comprar moedas</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                      <div class="col-xl-3 col-md-6">
                        <div class="card plan-box">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center">
                                    <div class="flex-1 me-3 text-center">
                                        <i class="fas fa-database  h1 text-secondary"></i>
                                          <h1 class="display-4 fw-bold mb-0">15</h1>
                                         <h2 class="m-0 text-secondary"><span class="font-size-13">moedas por </span><small>R$</small>59,00 </h2>
                                    </div>
                                </div>
                                <div class="plan-features text-muted ">
                                     <hr>
                                    <p><i class="mdi mdi-check-bold text-primary"></i> Nesse pacote, cada moeda custa R$3,93</p>
                                    <hr>
                                </div>
                                <div class="text-center">
                                    <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light">Comprar moedas</a>
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

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>