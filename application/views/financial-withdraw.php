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

                                    <h4 class="card-title">Saque agora mesmo</h4>
                                    <p class="card-title-desc"><li>Digite a quantidade de moedas que deseja sacar.</li>
                                    <li>A quantidade deve ser igual ou inferior a seu saldo de moedas.</li>
                                    <li>O valor a receber será a quantidade desejada multiplicada pelo menor valor de uma moeda do site (R$2,00) <a href="javascript: void(0);" class="btn btn-primary btn-sm waves-effect waves-light">Ver taxas de conversão</a></li>
                                    </p>
<hr>
                                    
                                    <div class="mb-3 row">
                                        <label for="example-number-input" class="col-md-4 col-form-label">Quantidade de moedas a sacar:</label>
                                        <div class="col-md-6">
                                            <input class="form-control" type="number" value="00" id="example-number-input">
                                        </div>
                                    </div>
                                     <div class="mb-3 row">
                                        <label for="example-number-input" class="col-md-4 col-form-label"><span class="badge rounded-pill badge-soft-warning">Valor a receber: R$24.500,00</span></label>
                                        <div class="col-md-6">
                                            
                                        </div>
                                    </div>
                                   <hr>
                                   <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-4 col-form-label">Digite sua chave PIX:</label>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" value=""
                                                id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-4 col-form-label">Tipo de chave:</label>
                                        <div class="col-md-6">
                                            <div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked="">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        CPF
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        E-mail
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                    <label class="form-check-label" for="flexRadioDefault3">
                                                        Telefone
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                                    <label class="form-check-label" for="flexRadioDefault4">
                                                        Chave aleatória
                                                    </label>
                                                </div>
                                            </div>
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
                                    <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light">Sacar</a>
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