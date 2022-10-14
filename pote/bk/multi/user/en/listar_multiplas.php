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

                      <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-lg-12">
                                   

                                    <div class="card m-b-20">
                                        <div class="card-body">
																				        
<div class="card m-b-20">
                                        <div class="card-body"></br></br>
                                            <h4 class="mt-0 m-b-30 header-title">Multiples selected by Multiplagreen </h4>

<!-- RETORNA DO BANCO AS MULTIPLAS CADASTRADAS QUE AINDA NÃO FORAM PROCESSADAS -->
<?php
	
	
$data = date("d/m/Y");

$data = explode("/", $data);

list($dia, $mes, $ano) = $data;

$dia_antes = $dia;

$data = "$ano-$mes-$dia";
 
 
	$hoje= date('d-m-Y');
	$resultado2=mysqli_query($conectar, "SELECT * FROM multiplassug WHERE data >= '$data' and status ='Pendente'");
	$linhas2=mysqli_num_rows($resultado2);
	
?>	
<p class="text-muted m-b-30 font-14"> List of selected multiples that will occur from <strong><?php echo $meses[date('m')].", ".date("d"); ?></strong>.</p>
<p class="text-muted m-b-30 font-14"> Our suggestion is that you follow <strong>all multiples</strong> with <strong>1% of your bankroll total</strong>. By following our strategy, you will get the same results shown on our dashboard.</p>
<p class="text-muted m-b-30 font-14"> <strong>If there is already a single game selected, wait a few minutes for the multiples to be posted.</strong></p>
                                            <div class="table-responsive">
                                                <table class="table table-vertical mb-0">
												<thead>
                                                    <tr>
                                                        <th>Dia</th>
                                                        <th class="col-sm-5">Matches</th>
                                                        <th>Odd</th>
                                                        <th>Status</th>  
                                                        
                                                       
                                                    </tr>
                                                </thead>
															 <tbody>
															<?php  while($linhas2 = mysqli_fetch_array($resultado2)){	
															        $datacad = date(('M, d'), strtotime($linhas2['data']));
																	echo "<tr> ";
																	$encoding = mb_internal_encoding();
																	echo "<td><i class='mdi mdi-checkbox-blank-circle text-blue-grey'></i>".$datacad."</td>";
																	echo "<td><p text-transform: capitalize class='m-0 text-muted font-14 uppercase'>".mb_strtoupper($linhas2['descricao'],$encoding)."</p></td>";
																	echo "<td> <p class='m-0 text-muted font-14'>@".$linhas2['oddtotal']/100 ."</p></td>	";
																	 if($linhas2['status']=='Vencida') {
																		 echo "<td><span class='badge badge-pill badge-success'> Win </span></td>";}

																	    else if($linhas2['status']=='Perdida') {
																		 echo "<td><span class='badge badge-pill badge-danger'> Lose </span></td>";}
																		 else if($linhas2['status']=='Cash out') {
																		 echo "<td><span class='badge badge-pill badge-primary'> Cash out</span></td>";}
																		 else if($linhas2['status']=='Anulado') {
																		 echo "<td><span class='badge badge-pill badge-blue-grey'> Cancel </span></td>";}
																		 else if($linhas2['status']=='Em análise') {
																		 echo "<td><span class='badge badge-pill badge-primary'>".$linhas2['status']."</span></td>";}

																		else {
															echo "<td><span class='badge badge-pill badge-warning'> Waiting </span></td>";}
														
															?>							
																													
															
															 <?php }?>											
																 
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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
