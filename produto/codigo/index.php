<?php
	include 'includes/config.php';
	$page_title = 'Login';
	include 'includes/login.php'; // Includes Login Script

	if(isset($_SESSION['login_user'])){
	header("location: relatorio.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml 1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
		<link href="css/style.css" ficheiros.zip type="text/css" rel="stylesheet"/>
		<script type="text/javascript" src="../scripts/scriptLogin.js"></script>
		<title>
			<?php include 'includes/config.php'; echo "$APP_TITLE";?>
		</title>
	</head>

	<body>
		<div id="container">
			<div id="header" class="header"><?php include 'includes/header.php';?></div>
			<div id="cabecalho"><?php include 'includes/cabecalho.php';?></div>
			<div id="main" align="center">
				<div id="login">
					<h2>Login Form</h2>
					<form  id="formLogin" action="relatorio.php" method="post"  >
					<label>Usuário :</label>
					<input id="name" name="username" placeholder="login" type="text">
					<label>Senha :</label>
					<input id="password" name="password" placeholder="**********" type="password">
					<button class="loginbutton" type="button"  value=" Entrar" onclick="validaLogin()" >Entrar</button>
					<span id="mensagem"></span>
					</form>
				</div>
			</div>
			<br style="clear:both"/>
			<div id="footer" class="footer"><?php include 'includes/footer.php'; ?></div>
		</div>
	</body>
</html>
