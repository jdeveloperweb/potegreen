<?= $this->include('partials/main') ?>

<head>

    <?= $title_meta ?>
    
    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

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
                           <div class="col-md-12 col-xl-3">
                                <div class="card bg-warning text-white">
                                    <div class="card-body text-white">
                                        <div class="row align-items-center">
                                            <div class="col-12 text-center">
                                                <p class="mb-2 text-white">Acumulado no pote</p>
                                                <h4 class="mb-0 text-white">1554 <small> moedas</small></h4>
                                            </div>
                                            <p></p><button type="button" class="btn  btn-outline-light btn-sm d-grid waves-effect waves-light">Prêmios estimados</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-12 text-center">
                                                <p class="mb-2">Pontuação no dia</p>
                                                <h4 class="mb-0">15 <small> pontos</small></h4>
                                            </div>
                                            <p></p><button type="button" class="btn  btn-outline-warning btn-sm d-grid waves-effect waves-light">Detalhar pontuação</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-12 text-center">
                                                <p class="mb-2">Saldo atual</p>
                                                <h4 class="mb-0">52 <small> moedas</small></h4>
                                            </div>
                                            <p></p><button type="button" class="btn  btn-outline-warning btn-sm d-grid waves-effect waves-light">Comprar moedas</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-12 text-center">
                                                <p class="mb-2">Ranking atual</p>
                                                <h4 class="mb-0">13ª <small> posição</small></h4>
                                            </div>
                                            <p></p><button type="button" class="btn  btn-outline-warning btn-sm d-grid waves-effect waves-light">Ver ranking</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                  <div class="col-md-12 col-xl-12">
                        <div class="row">
                           
                            <div class="col-md-12 col-xl-12">
                                <div class="card">
                                      <div class="card-body">
                                <h5 class="card-title mb-3">Minhas avaliações</h5>

                                <br>

                                  <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Evento</th>
                                                <th>Site</th>
                                                <th>Você: Site Acerta?</th>
                                                <th>Site: Acertou?</th>
                                                <th>Pontos</th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>4ºPáreo - Gulfstream</td>
                                                <td>Cavalo 1 vence 3 e 4</td>
                                                <td>Sim</td>
                                                <td>Sim</td>
                                                <td>5</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Botafogo vs Ceará</td>
                                                <td>Botafogo vence</td>
                                                <td>Não</td>
                                                <td>Sim</td>
                                                <td>2</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>4ºPáreo - Gulfstream</td>
                                                <td>Cavalo 1 vence 3 e 4</td>
                                                <td>Sim</td>
                                                <td>Sim</td>
                                                <td>5</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Botafogo vs Ceará</td>
                                                <td>Botafogo vence</td>
                                                <td>Não</td>
                                                <td>Sim</td>
                                                <td>2</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>4ºPáreo - Gulfstream</td>
                                                <td>Cavalo 1 vence 3 e 4</td>
                                                <td>Sim</td>
                                                <td>Sim</td>
                                                <td>5</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Botafogo vs Ceará</td>
                                                <td>Botafogo vence</td>
                                                <td>Não</td>
                                                <td>Sim</td>
                                                <td>2</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>4ºPáreo - Gulfstream</td>
                                                <td>Cavalo 1 vence 3 e 4</td>
                                                <td>Sim</td>
                                                <td>Sim</td>
                                                <td>5</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Botafogo vs Ceará</td>
                                                <td>Botafogo vence</td>
                                                <td>Não</td>
                                                <td>Sim</td>
                                                <td>2</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>4ºPáreo - Gulfstream</td>
                                                <td>Cavalo 1 vence 3 e 4</td>
                                                <td>Sim</td>
                                                <td>Sim</td>
                                                <td>5</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Botafogo vs Ceará</td>
                                                <td>Botafogo vence</td>
                                                <td>Não</td>
                                                <td>Sim</td>
                                                <td>2</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>4ºPáreo - Gulfstream</td>
                                                <td>Cavalo 1 vence 3 e 4</td>
                                                <td>Sim</td>
                                                <td>Sim</td>
                                                <td>5</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Botafogo vs Ceará</td>
                                                <td>Botafogo vence</td>
                                                <td>Não</td>
                                                <td>Sim</td>
                                                <td>2</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>4ºPáreo - Gulfstream</td>
                                                <td>Cavalo 1 vence 3 e 4</td>
                                                <td>Sim</td>
                                                <td>Sim</td>
                                                <td>5</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Botafogo vs Ceará</td>
                                                <td>Botafogo vence</td>
                                                <td>Não</td>
                                                <td>Sim</td>
                                                <td>2</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>4ºPáreo - Gulfstream</td>
                                                <td>Cavalo 1 vence 3 e 4</td>
                                                <td>Sim</td>
                                                <td>Sim</td>
                                                <td>5</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Botafogo vs Ceará</td>
                                                <td>Botafogo vence</td>
                                                <td>Não</td>
                                                <td>Sim</td>
                                                <td>2</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>4ºPáreo - Gulfstream</td>
                                                <td>Cavalo 1 vence 3 e 4</td>
                                                <td>Sim</td>
                                                <td>Sim</td>
                                                <td>5</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Botafogo vs Ceará</td>
                                                <td>Botafogo vence</td>
                                                <td>Não</td>
                                                <td>Sim</td>
                                                <td>2</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>4ºPáreo - Gulfstream</td>
                                                <td>Cavalo 1 vence 3 e 4</td>
                                                <td>Sim</td>
                                                <td>Sim</td>
                                                <td>5</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Botafogo vs Ceará</td>
                                                <td>Botafogo vence</td>
                                                <td>Não</td>
                                                <td>Sim</td>
                                                <td>2</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>4ºPáreo - Gulfstream</td>
                                                <td>Cavalo 1 vence 3 e 4</td>
                                                <td>Sim</td>
                                                <td>Sim</td>
                                                <td>5</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Botafogo vs Ceará</td>
                                                <td>Botafogo vence</td>
                                                <td>Não</td>
                                                <td>Sim</td>
                                                <td>2</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>4ºPáreo - Gulfstream</td>
                                                <td>Cavalo 1 vence 3 e 4</td>
                                                <td>Sim</td>
                                                <td>Sim</td>
                                                <td>5</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Botafogo vs Ceará</td>
                                                <td>Botafogo vence</td>
                                                <td>Não</td>
                                                <td>Sim</td>
                                                <td>2</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>4ºPáreo - Gulfstream</td>
                                                <td>Cavalo 1 vence 3 e 4</td>
                                                <td>Sim</td>
                                                <td>Sim</td>
                                                <td>5</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Botafogo vs Ceará</td>
                                                <td>Botafogo vence</td>
                                                <td>Não</td>
                                                <td>Sim</td>
                                                <td>2</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>4ºPáreo - Gulfstream</td>
                                                <td>Cavalo 1 vence 3 e 4</td>
                                                <td>Sim</td>
                                                <td>Sim</td>
                                                <td>5</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Botafogo vs Ceará</td>
                                                <td>Botafogo vence</td>
                                                <td>Não</td>
                                                <td>Sim</td>
                                                <td>2</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>4ºPáreo - Gulfstream</td>
                                                <td>Cavalo 1 vence 3 e 4</td>
                                                <td>Sim</td>
                                                <td>Sim</td>
                                                <td>5</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Botafogo vs Ceará</td>
                                                <td>Botafogo vence</td>
                                                <td>Não</td>
                                                <td>Sim</td>
                                                <td>2</td>
                                               
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                                
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

<!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>
    
<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="assets/js/pages/profile.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>