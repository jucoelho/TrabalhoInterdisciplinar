<?php
require_once '../model/produto.php';

class ProdutoTest extends PHPUnit_Framework_TestCase
{
	public function testGerCodigo()
 {
      Produto produto = new Produto();
      produto.set_codigo("teste");
      $this->assertEquals('teste', produto.get_codigo());

 }
 public function testGetDescricao()
 {
      Produto produto = new Produto();
      produto.set_descricao("teste");
      $this->assertEquals('teste', produto.get_descricao());

 }
public function testPreco()
 {
      Produto produto = new Produto();
      produto.set_preco("teste");
      $this->assertEquals('teste', produto.get_preco());

 }
public function testQuantidade()
 {
      Produto produto = new Produto();
      produto.set_quantidade("teste");
      $this->assertEquals('teste', produto.get_quantidade());

 }
 public function testInsertProduto()
 {
      Produto produto = new Produto();
      produto.set_quantidade("teste");
      produto.set_codigo("teste");
      produto.set_descricao("teste");
      produto.set_preco("teste");
      $this->assertEquals(produto.insert(), true);

 }

 public function testEdicaoProduto()
 {
 	Produto produto = new Produto();
      produto.set_quantidade("testeEdicao");
      produto.set_codigo("testeEdicao");
      produto.set_descricao("testeEdicao");
      produto.set_preco("testeEdicao");
      $this->assertEquals(produto.editar(), true);
 }
public function testExcluiProduto()
{

 	Produto produto = new Produto();
      produto.set_quantidade("testeEdicao");
      produto.set_codigo("testeEdicao");
      produto.set_descricao("testeEdicao");
      produto.set_preco("testeEdicao");
		$this->assertEquals(produto.excluir('4'), true);	
}

}

?>