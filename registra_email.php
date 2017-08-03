<?php

	require_once('db.class.php');

	$usuario = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = "insert into email_clientes(name, email, phone, message) values ('$name', '$email', '$phone', '$message') ";

	//executar a query
	if(mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}


?>