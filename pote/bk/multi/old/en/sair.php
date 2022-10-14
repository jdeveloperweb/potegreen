<?php

session_start();
unset($_SESSION['usuarioId'],			
		  $_SESSION['usuarioNome'], 		
		  $_SESSION['usuarioNivelAcesso'], 	
		  $_SESSION['usuarioSenha']);

$_SESSION['msg'] = "Deslogado com sucesso";
header("Location: index.php");