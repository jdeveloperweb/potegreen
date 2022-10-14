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
                <?= $this->include('partials/userinfos') ?>
                <!-- start row -->
                
                
                 <div class="row">
                  <div class="col-md-12 col-xl-12">
                        <div class="row">
                           
                            <div class="col-md-12 col-xl-12">
                                <div class="card">
                                      <div class="card-body">
                                <h5 class="card-title ">Extrato de transferências</h5>
<h4 class="card-title"> </h4>
                                    <p class="card-title-desc">Para ver o extrato referente a outro período, selecione o período abaixo:
                                    </p>
                                    <div class="col-md-12 col-xl-12 row">
                                        <div class="col-md-6">
                                            <label for="example-month-input" class="col-md-12 col-form-label">Início do período</label>
                                            <input class="form-control" type="date" id="example-date-input">
                                        </div>
                                    
                                        <div class="col-md-6">
                                            <label for="example-month-input" class="col-md-12 col-form-label">Fim do período</label>
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
                                                <th  style="width: 10%;">Data</th>
                                                <th>Beneficiado</th>
                                                <th>Quantidade de moedas</th>
                                                
                                                <th>Status</th>
                                                
                                                
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>07/08/2022</td>
                                                <td>Rafael Villarmosa</td>
                                                <td>2500</td>
                                                <td>Processado</td>
                                            </tr>
                                            <tr>
                                                <td>07/08/2022</td>
                                                <td>Rafael Villarmosa</td>
                                                <td>2500</td>
                                                <td>Processado</td>
                                            </tr>
                                            <tr>
                                                <td>07/08/2022</td>
                                                <td>Rafael Villarmosa</td>
                                                <td>2500</td>
                                                <td>Processado</td>
                                            </tr>
                                            <tr>
                                                <td>07/08/2022</td>
                                                <td>Rafael Villarmosa</td>
                                                <td>2500</td>
                                                <td>Processado</td>
                                            </tr>
                                            <tr>
                                               <td>07/08/2022</td>
                                                <td>Rafael Villarmosa</td>
                                                <td>2500</td>
                                                <td>Processado</td>
                                            </tr>
                                            <tr>
                                                <td>07/08/2022</td>
                                                <td>Rafael Villarmosa</td>
                                                <td>2500</td>
                                                <td>Processado</td>
                                            </tr>
                                            <tr>
                                                <td>07/08/2022</td>
                                                <td>Rafael Villarmosa</td>
                                                <td>2500</td>
                                                <td>Processado</td>
                                            </tr>
                                            <tr>
                                               <td>07/08/2022</td>
                                                <td>Rafael Villarmosa</td>
                                                <td>2500</td>
                                                <td>Processado</td>
                                            </tr>
                                            <tr>
                                                <td>07/08/2022</td>
                                                <td>Rafael Villarmosa</td>
                                                <td>2500</td>
                                                <td>Processado</td>
                                            </tr>
                                            <tr>
                                               <td>07/08/2022</td>
                                                <td>Rafael Villarmosa</td>
                                                <td>2500</td>
                                                <td>Processado</td>
                                            </tr>
                                            <tr>
                                                <td>07/08/2022</td>
                                                <td>Rafael Villarmosa</td>
                                                <td>2500</td>
                                                <td>Processado</td>
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