<?php
session_start();
// include_once("../seguranca.php");
include_once("../conexao.php");

    //Exemplo webhook Eduzz

    foreach ($_POST as $key => $value)  
     $$key = $value;


    if( $api_key == 'e9c501c479')
    {

        switch ($trans_status)
        {
            case '3' :
                        #Pagou 
                        echo "PAGOU";
						$query = mysql_query("UPDATE user set nome = '$cus_name', celular = '$cus_cel', dataini = NOW(), datafim = DATE_ADD(NOW(), INTERVAL +31 DAY), status = 'Ativo'  WHERE email ='$cus_email'");

                break;
             case '4':   #Aguardando reembolso
						$query = mysql_query("UPDATE user set nome = '$cus_name', celular = '$cus_cel',  status = 'Pgto. Cancelado'  WHERE email ='$cus_email'");

                        break;
			case '6':   #Aguardando reembolso
	$query = mysql_query("UPDATE user set nome = '$cus_name', celular = '$cus_cel', status = 'Ag. Reembolso'  WHERE email ='$cus_email'");

                        break;
            case '7':   #Reembolsado
	$query = mysql_query("UPDATE user set nome = '$cus_name', celular = '$cus_cel', status = 'Reembolsado'  WHERE email ='$cus_email'");

                        break;
            case '8':   #Em análise
	$query = mysql_query("UPDATE user set nome = '$cus_name', celular = '$cus_cel', status = 'Em análise'  WHERE email ='$cus_email'");

                        break;
                          case '15':   #Ag Pagamento
	$query = mysql_query("UPDATE user set nome = '$cus_name', celular = '$cus_cel', status = 'Aguardando Pgto'  WHERE email ='$cus_email'");

                        break;

                #...
                #...
                #...
            default:
                echo "STATUS DESCONHECIDO";
                break;
        }
			
    }
    else
        echo "ACESSO INVALIDO";

    

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<body>
	
		<?php
		
		
		if (mysql_affected_rows() != 0 ){	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/retorno.php'>
				<script type=\"text/javascript\">
					alert(\"Obrigado!!!.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/'>
				<script type=\"text/javascript\">
					alert(\"Entre em contato pelo nosso Instagram. Pode ter ocorrido algum problema.\");
				</script>
			";		   

		}

		?>
	</body>
</html>