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
                                <h5 class="card-title mb-3">Minha colocação</h5>
<h4 class="card-title">Por enquanto você ocupa a 14ª colocação no ranking de hoje.</h4>
                                    <p class="card-title-desc">Abaixo você verá o ranking do dia de hoje com os resultados processados até agora pelo site. 
                                    Para ver sua colocação no ranking em algum outro dia, escolha a data abaixo. 
                                    </p>
                                    <div class="col-md-12 col-xl-4 mb-3 row">
                                        
                                        <div class="col-md-10">
                                            <input class="form-control" type="date" id="example-date-input">
                                        </div>
                                    </div>
                                <br>

                                  <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th  style="width: 10%;">Colocação</th>
                                                <th></th>
                                                <th>Usuário</th>
                                                <th>Pontos</th>
                                                
                                                
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>1º</td>
                                                <td><img src="assets/images/users/avatar-3.jpg" alt="avatar-3" class="avatar-sm rounded-circle"></td>
                                                <td>Paul Becker</td>
                                                <td>52</td>
                                            </tr>
                                            <tr>
                                                <td>2º</td>
                                                <td><img src="assets/images/users/avatar-1.jpg" alt="avatar-2" class="avatar-sm rounded-circle"></td>
                                                <td>Mary Lemos</td>
                                                <td>48</td>
                                            </tr>
                                            <tr>
                                                <td>3º</td>
                                                <td><img src="assets/images/users/avatar-2.jpg" alt="avatar-3" class="avatar-sm rounded-circle"></td>
                                                <td>Alex Silva</td>
                                                <td>46</td>
                                            </tr>
                                            <tr>
                                                <td>4º</td>
                                                <td><img src="assets/images/users/avatar-5.jpg" alt="avatar-3" class="avatar-sm rounded-circle"></td>
                                                <td>Renata das Neves Barros</td>
                                                <td>45</td>
                                            </tr>
                                            <tr>
                                                <td>5º</td>
                                                <td><img src="assets/images/users/avatar-4.jpg" alt="avatar-3" class="avatar-sm rounded-circle"></td>
                                                <td>Joel Moutinho</td>
                                                <td>42</td>
                                            </tr>
                                            <tr>
                                                <td>6º</td>
                                                <td><img src="assets/images/users/avatar-3.jpg" alt="avatar-3" class="avatar-sm rounded-circle"></td>
                                                <td>Silva Lopes Santos</td>
                                                <td>35</td>
                                            </tr>
                                            <tr>
                                                <td>7º</td>
                                                <td><img src="assets/images/users/avatar-6.jpg" alt="avatar-3" class="avatar-sm rounded-circle"></td>
                                                <td>Roberto Alberto</td>
                                                <td>22</td>
                                            </tr>
                                            <tr>
                                                <td>8º</td>
                                                <td><img src="assets/images/users/avatar-7.jpg" alt="avatar-3" class="avatar-sm rounded-circle"></td>
                                                <td>Joana da silva</td>
                                                <td>10</td>
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