<?php
session_start();
$_SESSION['username'] = $cus_name;
$_SESSION['usuarioEmail'] = $cus_email;

$resultado = mysqli_query($conectar, "SELECT * FROM user WHERE email = '$cus_email'");
            if($resultado->num_rows != 0) {
                // se ja estiver cadastrado, encerra as sessões e manda p login
               echo "
                        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/user/sair.php>
                    ";
                } else {
?>

<?php include 'layouts/header.php'; ?>

<?php include 'layouts/headerStyle.php'; ?>

<body class="fixed-left">


    <?php include 'layouts/loader.php'; ?>

    <!-- Begin page -->


    <div class="accountbg"></div>
    <div class="wrapper-page">

        <div class="card">
            <div class="card-body">

                <h3 class="text-center m-0">
                    <a href="index.php" class="logo logo-admin"><img src="public/assets/images/logo-M.png" height="30" alt="logo"></a>
                </h3>

                <div class="p-3">
                    <h4 class="font-18 m-b-5 text-center">Bem vindo!</h4>
                    <p class="text-muted text-center">Enquanto aguardamos a confirmação do pagamento pelo Eduzz, cadastre sua senha para acesso ao painel exclusivo do assinante. <br><strong>Não feche esta janela até completar seu cadastro.</strong> </p>
                   
                    <form class="form-horizontal m-t-30" action="processa/proc_cad_senha.php" method="POST">

                        <div class="form-group">
                            <hr>
                        </div>
                        <div class="form-group">
                            <p class="text-muted text-left"><strong>Nome: </strong> <?php $_SESSION['username'] ?></br><strong>E-mail: </strong> <?php $_SESSION['usuarioEmail'] ?>
                            <p>
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
                </div>

            </div>
        </div>



    </div>

    <?php include 'layouts/footerScript.php'; ?>

    <!-- App js -->
    <script src="public/assets/js/app.js"></script>

</body>

</html>

<?php }?>
