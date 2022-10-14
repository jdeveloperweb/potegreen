<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");

$id = $_SESSION['usuarioId'];
$arquivo = $_FILES['arquivo']['name'];


if ($arquivo != "") {

    $name = $_FILES['arquivo']['name'];

    list($txt, $ext) = explode(".", $name);

    $image_name = time() . "." . $ext;

    $tmp = $_FILES['arquivo']['tmp_name'];


    if (move_uploaded_file($tmp, '../public/assets/images/users/' . $image_name)) {

        $query = mysqli_query($conectar,"UPDATE user set avatar ='$image_name' WHERE id='$id'");
        $_SESSION['usuarioAvatar'] = $image_name;
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/user/administrador.php?link=1'>
        <script type=\"text/javascript\">
            alert(\"Imagem alterada com sucesso.\");
        </script>
    ";

    } else {

    }
} else {

    }


?>
</body>

</html>