<?php
	include 'includes/config.php';
	$page_title = 'Cadastro';
	$usuario = 'Administrador';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml 1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
		<link href="css/style.css" ficheiros.zip type="text/css" rel="stylesheet"/>
		<script type="text/javascript" src="../scripts/scriptCadastro.js"></script>
		<title>
			<?php include 'includes/config.php'; echo "$APP_TITLE";?>
		</title>
	</head>

	<body>
		<div id="container">
			<?php include 'includes/top-bar.php';?>
			<div id="header" class="header"><?php include 'includes/header.php';?></div>
			<?php include 'includes/menubar.php';?>
			<div id="cabecalho"><?php include 'includes/cabecalho.php';?></div>
			<div id="content" class="content">
				<p  id="labelCadastro" onclick="buscaCadastro()">
					Adicionar
				</p>
				<div id="cadastroContent"></div>
				<div id="tabelaCadastro">
					<table >
					  <tr>
					  	<th> Código</th>
					  	<th> Descrição</th>
					  	<th> Preço</th>
					  	<th> Quantidade</th>
					  	<th> Editar</th>
					  	<th> Excluir</th>
					  </tr>
					  <tbody>
					  <tr>
					    <td> teste</td>
					    <td> teste</td>
					    <td> teste</td>
					    <td> teste</td>
					    <td onclick="editar()"> Editar</td>
					    <td> Excluir</td>
					  </tr>
					  </tbody>
					</table>	
				</div>
			</div>
			<br style="clear:both"/>
			<div id="footer" class="footer"><?php include 'includes/footer.php'; ?></div>
		</div>
	</body>
</html>
