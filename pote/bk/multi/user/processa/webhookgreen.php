<?php
session_start();
// include_once("../seguranca.php");
include_once("../conexao.php");

// inicializa as sessões
$_SESSION['usuarioId'] ="";
$_SESSION['username'] ="";
$_SESSION['usuarioEmail'] ="";
$_SESSION['usuarioSenha'] ="";
$_SESSION['perfil'] ="";
$_SESSION['status'] ="";

// webhook Eduzz 

foreach ($_POST as $key => $value)
    $$key = $value;
    $_SESSION['username'] = $cus_name;
    $_SESSION['usuarioEmail'] = $cus_email;


if ($api_key == 'e9c501c479') {
    switch ($trans_status) {
       case '1':
            #Checando se é usuário novo 
            
            $resultado = mysqli_query($conectar, "SELECT * FROM user WHERE email = '$cus_email'");
            if($resultado->num_rows != 0) {
                // se ja estiver cadastrado, coloca status "Fatura Aberta"
                echo "NUM = ".$resultado->num_rows;
                $query = mysqli_query($conectar, "UPDATE user set username = '$cus_name', telefone = '$cus_cel', dataini = NOW(), datafim = DATE_ADD(NOW(), INTERVAL +31 DAY), status = 'Em Aberto', plano='$product_name'  WHERE email ='$cus_email';");
           } else {
               // se não existir vamos cadastrar ele e redirecionar para que ele cadastre a senha
               $resultado2 = mysqli_query($conectar,"INSERT INTO user (username, telefone, email, bancaini, bancaatual, perfil, senha, status, plano, avatar) values ('$cus_name','$cus_cel', '$cus_email',0,0,'user','123456','Em Aberto','$product_name','user.jpg');");	 
               echo $cus_name;
            //Verifica se deu certo o cadastro e redireciona o usuário para cadastrar a senha
            if (mysqli_affected_rows($conectar) != 0) {
                echo "
                        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/user'>
                        <script type=\"text/javascript\">
                            alert(\"Faça o login com a senha previamente cadastrada e seja bem-vindo!\");
                        </script>
                    ";
            } else {
                echo "
                        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/'>
                        <script type=\"text/javascript\">
                            alert(\"Entre em contato pelo Direct do nosso Instagram. Pode ter ocorrido algum problema.\");
                        </script>
                    ";
            }
          
          
          
          
            }
           $mysqli->close();
    }

    switch ($recurrence_status) {
        case '1':
            #Ativo 
            echo "Em dia";
            $query = mysqli_query($conectar, "UPDATE user set username = '$cus_name', telefone = '$cus_cel', dataini = NOW(), datafim = DATE_ADD(NOW(), INTERVAL +31 DAY), status = 'Ativo'  WHERE email ='$cus_email';");

            break;
        case '3':   #Suspenso
            $query = mysqli_query($conectar, "UPDATE user set nome = '$cus_name', celular = '$cus_cel',  status = 'Suspenso'  WHERE email ='$cus_email';");

            break;
        case '4':   #Cancelado
            $query = mysqli_query($conectar, "UPDATE user set nome = '$cus_name', celular = '$cus_cel', status = 'Cancelado'  WHERE email ='$cus_email';");

            break;
        case '7':   #Atrasado
            $query = mysqli_query($conectar, "UPDATE user set nome = '$cus_name', celular = '$cus_cel', status = 'Atrasado'  WHERE email ='$cus_email';");

            break;
        case '9':   #Finalizado
            $query = mysqli_query($conectar, "UPDATE user set nome = '$cus_name', celular = '$cus_cel', status = 'Em análise'  WHERE email ='$cus_email';");

            break;
        case '2':   #Ag Pagamento
            $query = mysqli_query($conectar, "UPDATE user set nome = '$cus_name', celular = '$cus_cel', status = 'Aguardando Pgto'  WHERE email ='$cus_email';");

            break;

            #...
            #...
            #...
        default:
            echo "STATUS DESCONHECIDO";
            break;
    }
} else
    echo "ACESSO INVALIDO";



?>