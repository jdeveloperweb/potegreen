			<?php
			$meses = array(
				'01' => 'January',
				'02' => 'February',
				'03' => 'March',
				'04' => 'April',
				'05' => 'May',
				'06' => 'Juny',
				'07' => 'July',
				'08' => 'August',
				'09' => 'September',
				'10' => 'Octuber',
				'11' => 'November',
				'12' => 'December'
			);

			?>
			<!-- Begin page -->
			<div id="wrapper">


				<!-- Start right Content here -->
				<div class="content-page">
					<!-- Start content -->
					<div class="content">

						<?php include 'layouts/topbaruser.php'; ?>

						<!-- ==================
                         PAGE CONTENT START
                         ================== -->
						<?php

						$id = $_SESSION['usuarioId'];

						$data = date("d/m/Y");
						$data = explode("/", $data);
						list($dia, $mes, $ano) = $data;
						$dia_antes = $dia - 1;
						$data = "$ano-$mes-$dia";

						$hoje= date('d-m-Y');
                    
                        $investia = 0;
                    	$resultado2=mysqli_query($conectar,"SELECT *, SUM(invest) as investdia, SUM(retorno) as retornomes FROM multiplassug WHERE MONTH(data)=MONTH( CURRENT_DATE )");
                    	while ($row1 = mysqli_fetch_array($resultado2)) {
							$investia = $row1['investdia'];
							$retornomes = number_format($row1['retornomes']/100, 2, ",", ".");
							$saldo = number_format(($row1['retornomes']/100)-$investia, 2, ",", ".");;
                    	}
							
                    	$resultado3=mysqli_query($conectar,"SELECT *, SUM(invest) as investmes FROM multiplassug WHERE MONTH(data)=MONTH( CURRENT_DATE ) AND DAY(data)=DAY( CURRENT_DATE )");
                        while ($row2 = mysqli_fetch_array($resultado3)) {
                        	  $investmes = $row2['investmes'];
                         }
					

						$tot_dia = 0;
						while ($linhas3 = mysqli_fetch_array($resultado3)) {
							if ($linhas3['id_user'] == $id) {
								$result_dia = number_format($linhas3['total_valor'] / 100, 2, ",", ".");
								$tot_dia = $result_dia;
							}
						}
						@$porcent_dia = number_format($tot_dia * 100 / (($_SESSION['bancaAtual'] / 100) - $tot_dia), 2, ",", ".");
						@$porcent_mes = number_format($tot_mes * 100 / (($_SESSION['bancaAtual'] / 100) - $tot_mes), 2, ",", ".");


						?>
						<div class="page-content-wrapper">

							<div class="container-fluid">
								<hr>
								<h5><span class="counter text-blue-grey"> Results - Multiplagreen - <?php echo $meses[date('m')] . ", " . date("d"); ?></span></h5>
								<div class="row">
									<div class="col-md-6 col-xl-3">
										<div class="mini-stat clearfix bg-white">
											<span class="mini-stat-icon bg-success mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
											<div class="mini-stat-info">
												<span class="counter text-success"><?php echo $investmes ?> units</span>
												Investment of the day
												<p class="text-muted mb-0 m-t-20"><cite><?php echo $investmes ?>% of total bankroll - Stake 1%</cite></p>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-xl-3">
										<div class="mini-stat clearfix bg-white">
											<span class="mini-stat-icon bg-success mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
											<div class="mini-stat-info">
												<span class="counter text-success"><?php echo $investia ?> units</span>
												Investment of the month
												<p class="text-muted mb-0 m-t-20"><cite><?php echo $investia ?>% of total bankroll</cite></p>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-xl-3">
										<div class="mini-stat clearfix bg-white">
											<span class="mini-stat-icon bg-success mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
											<div class="mini-stat-info">
												<span class="counter text-success"><?php echo $retornomes ?> units</span>
												Month return
												<p class="text-muted mb-0 m-t-20"><cite><?php echo $retornomes ?>% of total bankroll</cite></p>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-xl-3">
										<div class="mini-stat clearfix bg-white">
											<span class="mini-stat-icon bg-success mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
											<div class="mini-stat-info">
												<span class="counter text-success"><?php echo $saldo ?> units</span>
												Balance
												<p class="text-muted mb-0 m-t-20"><cite>Accumulated profit: <?php echo $saldo ?>%</cite></p>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<h5><span class="counter text-blue-grey"> My Profile </span></h5>
								<div class="row">

									<div class="col-12">

										<div class="card m-b-20">
											<div class="card-body">
												<dl class="row mb-0">
													<dt class="col-sm-2 text-right">Name</dt>
													<dd class="col-sm-10"><?php echo $_SESSION['usuarioNome']; ?></dd>

													<dt class="col-sm-2 text-right">E-mail</dt>
													<dd class="col-sm-10"><?php echo $_SESSION['usuarioEmail']; ?></dd>

													<dt class="col-sm-2 text-right">Package</dt>
													<dd class="col-sm-10"><?php echo $_SESSION['plano']; ?></dd>

													<dt class="col-sm-2 text-right">Subscriber since</dt>
													<dd class="col-sm-10"><?php echo date("d/m/Y", strtotime($_SESSION['dataini'])); ?></dd>

													<dt class="col-sm-2 text-right">Status</dt>
													<dd class="col-sm-10"><?php echo $_SESSION['status']; ?></dd>

													<dt class="col-sm-2 text-right">Password</dt>
													<dd class="col-sm-10">* * * * * * * <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#myModal2">Change Password</button></dd>
												</dl>

											</div>
										</div>

									</div> <!-- end col -->
									<!-- end row -->
								</div>
								<hr>
								<div class="row">
									<!-- sample modal content -->

									<div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content"> <div class="p-3">
												<h4 class="font-18 m-b-5 text-center">Cadastre sua nova senha</h4>
												

												<form class="form-horizontal m-t-30" action="processa/proc_cad_senha.php" method="POST">
												
													<div class="form-group">
														<hr>
													</div>
													
													<div class="form-group">
														<label for="userpassword">Cadastre sua senha</label>
														<input type="password" class="form-control" id="password" name="senha" placeholder="Senha">
													</div>

													<div class="form-group">
														<label for="userpassword">Confirme a senha</label>
														<input type="password" class="form-control" id="password_confirmation" name="senha1" placeholder="Confirme sua senha">
													</div>

													<div class="form-group row m-t-20">

														<div class="col-sm-12 text-left">
															<button class="btn btn-success w-md waves-effect waves-light" type="submit">Salvar senha</button>
														</div>
													</div>
												</form>

												<p class="text-center text-danger">

													<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

													<script>
														$('form').on('submit', function() {
															if ($('#password').val() != $('#password_confirmation').val()) {
																alert('Ops... as senhas digitadas são diferentes.');
																return false;
															}
														});
													</script>
													<?php
													if (isset($_SESSION['loginErro'])) {
														echo $_SESSION['loginErro'];
														unset($_SESSION['loginErro']);
													}
													?>
												</p>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div><!-- /.modal -->
							</div>

						</div><!-- container -->

					</div> <!-- Page content Wrapper -->

				</div> <!-- content -->

				<?php include 'layouts/footer.php'; ?>

			</div>
			<!-- End Right content here -->

			</div>
			<!-- END wrapper -->