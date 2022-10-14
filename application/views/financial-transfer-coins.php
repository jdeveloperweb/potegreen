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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Transfira moedas para um amigo</h4>
                                    <p class="card-title-desc">Digite o e-mail do amigo para o qual deseja enviar uma quantidade de moedas. Você só poderá transferir até a quantidade de moedas que possui no saldo atual. Mas <strong>ATENÇÃO</strong> pois essa operação não poderá ser desfeita. Portanto, preencha corretamente abaixo:</p>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-4 col-form-label">Nome do amigo para o qual deseja enviar moedas:</label>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" value="Nome do amigo"
                                                id="example-text-input">
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-md-4 col-form-label">E-mail para quem quer enviar:</label>
                                        <div class="col-md-6">
                                            <input class="form-control" type="email" value="email@example.com"
                                                id="example-email-input">
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3 row">
                                        <label for="example-number-input" class="col-md-4 col-form-label">Quantidade de moedas a enviar:</label>
                                        <div class="col-md-6">
                                            <input class="form-control" type="number" value="00" id="example-number-input">
                                        </div>
                                    </div>
                                   <hr>
                                    <div class="row">
                                        <label for="exampleDataList" class="col-md-4  col-form-label">Aceite os termos abaixo para concluir:</label>
                                        <div class="col-md-8">
                                            <div class="form-check mb-12">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Declaro que os dados informados acima estão corretos.
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Estou ciente que esta operação não poderá ser desfeita após clicar em "Enviar".
                                                    </label>
                                                </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="text-center">
                                    <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light">Transferir</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

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