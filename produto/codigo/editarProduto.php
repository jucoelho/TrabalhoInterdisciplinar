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
					<?php 
					
					require_once __DIR__.'/banco/banco.php';
					require_once __DIR__.'/model/produto.php';

					if(isset($_POST['editar']))
					{
						$produto = new Produto();
						$produto->editar();
					}

                    $id = $_GET['id'];
     		  		$sql = "SELECT * FROM produto  where  id ='$id'";
					$query = $link->query($sql);
		    		

          	
					echo "<form id='formularioEdicao' onsubmit='return validarEdicao();'  action='' method='POST'>";
					echo "<span id='mensagemEdicao'></span><br>";
			    	if($query->num_rows > 0)
			    	while($row = $query->fetch_assoc()) {
					        echo "<label>Código :</label>
					        <input id='id' name='id'  type='text' value='".$row["id"]."' style='display:none' >
						 <input id='codigoEdicao' name='codigoEdicao'  type='text' value='".$row["codigo"]."' >
						 <label>Descrição :</label>
						 <input id='descricaoEdicao'  name='descricaoEdicao'  type='text' value='".$row["descricao"]."' >
						 <label>Preço:</label>
						 <input id='precoEdicao' name='precoEdicao'  type='text' value='". $row["preco"]."'>
						 <label>Quantidade:</label>
						 <input id='quantidadeEdicao' name='quantidadeEdicao'  type='text' value='".$row["qtd_estoque"]."'> ";
					    }
						echo"<button type='submit' name='editar'>Editar</button></form>";
					     
				?>				
			</div>
			<br style="clear:both"/>
			<div id="footer" class="footer"><?php include 'includes/footer.php'; ?></div>
		</div>
	</body>
</html>

  	
     
	 