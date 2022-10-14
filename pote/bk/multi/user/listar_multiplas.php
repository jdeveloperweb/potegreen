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
                                            <h4 class="mt-0 m-b-30 header-title">Múltiplas selecionadas pelo Multiplagreen </h4>

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
<p class="text-muted m-b-30 font-14"> Lista das múltiplas selecionados que ocorrerão a partir de <strong><?php echo date("d")." de ".$meses[date('m')]; ?></strong>.</p>
<p class="text-muted m-b-30 font-14"> Nossa sugestão é que você siga <strong>todas as múltiplas</strong> com <strong>1% do total da sua banca</strong>. Seguindo nossa estratégia, você obterá os mesmos resultados mostrados em nosso painel.</p>
<p class="text-muted m-b-30 font-14"> <strong>Caso já haja jogo simple selecionado, aguarde alguns minutos até que as múltiplas sejam postadas.</strong></p>
                                            <div class="table-responsive">
                                                <table class="table table-vertical mb-0">
												<thead>
                                                    <tr>
                                                        <th>Dia</th>
                                                        <th class="col-sm-5">Jogos</th>
                                                        <th>Odd</th>
                                                        <th>Status</th>  
                                                        
                                                       
                                                    </tr>
                                                </thead>
															 <tbody>
															<?php  while($linhas2 = mysqli_fetch_array($resultado2)){	
															        $datacad = date(('d/m/Y'), strtotime($linhas2['data']));
																	echo "<tr> ";
																	$encoding = mb_internal_encoding();
																	echo "<td><i class='mdi mdi-checkbox-blank-circle text-blue-grey'></i>".$datacad."</td>";
																	echo "<td><p text-transform: capitalize class='m-0 text-muted font-14 uppercase'>".mb_strtoupper($linhas2['descricao'],$encoding)."</p></td>";
																	echo "<td> <p class='m-0 text-muted font-14'>@".$linhas2['oddtotal']/100 ."</p></td>	";
																	 if($linhas2['status']=='Vencida') {
																		 echo "<td><span class='badge badge-pill badge-success'>".$linhas2['status']."</span></td>";}

																	    else if($linhas2['status']=='Perdida') {
																		 echo "<td><span class='badge badge-pill badge-danger'>".$linhas2['status']."</span></td>";}
																		 else if($linhas2['status']=='Cash out') {
																		 echo "<td><span class='badge badge-pill badge-primary'>".$linhas2['status']."</span></td>";}
																		 else if($linhas2['status']=='Anulado') {
																		 echo "<td><span class='badge badge-pill badge-blue-grey'>".$linhas2['status']."</span></td>";}
																		 else if($linhas2['status']=='Em análise') {
																		 echo "<td><span class='badge badge-pill badge-primary'>".$linhas2['status']."</span></td>";}

																		else {
															echo "<td><span class='badge badge-pill badge-warning'>".$linhas2['status']."</span></td>";}
														
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
