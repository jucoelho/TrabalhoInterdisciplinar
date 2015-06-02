<?php 


// Tenta se conectar ao servidor MySQL
      $servidor = 'localhost';
      $usuario = 'root';
      $senha = '';
      $banco = 'bd_interdisciplinar';

          	$result = "<table >
                            <tr>
                                    <th style='display:none'> id</th>
                                    <th> Código</th>
                                    <th> Descrição</th>
                                    <th> Preço</th>
                                    <th> Quantidade</th>
                                    <th > Editar</th>
                                    <th> Excluir</th>
                            </tr>
                            <tbody>
                              
                          ";
     $link = @mysqli_connect($servidor, $usuario, $senha,$banco) or trigger_error(mysql_error());
     
      $sql = "SELECT * FROM produto  limit 10";

    if(isset($_GET['descricao']) && $_GET['descricao'] =='descricao')
    {
        $descricao = $_GET['descricao'];
      $sql = "SELECT * FROM produto  ORDER BY descricao  limit 10"; 
      unset($_GET['descricao']  );
    }
    if(isset($_GET['quantidade']) && $_GET['quantidade'] = 'qtd_estoque' )
    {
      
      
     $sql = "SELECT * FROM produto  ORDER BY qtd_estoque   limit 10";   
     unset($_GET['quantidade']);
    }
      
      
      
		    $query = $link->query($sql);
		    $dados = $query->fetch_array();
			    if($query->num_rows > 0)
			    	while($row = $query->fetch_assoc()) {
        $result .="<tr><td style='display:none'>".$row["id"]."</td><td>" . $row["codigo"]. " </td><td>" . $row["descricao"]. "</td><td> " . $row["preco"]. "</td><td>"
        .$row["qtd_estoque"]."</td> <td id='colunaEditar'> <a href='editarProduto.php?id=".$row["id"]."'>Editar</a></td>
        <td id='colunaExcluir'> <a href='excluir.php?id=".$row["id"]."'>Excluir</a></td></tr>";
    }
			
		$result .= "</tbody>   </table>";
     echo $result;
		
?>