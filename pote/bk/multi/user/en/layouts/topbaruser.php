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
                <a class="nav-link waves-effect toggle-search" href="https://multiplagreen.com/user/en/administrador.php?link=1"> Dashboard home
                   
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
                    English <img src="public/assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt="" />
                </a>
                <div class="dropdown-menu dropdown-menu-right language-switch">
                    <a class="dropdown-item" href="../administrador.php?link=1"><img src="public/assets/images/flags/brasil_flag.jpg" alt="" height="16" /><span> Português </span></a>
                    <a class="dropdown-item" href="#"><img src="public/assets/images/flags/germany_flag.jpg" alt="" height="16" /><span> German(soon) </span></a>
                    <a class="dropdown-item" href="#"><img src="public/assets/images/flags/spain_flag.jpg" alt="" height="16" /><span> Spanish(soon)  </span></a>
                </div>
            </li>
            <!-- notification-->

            <!-- User-->
            <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="public/assets/images/users/<?php echo $_SESSION['usuarioAvatar']; ?>" alt="Avatar" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <a class="dropdown-item" data-toggle="modal" data-target="#myModal"><i class="dripicons-user text-muted"></i> Edit photo</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="sair.php"><i class="dripicons-exit text-muted"></i> Logout</a>
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
                <h3 class="page-title">Bankroll Management - Multiplagreen</h3>
            </li>
        </ul>

        <div class="clearfix"></div>
    </nav>

</div>
<!-- Top Bar End -->

<div class="row">
    <!-- sample modal content -->
    
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Edit photo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="card-body">

                        <p class="text-muted m-b-30 font-14">Choose a new avatar for your profile.</p>

                        <?php 
		  $foto = $_SESSION['usuarioAvatar'];
		  ?>
				<div class="form-group">
					<label>	Current photo</label> 
					<div class="col-sm-10">
						<img src="<?php echo "public/assets/images/users/$foto"; ?>" width="100" height=auto>
						<input type="hidden" name="id" value='<?php echo $_SESSION['usuarioId'] ?>'>
					</div>
				</div>
		 
		  
		
		  
		  <input type="hidden" name="id" value="<?php echo $id_produto;?>">


                        <form action="processa/proc_edit_avatar.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Choose a new photo</label>
                                <input type="file" name="arquivo" class="filestyle" data-buttonText="Search" data-buttonname="btn-secondary">
                            </div>
                           
                            

                        
                    </div>
                </div>
                <div class="modal-footer">
                <div class="form-group">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                 </div></form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>