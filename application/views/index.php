
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

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
                                                <h4 class="mb-0"><?= $user->saldo_moedas; ?><small> moedas</small></h4>
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
                                      <div class="card-body" >
                                <h3 class="card-title mb-4 text-center"><?= $this->lang->line('Evaluate_now') ?></h3><hr>

                                <div>
                                    <div class="pb-3 border-bottom">
                                        <div class="row align-items-center text-center">
                                            <div class="col-3 align-items-center text-center">
                                               <h6></h6>
                                                
                                                
                                            </div>
                                            <div class="col-6 align-items-center text-center">
                                                <h6></h6>
                                            </div>
                                            <div class="col-3">
                                               <h6><?= $this->lang->line('Is_website_right') ?></h6>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-items-center text-center">
                                            <div class="col-3 align-items-center text-center">
                                              
                                                <p class="mb-2">Futebol<br>27/07 <br> 14h00</p>
                                                
                                            </div>
                                            <div class="col-6 align-items-center text-center">
                                                <p class="mb-2">Botafogo x Avaí</p>
                                                <p class="mb-2">Botafogo vence com dois gols de diferença</p>
                                                <span class="badge rounded-pill badge-soft-warning">Encerra em: 2h2min</span>
                                                 
                                            </div>
                                            <div class="col-3">
                                                <div class="text-center">
                                                    <div>
                                                        <button type="button" class="btn btn-success btn-sm w-100 waves-effect waves-light" style="margin-bottom: 6px;padding-top: 20px;padding-bottom: 20px;"><i class="bx bx-like"></i> <?= $this->lang->line('Yes') ?></button>
                                                    </div>
                                                     
                                                    <div>
                                                        <button type="button" class="btn btn-danger btn-sm w-100 waves-effect waves-light"  style="margin-bottom: 6px;padding-top: 20px;padding-bottom: 20px;"><i class="bx bx-dislike"></i> <?= $this->lang->line('No') ?></button>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-items-center text-center">
                                            <div class="col-3 align-items-center text-center">
                                              
                                                <p class="mb-2">27/07 <br> 14h00</p>
                                                
                                            </div>
                                            <div class="col-6 align-items-center text-center">
                                                <p class="mb-2">Botafogo x Avaí</p>
                                                <p class="mb-2">Botafogo vence com dois gols de diferença</p>
                                                <span class="badge rounded-pill badge-soft-warning">Encerra em: 2h2min</span>
                                                 
                                            </div>
                                            <div class="col-3">
                                                <div class="text-center">
                                                    <div>
                                                        <button type="button" class="btn btn-success btn-sm w-100 waves-effect waves-light" style="margin-bottom: 6px;padding-top: 20px;padding-bottom: 20px;"><i class="bx bx-like"></i> <?= $this->lang->line('Yes') ?></button>
                                                    </div>
                                                     
                                                    <div>
                                                        <button type="button" class="btn btn-danger btn-sm w-100 waves-effect waves-light"  style="margin-bottom: 6px;padding-top: 20px;padding-bottom: 20px;"><i class="bx bx-dislike"></i> <?= $this->lang->line('No') ?></button>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-items-center text-center">
                                            <div class="col-3 align-items-center text-center">
                                              
                                                <p class="mb-2">27/07 <br> 14h00</p>
                                                
                                            </div>
                                            <div class="col-6 align-items-center text-center">
                                                <p class="mb-2">Botafogo x Avaí</p>
                                                <p class="mb-2">Botafogo vence com dois gols de diferença</p>
                                                <span class="badge rounded-pill badge-soft-warning">Encerra em: 2h2min</span>
                                                 
                                            </div>
                                            <div class="col-3">
                                                <div class="text-center">
                                                    <div>
                                                        <button type="button" class="btn btn-success btn-sm w-100 waves-effect waves-light" style="margin-bottom: 6px;padding-top: 20px;padding-bottom: 20px;"><i class="bx bx-like"></i> <?= $this->lang->line('Yes') ?></button>
                                                    </div>
                                                     
                                                    <div>
                                                        <button type="button" class="btn btn-danger btn-sm w-100 waves-effect waves-light"  style="margin-bottom: 6px;padding-top: 20px;padding-bottom: 20px;"><i class="bx bx-dislike"></i> <?= $this->lang->line('No') ?></button>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-items-center text-center">
                                            <div class="col-3 align-items-center text-center">
                                              
                                                <p class="mb-2">27/07 <br> 14h00</p>
                                                
                                            </div>
                                            <div class="col-6 align-items-center text-center">
                                                <p class="mb-2">Botafogo x Avaí</p>
                                                <p class="mb-2">Botafogo vence com dois gols de diferença</p>
                                                <span class="badge rounded-pill badge-soft-warning">Encerra em: 2h2min</span>
                                                 
                                            </div>
                                            <div class="col-3">
                                                <div class="text-center">
                                                     <div>
                                                        <button type="button" class="btn btn-success btn-sm w-100 waves-effect waves-light" style="margin-bottom: 6px;padding-top: 20px;padding-bottom: 20px;"><i class="bx bx-like"></i> <?= $this->lang->line('Yes') ?></button>
                                                    </div>
                                                     
                                                    <div>
                                                        <button type="button" class="btn btn-danger btn-sm w-100 waves-effect waves-light"  style="margin-bottom: 6px;padding-top: 20px;padding-bottom: 20px;"><i class="bx bx-dislike"></i> <?= $this->lang->line('No') ?></button>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-items-center text-center">
                                            <div class="col-3 align-items-center text-center">
                                              
                                                <p class="mb-2">27/07 <br> 14h00</p>
                                                
                                            </div>
                                            <div class="col-6 align-items-center text-center">
                                                <p class="mb-2">Botafogo x Avaí</p>
                                                <p class="mb-2">Botafogo vence com dois gols de diferença</p>
                                                <span class="badge rounded-pill badge-soft-warning">Encerra em: 2h2min</span>
                                                 
                                            </div>
                                            <div class="col-3">
                                                <div class="text-center">
                                                    <div>
                                                        <button type="button" class="btn btn-success btn-sm w-100 waves-effect waves-light" style="margin-bottom: 6px;padding-top: 20px;padding-bottom: 20px;"><i class="bx bx-like"></i> <?= $this->lang->line('Yes') ?></button>
                                                    </div>
                                                     
                                                    <div>
                                                        <button type="button" class="btn btn-danger btn-sm w-100 waves-effect waves-light"  style="margin-bottom: 6px;padding-top: 20px;padding-bottom: 20px;"><i class="bx bx-dislike"></i> <?= $this->lang->line('No') ?></button>
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
                </div>
                
                <div class="row">
                  <div class="col-md-12 col-xl-12">
                        <div class="row">
                           <div class="col-md-12 col-xl-4">
                                <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4"><?= $this->lang->line('Last_Ranking') ?></h4>

                                <ul class="inbox-wid list-unstyled">
                                    <li class="inbox-list-item">
                                        <a href="javascript: void(0);">
                                            <div class="d-flex align-items-start">
                                                <div class="me-3 align-self-center">
                                                    <img src="<?= base_url("assets/images/users/avatar-3.jpg") ?>" alt="avatar-3" class="avatar-sm rounded-circle">
                                                </div>
                                                <div class="flex-1 overflow-hidden">
                                                    <h5 class="font-size-16 mb-1">Paul</h5>
                                                    <p class="text-truncate mb-0 "> 52 pontos</p>
                                                </div>
                                                <div class="font-size-12 ms-auto text-dark" style="text-align:right;">
                                                    1º <p>Prêmio: R$2.780</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="inbox-list-item">
                                        <a href="javascript: void(0);">
                                            <div class="d-flex align-items-start">
                                                <div class="me-3 align-self-center">
                                                    <img src="assets/images/users/avatar-4.jpg" alt="avatar-4" class="avatar-sm rounded-circle">
                                                </div>
                                                <div class="flex-1 overflow-hidden">
                                                    <h5 class="font-size-16 mb-1">Mary</h5>
                                                    <p class="text-truncate mb-0">50 pontos</p>
                                                </div>
                                                <div class="font-size-12 ms-auto text-dark" style="text-align:right;">
                                                    2º <p>Prêmio: R$1.250</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="inbox-list-item">
                                        <a href="javascript: void(0);">
                                            <div class="d-flex align-items-start">
                                                <div class="me-3 align-self-center">
                                                    <img src="assets/images/users/avatar-5.jpg" alt="avatar-5" class="avatar-sm rounded-circle">
                                                </div>
                                                <div class="flex-1 overflow-hidden">
                                                    <h5 class="font-size-16 mb-1">Cynthia</h5>
                                                    <p class="text-truncate mb-0">45 pontos</p>
                                                </div>
                                                <div class="font-size-12 ms-auto text-dark" style="text-align:right;">
                                                    3º <p>Prêmio: R$580</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="inbox-list-item">
                                        <a href="javascript: void(0);">
                                            <div class="d-flex align-items-start">
                                                <div class="me-3 align-self-center">
                                                    <img src="assets/images/users/avatar-6.jpg" alt="avatar-6" class="avatar-sm rounded-circle">
                                                </div>
                                                <div class="flex-1 overflow-hidden">
                                                    <h5 class="font-size-16 mb-1">Darren</h5>
                                                    <p class="text-truncate mb-0">44 pontos</p>
                                                </div>
                                                <div class="font-size-12 ms-auto text-dark" style="text-align:right;">
                                                    4º <p></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                <div class="text-center">
                                    <a href="javascript: void(0);" class="btn btn-dark btn-sm">Ver outros dias</a>
                                </div>
                            </div>
                        </div>
                            </div>
                            <div class="col-md-12 col-xl-8">
                                <div class="card">
                                      <div class="card-body">
                                <h4 class="card-title mb-4"><?= $this->lang->line('Lasts_results') ?></h4>

                                <div class="table-responsive">
                                    <table class="table table-centered">
                                        <thead>
                                            <tr>
                                                <th scope="col"><?= $this->lang->line('Event') ?></th>
                                                <th scope="col"><?= $this->lang->line('Website_opinion') ?></th>
                                                <th scope="col"><?= $this->lang->line('Results') ?></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>5º Páreo - Gulfstream</td>
                                                <td>Cavalo 1 vence o cavalo 2</td>
                                                <td><span class="badge badge-soft-success font-size-12">Acertou</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Portuguesa x Flamengo</td>
                                                <td>Flamengo vence no 1T</td>
                                                <td><span class="badge badge-soft-danger font-size-12">Errou</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fluminense x Vasco</td>
                                                <td>Fluminense vence</td>
                                                <td><span class="badge badge-soft-success font-size-12">Acertou</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fluminense x Vasco</td>
                                                <td>Fluminense vence</td>
                                                <td><span class="badge badge-soft-success font-size-12">Acertou</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fluminense x Vasco</td>
                                                <td>Fluminense vence</td>
                                                <td><span class="badge badge-soft-success font-size-12">Acertou</span>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>

                                <div class="text-center">
                                    <a href="javascript: void(0);" class="btn btn-dark btn-sm">Ver mais</a>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <!--<div class="row">
                    <div class="col-xl-6">
                        <div class="card bg-warning">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                   
                                    <div class="flex-1">
                                        <div class="font-size-18 text-white mt-0">Total no Pote:</div>
                                        <div class="font-size-24 text-primary mt-0">2.450</div>
                                        <div class="font-size-18 text-white mt-0">moedas</div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-7">
                                        <p class="mb-0"><span class="text-primary me-2">Moedas </span></p>
                                    </div>
                                    <div class="col-5 align-self-center">
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                     <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                   
                                    <div class="flex-1">
                                        <div class="font-size-16 mt-2">New Orders</div>
                                    </div>
                                </div>
                                <h4 class="mt-4">1,368</h4>
                                <div class="row">
                                    <div class="col-7">
                                        <p class="mb-0"><span class="text-success me-2"> 0.28% <i class="mdi mdi-arrow-up"></i> </span></p>
                                    </div>
                                    <div class="col-5 align-self-center">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
             
                    
                </div>-->
                <!-- end row -->

                </div>
            <!-- End Page-content --></div>
               
     






