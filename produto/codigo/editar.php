<?php 
  
  $texto ="
  	<form id='formularioCadastro' action='#'>
     <span id='mensagemEdicao'></span><br>
     <label>Código :</label>
	 <input id='codigoEdicao'  type='text'>
	 <label>Descrição :</label>
	 <input id='descricaoEdicao'  type='text'>
	 <label>Preço:</label>
	 <input id='precoEdicao'  type='text'>
	 <label>Quantidade:</label>
	 <input id='quantidadeEdicao'  type='text'>
	 <button type='button' onclick='validarEditacao()'>Cadastrar</button>

    </form>";
 echo $texto;
?>