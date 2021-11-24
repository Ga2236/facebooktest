		<?php
		include'conexao.php';
		session_start();
		  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Facebook</title>
</head>
<body>
	<center><h1>facebook</h1></center>
	<h6>facebook ajuda você a se conectar</h6>
	<h6>e compartilhar com as pessoas que fazem parte da sua vida.</h6>
	<form action="validar.php" method="POST">
			<?php
		         if(isset($_SESSION['nao_autenticado'])):?>
		              <div class="notification is-danger">
		                     <p>ERRO: Usuário ou senha inválidos.</p>
		               </div>
		    <?php
		      endif;
		       unset($_SESSION['nao_autenticado']);
		     ?>
			<input type="text" name="login" placeholder="Email ou Telefone"><br>
			<input type="passoword" name="passoword" placeholder="Senha"><br>
			<div class="container">
				<button class="button1">Entrar</button>
				<a href="#"><h4>Esqueceu a senha?</h4></a>
				<button class="button2">Criar nova conta</button>
				<a href=""><h4>Criar uma Página</a> para uma celebridade, banda ou empresa.</h4>
			</div>
	</form>
	<footer>
				<div class="idiomas" align="center">
					<a href="">Português (Brasil)</a><a href="">English (US)</a><a href="">Español</a><a href="">Français (France)</a><a href="">Italiano</a><a href="">Deutsch</a><a href="">لعربية</a><a href="">हिन्दी</a><a href="">中文(简体)</a>
				</div>
				<hr size="10">
				<div class="geral" align="center"><a href="">Cadastre-se</a><a href="">Entrar MessengerFacebook</a></div>
	<p align="center">Facebook © 2021</p>
			</footer>
</body>
</html>