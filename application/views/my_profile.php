

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">


     

                
                 <div class="row">
                  <div class="col-md-12 col-xl-12">
                        <div class="row">
                           <div class="col-md-12 col-xl-3">
                                <div class="card">
                            <div class="card-body">
                                 <h4 class="card-title mb-4 text-center">Editar avatar</h4>
                                <div class="profile-widgets py-3">
                                    <div class="text-center">
                                        <div>
                                            <img src="<?= base_url('assets/images/users/avatar-2.jpg'); ?>" alt="avatar-2"class="avatar-lg mx-auto img-thumbnail rounded-circle">
                                            <div class="online-circle"><i class="fas fa-circle text-success"></i>
                                            </div>
                                        </div>
                                        <div class="mt-3 ">
                                            <p class="text-body mt-1 mb-1">Tamanho ideal:<br>256x256 pixels</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <button type="button" class="btn  btn-outline-warning btn-sm d-grid waves-effect waves-light">Editar</button>
                                  
                                </div>
                            </div>
                        </div>
                            </div>
                            <div class="col-md-12 col-xl-9">
                                <div class="card">
                                     
                                      <div class="card-body">
                                         <?php 
                                          //$resultados   = $db->query('SELECT id, username, nomecompleto, avatar, email, telefone FROM users')->getResultObject();
                                          //$db ->close();
                                         
                                         // print_r ($resultados);
                                     ?>
                                <h5 class="card-title mb-3">Dados pessoais</h5>

                                <br>

                                <div class="mt-3">
                                    <p class="font-size-12 text-muted mb-1">Nome Completo</p>
                                    <h6><?= $user->nome." ".$user->sobrenome; ?></h6>
                                </div>
                                <div class="mt-3">
                                    <p class="font-size-12 text-muted mb-1">E-mail</p>
                                    <h6><?= $user->email; ?></h6>
                                </div>

                                <div class="mt-3">
                                    <p class="font-size-12 text-muted mb-1">Data da última alteração</p>
                                    <h6><?php
                                    $date = strtotime($user->data_alt);
                                    echo date('d/m/Y H:i:s', $date);
                                     
                                    
                                    ?></h6>
                                </div>

                                <div class="row align-items-center">
                                    <button type="button" class="btn  btn-outline-warning btn-sm d-grid waves-effect waves-light">Editar</button>
                                  
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            
                <!-- end row -->

            </div>

          