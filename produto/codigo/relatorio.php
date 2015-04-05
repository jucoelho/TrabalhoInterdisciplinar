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
		<link href="css/style.css" ficheiros.zip type="text/css" rel="stylesheet"/>
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
                        <!--<h1><a id="link" href=""></h1>-->
                        <select name="Filtrar">
                            <option value="categoria">Categoria</option>
                            <option value="quantidade">Quantidade</option>                                      
                        </select>
                    <div id="tabelaCadastro">
                        <table >
                            <tr>
                                    <th> Código</th>
                                    <th> Descrição</th>
                                    <th> Preço</th>
                                    <th> Quantidade</th>
                                    <th > Editar</th>
                                    <th> Excluir</th>
                            </tr>
                            <tbody>
                              <tr>
                                    <td> teste</td>
                                    <td> teste</td>
                                    <td> teste</td>
                                    <td> teste</td>
                                    <td onclick="editar()" id="colunaEditar"> Editar</td>
                                    <td id="colunaExcluir"> Excluir</td>
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
