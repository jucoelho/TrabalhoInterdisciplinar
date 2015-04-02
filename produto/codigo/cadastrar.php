<?php
  $texto ="
  	<form id='formularioCadastro' action='#'>
     <span id='mensagem'></span><br>
     <label>Código :</label>
	 <input id='codigo'  type='text'>
	 <label>Descrição :</label>
	 <input id='descricao'  type='text'>
	 <label>Preço:</label>
	 <input id='preco'  type='text'>
	 <label>Quantidade:</label>
	 <input id='quantidade'  type='text'>
	 <button type='button' onclick='validarCadastro()'>Cadastrar</button>

    </form>";
 echo $texto;

?>