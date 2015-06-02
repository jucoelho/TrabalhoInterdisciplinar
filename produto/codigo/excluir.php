<?php

    require_once __DIR__.'/banco/banco.php';
	require_once __DIR__.'/model/produto.php';

		$id;
		if(isset($_GET))
		{

		  $_POST['excluir'] = true;
 			$id = $_GET['id'];

		}
		if(isset($_POST['excluir']))
		{

			 $produto  = new Produto();
			$produto->excluir($id);
		}

                    
     		  		

?>