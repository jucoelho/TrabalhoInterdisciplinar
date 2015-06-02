<?php

class Produto
{

	
	private $id;
	private $codigo;
	private $descricao;
	private $preco;
	private $quantidade;

	public function get_codigo() { return $this->codigo; }
	public function get_descricao() { return $this->descricao; }
	public function get_preco() { return $this->preco; }
	public function get_quantidade() { return $this->quantidade; }

	public function set_codigo($valor) { $this->codigo = $valor; }
	public function set_descricao($valor) { $this->descricao = $valor; }
	public function set_preco($valor) { $this->preco = $valor; }
	public function set_quantidade($valor) { $this->quantidade = $valor; }

	public function inserir()
	{
		require_once __DIR__.'/../banco/banco.php';

		if($_POST)
		{
			$this->codigo = $_POST['codigo'];
			$this->descricao = $_POST['descricao'];
			$this->preco = $_POST['preco'];
			$this->quantidade = $_POST['quantidade'];
		}

	 	$sql = "INSERT INTO produto(codigo,descricao,preco,qtd_estoque) VALUES ('".$this->codigo."','".$this->descricao."','".$this->preco."','".$this->quantidade."')";
  		
		$query = $link->query($sql);


		
		if ($_POST)
		{
			header("Location:relatorio.php");
		}

	}

	public function editar()
	{
		
		 $servidor = "localhost";
	 $usuario = "root";
	 $senha = "";
	 $banco = "bd_interdisciplinar";
	 $link = mysqli_connect($servidor, $usuario, $senha, $banco) or die(mysql_error());
		
		if($_POST)
		{
			$this->id = $_POST['id'];
			$this->codigo = $_POST['codigoEdicao'];
			$this->descricao = $_POST['descricaoEdicao'];
			$this->preco = $_POST['precoEdicao'];
			$this->quantidade = $_POST['quantidadeEdicao'];
		}
        
		$sql = "UPDATE produto  
		SET  codigo='".$this->codigo."', descricao ='".$this->descricao."', preco='".$this->preco."', qtd_estoque='".$this->quantidade."'
		 WHERE id ='".$this->id."'";
 		 $link->query($sql);
    	
    	if ($_POST)
		{
			header("Location:relatorio.php");
		}

	}

	public function excluir($id)
	{
		 $servidor = "localhost";
	 $usuario = "root";
	 $senha = "";
	 $banco = "bd_interdisciplinar";
	 $link = mysqli_connect($servidor, $usuario, $senha, $banco) or die(mysql_error());
	
		if($_POST)
		{
		
			$this->id = $id;
		}

		$sql = "DELETE FROM produto WHERE id ='".$this->id."'";
		$query = $link->query($sql);
		
		if ($_POST)
		{
		
			header("Location:relatorio.php");
		}


	}

	
}

?>