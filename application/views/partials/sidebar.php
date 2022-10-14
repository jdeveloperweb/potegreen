<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="<?= base_url("assets/images/users/avatar-2.jpg") ?>"alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="javascript: void(0);" class="text-dark fw-medium font-size-16">Patrick Becker</a>
                <p class="text-body mt-1 mb-0 font-size-13">UI/UX Designer</p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title"><?= $this->lang->line('Menu') ?></li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-airplay"></i><span class="badge rounded-pill bg-info float-end">2</span>
                        <span><?= $this->lang->line('Dashboard') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="./"><?= $this->lang->line('Dashboard') ?> 1</a></li>
                        <li><a href="home/show_index_2"><?= $this->lang->line('Dashboard') ?> 2</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-flip-horizontal"></i>
                        <span><?= $this->lang->line('Layouts') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" class="has-arrow"><?= $this->lang->line('Vertical') ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-compact-sidebar"><?= $this->lang->line('Compact_Sidebar') ?></a></li>
                                <li><a href="layouts-icon-sidebar"><?= $this->lang->line('Icon_Sidebar') ?></a></li>
                                <li><a href="layouts-boxed"><?= $this->lang->line('Boxed_Layout') ?></a></li>
                                <li><a href="layouts-preloader"><?= $this->lang->line('Preloader') ?></a></li>
                            </ul>
                        </li>

                        <li><a href="javascript: void(0);" class="has-arrow"><?= $this->lang->line('Horizontal') ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal"><?= $this->lang->line('Horizontal') ?></a></li>
                                <li><a href="layouts-hori-topbarlight"><?= $this->lang->line('Topbar_Light') ?></a></li>
                                <li><a href="layouts-hori-boxed"><?= $this->lang->line('Boxed_Layout') ?></a></li>
                                <li><a href="layouts-hori-preloader"><?= $this->lang->line('Preloader') ?></a></li>
                            </ul>
                        </li>
                    </ul>

                </li>

                <li>
                    <a href="calendar" class=" waves-effect">
                        <i class="mdi mdi-calendar-text"></i>
                        <span><?= $this->lang->line('Calendar') ?></span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-inbox-full"></i>
                        <span><?= $this->lang->line('Email') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox"><?= $this->lang->line('Inbox') ?></a></li>
                        <li><a href="email-read"><?= $this->lang->line('Read_Email') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-calendar-check"></i>
                        <span><?= $this->lang->line('Tasks') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tasks-list"><?= $this->lang->line('Task_List') ?></a></li>
                        <li><a href="tasks-kanban"><?= $this->lang->line('Kanban_Board') ?></a></li>
                        <li><a href="tasks-create"><?= $this->lang->line('Create_Task') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span><?= $this->lang->line('Pages') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-login"><?= $this->lang->line('Login') ?></a></li>
                        <li><a href="pages-register"><?= $this->lang->line('Register') ?></a></li>
                        <li><a href="pages-recoverpw"><?= $this->lang->line('Recover_Password') ?></a></li>
                        <li><a href="pages-lock-screen"><?= $this->lang->line('Lock_Screen') ?></a></li>
                        <li><a href="pages-starter"><?= $this->lang->line('Starter_Page') ?></a></li>
                        <li><a href="pages-invoice"><?= $this->lang->line('Invoice') ?></a></li>
                        <li><a href="pages-profile"><?= $this->lang->line('Profile') ?></a></li>
                        <li><a href="pages-maintenance"><?= $this->lang->line('Maintenance') ?></a></li>
                        <li><a href="pages-comingsoon"><?= $this->lang->line('Coming_Soon') ?></a></li>
                        <li><a href="pages-timeline"><?= $this->lang->line('Timeline') ?></a></li>
                        <li><a href="pages-faqs"><?= $this->lang->line('FAQs') ?></a></li>
                        <li><a href="pages-pricing"><?= $this->lang->line('Pricing') ?></a></li>
                        <li><a href="pages-404"><?= $this->lang->line('Error_404') ?></a></li>
                        <li><a href="pages-500"><?= $this->lang->line('Error_500') ?></a></li>
                    </ul>
                </li>

                <li class="menu-title"><?= $this->lang->line('Components') ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-checkbox-multiple-blank-outline"></i>
                        <span><?= $this->lang->line('UI_Elements') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts"><?= $this->lang->line('Alerts') ?></a></li>
                        <li><a href="ui-buttons"><?= $this->lang->line('Buttons') ?></a></li>
                        <li><a href="ui-cards"><?= $this->lang->line('Cards') ?></a></li>
                        <li><a href="ui-carousel"><?= $this->lang->line('Carousel') ?></a></li>
                        <li><a href="ui-dropdowns"><?= $this->lang->line('Dropdowns') ?></a></li>
                        <li><a href="ui-grid"><?= $this->lang->line('Grid') ?></a></li>
                        <li><a href="ui-images"><?= $this->lang->line('Images') ?></a></li>
                        <li><a href="ui-lightbox"><?= $this->lang->line('Lightbox') ?></a></li>
                        <li><a href="ui-modals"><?= $this->lang->line('Modals') ?></a></li>
                        <li><a href="ui-rangeslider"><?= $this->lang->line('Range_Slider') ?></a></li>
                        <li><a href="ui-session-timeout"><?= $this->lang->line('Session_Timeout') ?></a></li>
                        <li><a href="ui-progressbars"><?= $this->lang->line('Progress_Bars') ?></a></li>
                        <li><a href="ui-sweet-alert"><?= $this->lang->line('Sweet_Alert') ?></a></li>
                        <li><a href="ui-tabs-accordions"><?= $this->lang->line('Tabs_and_Accordions') ?></a></li>
                        <li><a href="ui-typography"><?= $this->lang->line('Typography') ?></a></li>
                        <li><a href="ui-video"><?= $this->lang->line('Video') ?></a></li>
                        <li><a href="ui-general"><?= $this->lang->line('General') ?></a></li>
                        <li><a href="ui-colors"><?= $this->lang->line('Colors') ?></a></li>
                        <li><a href="ui-rating"><?= $this->lang->line('Rating') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-newspaper"></i>
                        <span class="badge rounded-pill bg-danger float-end">6</span>
                        <span><?= $this->lang->line('Forms') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements"><?= $this->lang->line('Form_Elements') ?></a></li>
                        <li><a href="form-validation"><?= $this->lang->line('Form_Validation') ?></a></li>
                        <li><a href="form-advanced"><?= $this->lang->line('Form_Advanced') ?></a></li>
                        <li><a href="form-editors"><?= $this->lang->line('Form_Editors') ?></a></li>
                        <li><a href="form-uploads"><?= $this->lang->line('Form_File_Upload') ?></a></li>
                        <li><a href="form-xeditable"><?= $this->lang->line('Form_Xeditable') ?></a></li>
                        <li><a href="form-repeater"><?= $this->lang->line('Form_Repeater') ?></a></li>
                        <li><a href="form-wizard"><?= $this->lang->line('Form_Wizard') ?></a></li>
                        <li><a href="form-mask"><?= $this->lang->line('Form_Mask') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-clipboard-list-outline"></i>
                        <span><?= $this->lang->line('Tables') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic"><?= $this->lang->line('Basic_Tables') ?></a></li>
                        <li><a href="tables-datatable"><?= $this->lang->line('Data_Tables') ?></a></li>
                        <li><a href="tables-responsive"><?= $this->lang->line('Responsive_Table') ?></a></li>
                        <li><a href="tables-editable"><?= $this->lang->line('Editable_Table') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-chart-donut"></i>
                        <span><?= $this->lang->line('Charts') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex"><?= $this->lang->line('Apex_charts') ?></a></li>
                        <li><a href="charts-chartjs"><?= $this->lang->line('Chartjs_Chart') ?></a></li>
                        <li><a href="charts-flot"><?= $this->lang->line('Flot_Chart') ?></a></li>
                        <li><a href="charts-knob"><?= $this->lang->line('Jquery_Knob_Chart') ?></a></li>
                        <li><a href="charts-sparkline"><?= $this->lang->line('Sparkline_Chart') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-emoticon-happy-outline"></i>
                        <span><?= $this->lang->line('Icons') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-boxicons"><?= $this->lang->line('Boxicons') ?></a></li>
                        <li><a href="icons-materialdesign"><?= $this->lang->line('Material_Design') ?></a></li>
                        <li><a href="icons-dripicons"><?= $this->lang->line('Dripicons') ?></a></li>
                        <li><a href="icons-fontawesome"><?= $this->lang->line('Font_awesome') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-map-marker-outline"></i>
                        <span><?= $this->lang->line('Maps') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google"><?= $this->lang->line('Google_Maps') ?></a></li>
                        <li><a href="maps-vector"><?= $this->lang->line('Vector_Maps') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-file-tree"></i>
                        <span><?= $this->lang->line('Multi_Level') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);"><?= $this->lang->line('Level_1_1') ?></a></li>
                        <li><a href="javascript: void(0);" class="has-arrow"><?= $this->lang->line('Level_1_2') ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);"><?= $this->lang->line('Level_2_1') ?></a></li>
                                <li><a href="javascript: void(0);"><?= $this->lang->line('Level_2_2') ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->