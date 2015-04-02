<?php
	include 'includes/config.php';
	$page_title = 'Ajuda';
	$usuario = 'Administrador';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml 1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
		<link href="css/style.css" ficheiros.zip type="text/css" rel="stylesheet"/>
		<script type="text/javascript" src="../scripts/scriptAjuda.js"></script>
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
				
				<div id="tituloFuncionamento"  onclick="mostraConteudo('funcionamentoContent')"> Funcionamento</div>
					<div class="conteudoAjuda" id="funcionamentoContent" >
						 <H2> Funcionamento Geral do Sistema</H2>
						<p>
							O SGP é um sistema de gerenciamento de conteúdo com possilidade de Cadastrar,Editar,Consultar e Excluir produtos.<br>
							Para isso, seus usuário devem possuir cadastro no sistema, uma vez que a somente usuários cadastrados podem ter  <br>
							acessá-lo. Ao logar no sistema o usuário é redirecionado para a tela de Cadastro, nela é possível realizar todas  <br>
							 as atividades citadas acima .
						</p>

					</div>
 				<div id="tituloLogin" onclick="mostraConteudo('loginContent')"> Login </div>
	 				<div class="conteudoAjuda" id="loginContent">
	 					<h2> Login </h2>
	 					<p>
	 						Na tela de login o usuário deverá preencher todos os campos do formulário para acessar o sistema.Caso algum campo <br>
	 						seja deixado em branco, o sistema exibi uma mensagem e o acesso ao sistema não é realizado.
	 					</p>
	 				</div>
	 			<div id="tituloCadastro" onclick="mostraConteudo('cadastroContent')"> Cadastro</div>	
	 			    <div class="conteudoAjuda" id="cadastroContent">
	 			    	<h2> Cadastro</h2>
	 			    	<p>
							teste de conteudo 
							Cadastro
						</p>
	 			    </div>
	 			 <div id="tituloConsulta" onclick="mostraConteudo('consultaContent')"> Consulta</div>	
	 			    <div class="conteudoAjuda" id="consultaContent">
	 			    	<h2> Consulta </h2>
	 			    	<p>
							Na tela de consulta o usuário poderar consultar todos os produtos cadastrados no sistema
						</p>
	 			    </div>   
			</div>
			<br style="clear:both"/>
			<div id="footer" class="footer"><?php include 'includes/footer.php'; ?></div>
		</div>
	</body>
</html>
