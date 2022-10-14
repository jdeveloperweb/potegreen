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

            <!-- Top Bar Start -->
            <div class="topbar">

                <nav class="navbar-custom">
                    <!-- Search input -->
                    <div class="search-wrap" id="search-wrap">
                        <div class="search-bar">
                            <input class="search-input" type="search" placeholder="Search" />
                            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                <i class="mdi mdi-close-circle"></i>
                            </a>
                        </div>
                    </div>

                    <ul class="list-inline float-right mb-0">
                        <!-- Search -->
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link waves-effect toggle-search" href="#" data-target="#search-wrap">
                                <i class="mdi mdi-magnify noti-icon"></i>
                            </a>
                        </li>
                        <!-- Fullscreen -->
                        <li class="list-inline-item dropdown notification-list hidden-xs-down">
                            <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                <i class="mdi mdi-fullscreen noti-icon"></i>
                            </a>
                        </li>
                        <!-- language-->
                        <li class="list-inline-item dropdown notification-list hidden-xs-down">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect text-muted" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                Português <img src="public/assets/images/flags/brasil_flag.jpg" class="ml-2" height="16" alt="" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right language-switch">
                                <a class="dropdown-item" href="#"><img src="public/assets/images/flags/us_flag.jpg" alt="" height="16" /><span> English </span></a>
                                <a class="dropdown-item" href="#"><img src="public/assets/images/flags/germany_flag.jpg" alt="" height="16" /><span> German </span></a>
                                <a class="dropdown-item" href="#"><img src="public/assets/images/flags/french_flag.jpg" alt="" height="16" /><span> French </span></a>
                                <a class="dropdown-item" href="#"><img src="public/assets/images/flags/spain_flag.jpg" alt="" height="16" /><span> Spanish </span></a>
                            </div>
                        </li>
                        <!-- notification-->

                        <!-- User-->
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="public/assets/images/users/<?php echo $_SESSION['usuarioAvatar']; ?>" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Meus dados</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="sair.php"><i class="dripicons-exit text-muted"></i> Sair</a>
                            </div>
                        </li>
                    </ul>

                    <!-- Page title -->
                    <ul class="list-inline menu-left mb-0">
                        <li class="list-inline-item">
                            <button type="button" class="button-menu-mobile open-left waves-effect">
                                <i class="ion-navicon"></i>
                            </button>
                        </li>
                        <li class="hide-phone list-inline-item app-search">
                            <h3 class="page-title">Gestão de Banca - Multiplagreen</h3>
                        </li>
                    </ul>

                    <div class="clearfix"></div>
                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ==================
                         PAGE CONTENT START
                         ================== -->

            <?php
            $id = $_GET['id'];

            $result = mysqli_query($conectar, "SELECT * FROM user WHERE id = '$id' LIMIT 1");
            $resultado = mysqli_fetch_assoc($result);

            ?>

            <div class="page-content-wrapper">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card m-b-20">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Editar Usuário - Id: <?php echo $id; ?></h4>
                                    <p class="text-muted m-b-30 font-14"> </p>

                                    <form class="" method="POST" action="processa/proc_edit_usuario.php">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input type="text" class="form-control" placeholder="Digite o nome" name="nome" value='<?php echo $resultado['username']; ?>' />
                                        </div>
                                        <div class="form-group">
                                            <label>Plano</label>
                                            <input type="text" class="form-control" placeholder="Digite o plano" name="plano" value='<?php echo $resultado['plano']; ?>' />
                                        </div>
                                        <div class="form-group">
                                            <label>Status atual: <?php echo $resultado['status']; ?></label>
                                            <select class="form-control" name="status">
                                                <option value="Em aberto" <?php echo @$resultado['status']=='Em aberto'?'selected':''; ?> >Em aberto</option>
                                                <option value="Ativo" <?php echo strtoupper(@$resultado['status'])=='ATIVO'?'selected':''; ?> >Ativo</option>
                                                <option value="Reelmbolsado" <?php echo @$resultado['status']=='Reelmbolsado'?'selected':''; ?> >Reelmbolsado</option>
                                                <option value="Cancelado" <?php echo @$resultado['status']=='Cancelado'?'selected':''; ?> >Cancelado</option></select>
                                        </div>
                                        <div class="form-group">
                                            <label>Senha</label>
                                            <div>
                                                <input type="password" id="pass2" name="senha" class="form-control" value='<?php echo $resultado['senha']; ?>' />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>E-Mail</label>
                                            <div>
                                                <input type="email" class="form-control" name="email" parsley-type="email" value='<?php echo $resultado['email']; ?>' />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Telefone</label>
                                            <div>
                                                <input data-parsley-type="number" name="telefone" type="text" class="form-control" value='<?php echo $resultado['telefone']; ?>' />
                                              <input type="hidden" name="id" value="<?php echo $resultado['id']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-5">
                                                    Salvar
                                                </button>
                                                <a href="administrador.php?link=18" class="btn btn-secondary waves-effect" role="button">Cancelar</a>
                                                
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->


                </div><!-- container-fluid -->

            </div> <!-- Page content Wrapper -->



        </div> <!-- content -->

        <?php include 'layouts/footer.php'; ?>

    </div>
    <!-- End Right content here -->

</div>
<!-- END wrapper -->