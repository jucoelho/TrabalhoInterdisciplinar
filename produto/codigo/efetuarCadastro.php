<?php 

     if($_POST)
     {
     	$codigo = $_POST['codigo'];
     	$descricao = $_POST['descricao'];
     	$preco = $_POST['preco'];
     	$quantidade = $_POST['quantidade'];

		 $sql = "INSERT INTO produto VALUES ('".$codigo."','".$descricao."','".$preco."','".$quantidade."')";
     	 $query = $link->query($sql);
     	  
     	  header("Location:relatorio.php");
     	
     }
?>