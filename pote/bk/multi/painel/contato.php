			<?php include 'seguranca.php'; ?>
			<?php
			
			$meses = array(
				'01'=>'Janeiro',
				'02'=>'Fevereiro',
				'03'=>'Março',
				'04'=>'Abril',
				'05'=>'Maio',
				'06'=>'Junho',
				'07'=>'Julho',
				'08'=>'Agosto',
				'09'=>'Setembro',
				'10'=>'Outubro',
				'11'=>'Novembro',
				'12'=>'Dezembro'
			);
			?>
			
        <!-- Begin page -->
        <div id="wrapper">


            <!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    
				<?php include 'layouts/topbar.php'; ?>				
					
                    <!-- Top Bar End -->

                    <!-- ==================
                         PAGE CONTENT START
                         ================== -->

                     <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-lg-12">
                                   

                                    <div class="card m-b-20">
                                        										
										<div class="card-body">
							 <form class="form-horizontal" method="POST" action="processa/proc_trans_banca.php">	
							<div class="form-group">
										<label>Fale Conosco</label>
													<p class="text-muted m-b-30 font-14"> O melhor canal para fala conosco é nos chamando pelo <strong>Direct Messenger do Instagram </strong>. Temos sempre um atendente disponível para responder em até 1h.  </br></br>Caso prefira, nosso e-mail é o contato@multiplagreen.com. Nosso tempo máximo para resposta é de até 5 dias úteis. </br></br> </p>
										<div>
											
												</div>
											</div><!-- input-group -->
										</div>
										
									</div>
                                    </div>

                                    

                                </div> <!-- end col -->

                               <!-- end col -->
                            </div> <!-- end row -->

                        </div><!-- container-fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <?php include 'layouts/footer.php'; ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->
