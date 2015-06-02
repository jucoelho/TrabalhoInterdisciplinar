<?php 


 // Tenta se conectar ao servidor MySQL
      $servidor = 'localhost';
      $usuario = 'root';
      $senha = '';
      $banco = 'bd_interdisciplinar';
     $link = @mysqli_connect($servidor, $usuario, $senha,$banco) or trigger_error(mysql_error());
    // Tenta se conectar a um banco de dados MySQL
    

    if($_POST)
    {
	    echo "post";
		    $usuario = mysqli_real_escape_string($link,$_POST['username']);
		    $senha = mysqli_real_escape_string($link,$_POST['password']);
		      
		    // Validação do usuário/senha digitados
		    $sql = "SELECT `login` FROM `usuario` WHERE (`login` = '".$usuario ."') AND (`senha` = '".$senha."')";
		    $query = $link->query($sql);
		    $dados = $query->fetch_array();
			    if(sizeof($dados) >0){
			    	
			    	    header("Location:relatorio.php");    
				        
				    } else {
				    header("Location:index.php");
				    
				    }
		}
		

  	




?>