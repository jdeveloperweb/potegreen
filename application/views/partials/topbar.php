<header id="page-topbar">
    <div class="navbar-header">
        <div class="container-fluid">
            <div class="float-end">

                

                

                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="mdi mdi-fullscreen"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                   
                       
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="bx bx-basket font-size-16 align-middle me-1"></i>
                        <?= $this->lang->line('Buy_more') ?></a>
                        <a class="dropdown-item" href="#"><i class="bx bx-transfer  font-size-16 align-middle me-1"></i>
                        <?= $this->lang->line('Transations_coins') ?></a>
                       
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="<?= base_url("assets/images/users/avatar-2.jpg") ?>"
                            alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1"><?= $user->nome; ?></span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="/pages-profile"><i class="bx bx-user font-size-16 align-middle me-1"></i>
                        <?= $this->lang->line('Profile') ?> </a>
                        <a class="dropdown-item" href="/pages-lock-screen"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i>
                        <?= $this->lang->line('Lock_screen') ?></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="/pages-login"><i
                                class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <?= $this->lang->line('Logout') ?></a>
                    </div>
                </div>

                 <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <?php
                            $lang = $this->session->userdata('lang');
                            switch($lang){
                                case 'pt':
                                    echo "<img src='".base_url('assets/images/flags/br.jpg')."' alt='Header Language' height='16'>";
                                    break;
                                case 'en':
                                    echo "<img src='".base_url('assets/images/flags/us.jpg')."' alt='Header Language' height='16'>";
                                    break;
                                case 'es':
                                    echo "<img src='".base_url('assets/images/flags/spain.jpg')."' alt='Header Language' height='16'>";
                                    break;
                                case 'de':
                                    echo "<img src='".base_url('assets/images/flags/germany.jpg')."' alt='Header Language' height='16'>";
                                    break;
                                case 'it':
                                    echo "<img src='".base_url('assets/images/flags/italy.jpg')."' alt='Header Language' height='16'>";
                                    break;
                                case 'ru':
                                    echo "<img src='".base_url('assets/images/flags/russia.jpg')."' alt='Header Language' height='16'>";
                                    break;
                                default:
                                echo "<img src='".base_url('assets/images/flags/br.jpg')."' alt='Header Language' height='16'>";
                            }
                        ?>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="<?= base_url('lang/pt'); ?>" class="dropdown-item notify-item">
                            <img src="<?= base_url("assets/images/flags/br.jpg") ?>" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle">Português</span>
                        </a>
                        
                        <!-- item-->
                        <a href="<?= base_url('lang/en'); ?>" class="dropdown-item notify-item">
                            <img src="<?= base_url("assets/images/flags/us.jpg") ?>" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle">English</span>
                        </a>

                        <!-- item-->
                        <a href="<?= base_url('lang/es'); ?>" class="dropdown-item notify-item">
                            <img src="<?= base_url("assets/images/flags/spain.jpg") ?>" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href="<?= base_url('lang/de'); ?>" class="dropdown-item notify-item">
                            <img src="<?= base_url("assets/images/flags/germany.jpg") ?>" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle">German</span>
                        </a>

                        <!-- item-->
                        <a href="<?= base_url('lang/it'); ?>" class="dropdown-item notify-item">
                            <img src="<?= base_url("assets/images/flags/italy.jpg") ?>"alt="user-image" class="me-1" height="12"> <span
                                class="align-middle">Italian</span>
                        </a>

                        <!-- item-->
                        <a href="<?= base_url('lang/ru'); ?>" class="dropdown-item notify-item">
                            <img src="<?= base_url("assets/images/flags/russia.jpg") ?>" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle">Russian</span>
                        </a>
                    </div>
                </div>

            </div>
            <div>
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="<?= base_url('home/'); ?>" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="<?= base_url("assets/images/logo-sm.png") ?>" alt="logo" height="20">
                        </span>
                        <span class="logo-lg">
                            <img src="<?= base_url("assets/images/logo-dark.png") ?>" alt="logo" height="17">
                        </span>
                    </a>

                    <a href="<?= base_url('home/'); ?>" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="<?= base_url("assets/images/logo-sm.png") ?>" alt="logo" height="20">
                        </span>
                        <span class="logo-lg">
                            <img src="<?= base_url("assets/images/logo-light.png") ?>" alt="logo" height="29">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect"
                    id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->
               

                <!--<div class="dropdown dropdown-mega d-none d-lg-inline-block ms-2">
                    <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                        aria-haspopup="false" aria-expanded="false">
                        <?= $this->lang->line('Mega_Menu') ?>
                        <i class="mdi mdi-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu dropdown-megamenu">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="font-size-14"><?= $this->lang->line('UI_Components') ?></h5>
                                        <ul class="list-unstyled megamenu-list text-muted">
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('Lightbox') ?></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('Range_Slider') ?></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('Sweet_Alert') ?></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('Rating') ?></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('Forms') ?></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('Tables') ?></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('Charts') ?></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <h5 class="font-size-14"><?= $this->lang->line('Applications') ?></h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('Ecommerce') ?></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('Calendar') ?></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('Email') ?></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('Projects') ?></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('Tasks') ?></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('Contacts') ?></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <h5 class="font-size-14"><?= $this->lang->line('Extra_Pages') ?></h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('Light_Sidebar') ?></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('Compact_Sidebar') ?></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('Horizontal_layout') ?></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('Maintenance') ?></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('Coming_Soon') ?></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('Timeline') ?></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><?= $this->lang->line('FAQs') ?></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 class="font-size-14"><?= $this->lang->line('Components') ?></h5>
                                        <div class="px-lg-2">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="javascript: void(0);">
                                                        <img src="assets/images/brands/github.png" alt="Github">
                                                        <span>GitHub</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="javascript: void(0);">
                                                        <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                        <span>Bitbucket</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="javascript: void(0);">
                                                        <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                        <span>Dribbble</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row g-0">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="javascript: void(0);">
                                                        <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                        <span>Dropbox</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="javascript: void(0);">
                                                        <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                                        <span>Mail Chimp</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="javascript: void(0);">
                                                        <img src="assets/images/brands/slack.png" alt="slack">
                                                        <span>Slack</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div>
                                            <div class="card text-white mb-0 overflow-hidden text-white-50"
                                                style="background-image: url('assets/images/megamenu-img.png');background-size: cover;">
                                                <div class="card-img-overlay"></div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <h4 class="text-white mb-3"><?= $this->lang->line('Sale') ?></h4>

                                                            <h5 class="text-white-50"><?= $this->lang->line('Up_to') ?> <span
                                                                    class="font-size-24 text-white">50 %</span> <?= $this->lang->line('Off') ?></h5>
                                                            <p><?= $this->lang->line('At_vero_eos_accusamus_et_iusto_odio') ?></p>
                                                            <div class="mb-4">
                                                                <a href="javascript: void(0);" class="btn btn-success btn-sm"><?= $this->lang->line('View_more') ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</header>