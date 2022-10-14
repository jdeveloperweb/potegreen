<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="<?= base_url('assets/images/users/avatar-2.jpg'); ?>"  alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="javascript: void(0);" class="text-dark fw-medium font-size-16"><?= $user->nome; ?></a>
                <p class="text-body mt-1 mb-0 font-size-13">Pontuação atual: 13 pontos</p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title"><?= $this->lang->line('Menu') ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-outline "></i>
                        <span><?= $this->lang->line('Profile') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="my_profile"><?= $this->lang->line('Personal_data') ?></a></li>
                        <li><a href="my-reviews"><?= $this->lang->line('Reviews') ?></a></li>
                        <li><a href="my-ranking"><?= $this->lang->line('Ranking') ?></a></li>
                    </ul>
                </li>
                
               
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-wallet-outline"></i>
                        <span><?= $this->lang->line('Financial') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="financial-buy-coins"><?= $this->lang->line('Buy_coins') ?></a></li>
                        <li><a href="financial-transfer-coins"><?= $this->lang->line('Transfer_coins') ?></a></li>
                        <li><a href="financial-withdraw"><?= $this->lang->line('Withdraw') ?></a></li>
                        <li><a href="financial-rates"><?= $this->lang->line('Conversion_rates') ?></a></li>
                    </ul>
                </li>
                 <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-note-outline"></i>
                        <span><?= $this->lang->line('Extract') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="extract-purchases"><?= $this->lang->line('Purchases') ?></a></li>
                        <li><a href="extract-coins"><?= $this->lang->line('Coins') ?></a></li>
                    </ul>
                </li>
                

<hr>
               

               

               <li>
                    <li><a href="how-it-works"><i class="mdi mdi-mdi mdi-help-circle-outline "></i><?= $this->lang->line('How_it_works') ?></a> </li>
                    
                 </li>
               <li>
                    <li><a href="suport"><i class="mdi mdi-mdi mdi-chat-outline"></i><?= $this->lang->line('Suport') ?></a> </li>
                    
                 </li>

                

               
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->