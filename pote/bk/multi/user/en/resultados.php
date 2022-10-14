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
                                            <h4 class="mt-0 m-b-30 header-title"> Results of Single Games selected by Multiplagreen </h4>

<!-- RETORNA DO BANCO AS MULTIPLAS CADASTRADAS QUE AINDA NÃO FORAM PROCESSADAS -->
<?php
	
$novadata = @$_GET['ndate'];
$data = date("d/m/Y");

$data = explode("/", $data);

list($dia, $mes, $ano) = $data;

$dia_antes = $dia-1;

if ($novadata == ""){
$data = "$ano-$mes-$dia";}
else {
	$data = $novadata ;
}
 
 
	$hoje= date('d-m-Y');
	$resultado2=mysqli_query($conectar,"SELECT * FROM jogosug WHERE data = '$data' ORDER  BY hora ASC");
	$linhas2=mysqli_num_rows($resultado2);
	
?>	
<p class="text-muted m-b-30 font-14"> Results of the day <strong><?php echo date(('M, d'), strtotime($data)); ?></strong>.</br>
To see the result of some other date, select the day
	<form class="form-horizontal" method="GET" action="administrador.php?link=2">	
										<div class="form-group">
                                                    <div>
                                                        <div class="input-group col-lg-4">
															            <input class="input-group " id="link" name="link" type="hidden" value="2" />
																		 <input type="date" class="form-control" name="ndate">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                            </div>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>

                                            <div class="form-group mb-0">
                                                    
                                                    <div>
                                                        <div class="form-group col-lg-12">
											 <p class= "text-align-center"> <button type="submit" class="btn btn-primary">Seach</button></br></p>
												
													  
                                                        </div> 
                                                    </div>
                                                </div><div class="form-group">

		  </div>

                               </form>  



 </p>
											
<?php if ($linhas2 < 1 ){
	echo "We do not have results registered on this date. For games prior to 11/23, <a href='https://multiplagreen.com/resultados.php'  target='_blank'>Click here.</a>";
	
}else {?>
                                            <div class="table-responsive">
                                                <table class="table table-vertical mb-0">
												<thead>
                                                    <tr>
                                                        <th>Time</th>
                                                        <th class="col-sm-3">Match</th>
                                                        <th>Odd</th>
                                                        <th>Status</th>
                                                        
                                                    
                                                    </tr>
                                                </thead>
															 <tbody>
															<?php  while($linhas2 = mysqli_fetch_array($resultado2)){	
															        $encoding = mb_internal_encoding();
																	echo "<tr> ";
																	//converte hora min seg apenas para hora e minuto
																	$yourtime = $linhas2['hora'];
																	preg_match("/([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})/", $yourtime, $match);
																	$hour = $match[1];
																	$min = $match[2];
																	$sec = $match[3];
																	$hora = $hour.":".$min;
																	
																	echo "<td><i class='mdi mdi-checkbox-blank-circle text-blue-grey'></i>".$hora."</td>";
																	echo "<td><p text-transform: capitalize class='m-0 text-muted font-14 uppercase'>".mb_strtoupper($linhas2['timea'],$encoding)."  v ".mb_strtoupper($linhas2['timeb'],$encoding)." </br><strong>".mb_strtoupper($linhas2['resultado'],$encoding)." </strong></p></td>";
																	echo "<td> <p class='m-0 text-muted font-14'>@".$linhas2['oddini']/100 ."</p></td>	";
																	 if($linhas2['status']=='Vencida') {
																		 echo "<td><span class='badge badge-pill badge-success'>Win</span></td>";}

																	    else if($linhas2['status']=='Perdida') {
																		 echo "<td><span class='badge badge-pill badge-danger'>Lose</span></td>";}
																		 else if($linhas2['status']=='Em análise') {
																		 echo "<td><span class='badge badge-pill badge-primary'>".$linhas2['status']."</span></td>";}

																		else {
															echo "<td><span class='badge badge-pill badge-warning'>Waiting</span></td>";}	 
																																	?>							
 </tr>
																												
															
															 <?php }?>											
																 
                                                    </tbody>
                                                </table>
	</div> <?php }?>
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
