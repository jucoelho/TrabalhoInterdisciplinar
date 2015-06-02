
<?php
	include 'includes/config.php';
	$page_title = 'Cadastro';
	$usuario = 'Administrador';
	require_once __DIR__.'/model/produto.php';
	
	
	if(isset($_POST['inserir']))
	{

		$produto = new Produto();
		$produto->inserir();
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml 1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
		<link href="css/style.css" ficheiros.zip type="text/css" rel="stylesheet"/>
		<script type="text/javascript"  src="../scripts/scriptCadastroProduto.js"></script>
		<title>
			<?php include 'includes/config.php'; echo "$APP_TITLE";?>
		</title>
	</head>

	<body onload="preencheTabela();">
		<div id="container">
			<?php include 'includes/top-bar.php';?>
			<div id="header" class="header"><?php include 'includes/header.php';?></div>
			<?php include 'includes/menubar.php';?>
			<div id="cabecalho"><?php include 'includes/cabecalho.php';?></div>
			<div id="content" class="content">
				<div>
					<form id='formularioCadastro' onsubmit=' return validarCadastro();'   action='' method='POST'>
				     <span id='mensagem'></span><br>
				     <label>Código :</label>
					 <input id='codigo'  type='text' name='codigo'>
					 <label>Descrição :</label>
					 <input id='descricao'  type='text' name='descricao'>
					 <label>Preço:</label>
					 <input id='preco'  type='text' name='preco'>
					 <label>Quantidade:</label>
					 <input id='quantidade'  type='text' name='quantidade'>
					 <button type='submit'   name='inserir' >Cadastrar</button>
					 </form>
				</div>
			</div>
			<br style="clear:both"/>
			<div id="footer" class="footer"><?php include 'includes/footer.php'; ?></div>
		</div>
	</body>
</html>