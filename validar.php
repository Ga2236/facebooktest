<?php
	session_start();
	include('conexao.php');
	if (empty($_POST['email'])|| empty($_POST['passoword'])) {
		header('location: facebook.php');
		exit();
	}
	$usuario = mysqli_real_escape_string($conexo, $_POST['email']);
	$senha = mysqli_real_escape_string($conexo, $_POST['passoword']);

	$query = "select login_face from email = '{$usuario}' and passoword = '{$senha}'";
	$result = mysql_query($conexo, $query);
	$row = mysql_num_rows($result);

	if ($row == 1) {
		$_SESSION['email'] = $usuario;
		header('location: painel.php');
		exit();
	} else{
		$_SESSION['nao_autenticado'] = $usuario;
		header('location: facebook.php');
		exit();
	}
  ?>
