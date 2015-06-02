<?php
	include 'includes/config.php';
	$page_title = 'Home';
	$usuario = 'Administrador';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml 1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
        <script type="text/javascript" src="../scripts/scriptRelatorio.js"></script>
		<link href="css/style.css" ficheiros.zip type="text/css" rel="stylesheet"/>
		<title>
			<?php include 'includes/config.php'; echo "$APP_TITLE";?>
		</title>
	</head>

	<body onload="preencheTabela();">
		<div id="container" >
                    <?php include 'includes/top-bar.php';?>
                    <div id="header" class="header"><?php include 'includes/header.php';?></div>
                    <?php include 'includes/menubar.php';?>
                    <div id="cabecalho"><?php include 'includes/cabecalho.php';?></div>
                    <div id="content" class="content">
                        <select id="selectBox" onchange="buscarOrdernado()">
                            <option  ></option>
                            <option value="descricao" name="buscaDescricao" id="buscaDescricao">Descrição</option>
                            <option value="qtd_estoque" name="buscaQuantidade" id="buscaQuantidade">Quantidade</option>                                      
                        </select>
                    <div id="tabelaCadastro">
                        	
                    </div>       
                    </div>
                    <br style="clear:both"/>
                    <div id="footer" class="footer"><?php include 'includes/footer.php'; ?></div>
		</div>
	</body>
</html>
