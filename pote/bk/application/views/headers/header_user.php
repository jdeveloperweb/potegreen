<!DOCTYPE html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- App css -->
<?php echo link_tag("assets/user_assets/public/assets/css/bootstrap.min.css"); ?>
    <?php echo link_tag("assets/user_assets/public/assets/css/icons.css"); ?>
    <?php echo link_tag("assets/user_assets/public/assets/css/style.css"); ?>
<!-- incluidos -->
<?php echo link_tag("assets/user_assets/public/plugins/bootstrap-rating/bootstrap-rating.css"); ?>
<?php echo link_tag("assets/user_assets/public/plugins/c3/c3.min.css"); ?>
<?php echo link_tag("assets/user_assets/public/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css"); ?>
<?php echo link_tag("assets/user_assets/public/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css"); ?>
<?php echo link_tag("assets/user_assets/public/plugins/select2/css/select2.min.css"); ?>
<?php echo link_tag("assets/user_assets/public/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css"); ?>
<script src="<?php echo base_url(); ?>jqueryrow.js"></script>
<script type="text/javascript">
function add_row()
{
 $rowno=$("#employee_table tr").length;
 $rowno=$rowno+1;
 $("#employee_table tr:last").after("<tr id='row"+$rowno+"'><td><input type='time' class='form-control' maxlength='25'  name='timep[]'   id='timep' /></td><td><input type='text' class='form-control' maxlength='25'  name='timea[]'  placeholder='TIMEA' id='timeA' /></td><td><input type='text' class='form-control' maxlength='25' name='timeb[]'  placeholder='TIMEB' id='timeB' /></td><td><input type='text' class='form-control' maxlength='255' name='link[]'  placeholder='http://' id='link' /></td><td width='25%'><select class='form-control select2' name='resultado[]'  ><option >Select</option><option value='Time1 vence'>Time1 vence</option><option value='Time1 1T'>Time1 1T</option><option value='Time2 vence'>Time2 vence</option><option value='Time2 1T'>Time2 1T</option><option value='Empate'>Empate</option><option value='Time1 ou X'>Time1 ou X</option><option value='Time2 ou X'>Time2 ou X</option><option value='+1,5 gols'>+1,5 gols</option><option value='+ 2,5 gols'>+ 2,5 gols</option><option value='Handcap -0.5 , -1.0'>Handcap -0.5 , -1.0</option><option value='Ambos marcam'>Ambos marcam</option><option value='- 3,5 gols'>- 3,5 gols</option><option value='Time1 hand -1,5'>Time1 hand -1,5</option><option value='Time2 hand -1,5'>Time2 hand -1,5</option></optgroup></select></td><td><input type='number'  step='0.01'  min='1.00'class='form-control' maxlength='25' name='odd[]'  placeholder='1.00' id='odd' /></td><td><button type='button'class='btn btn-success waves-effect waves-light' onclick='add_row();' value='ADD ROW'><i class='mdi mdi-plus '></i></button><input type='button' class='btn btn-danger waves-effect waves-light' value='Excluir' onclick=delete_row('row"+$rowno+"')></td></br></tr></br>");
}
function delete_row(rowno)
{
 $('#'+rowno).remove();
}
</script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>

</head>