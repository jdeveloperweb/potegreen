<?php
$conectar = mysqli_connect("localhost", "acgym11_multipla", "Ricos#Multipla20", "acgym11_mgreen");
 
if (!$conectar) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?> 