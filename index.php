<!DOCTYPE html>
		<html lang="en">
		<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SENAI - Sistema de Eventos®</title>
		<link rel="shortcut icon" href="image/iconsenai.ico" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    		<link rel="stylesheet" type="text/css" href="css/style.css" />
		</head>
<?php

	include ("connection-MySql.php");
	include ("crud-usuario.php");

	$pessoa = select_usuario($conexao,$_POST["email"],$_POST["senha"]);
	
	if($pessoa == null)
	{	
		?>
		<body style="width: 800px; height: 530px; padding-top: 60px; position: center; margin-left: auto; margin-right: auto;">
		<form action="index.html">
		<div class="subtitle" style="font-size: 40px; text-align:center;">O e-mail ou senha informados <br> não estão registrados na base de dados.</div>
		<button style="position: center; margin-left: auto; margin-right: auto;" type="submit" class="btn btn-info">Fechar</button>
		</form>
		</body>
		</html>
	    <?php
	}
	else{	
			// Array Pessoa
			$usuario = array();
			$usuario = $pessoa;

			// Sessao
			session_start();
			$_SESSION["EMAIL"]   =  $usuario["EMAIL"];
			$_SESSION["SENHA"] =  $usuario["SENHA"];
	

            header('Location:desktop.php');
		}

?>