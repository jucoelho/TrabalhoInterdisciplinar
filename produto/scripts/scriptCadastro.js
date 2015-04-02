function buscaCadastro(){
	var xmlhttp = new XMLHttpRequest();
var url = "cadastrar.php";

xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	 document.getElementById("tabelaCadastro").style.display ="none"; 	
	 document.getElementById("cadastroContent").style.display="block";
   	 document.getElementById("cadastroContent").innerHTML = xmlhttp.responseText;
	 
    }
}
xmlhttp.open("GET", url, true);
xmlhttp.send();

}
 function editar(){
var xmlhttp = new XMLHttpRequest();
var url = "editar.php";

xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	 document.getElementById("tabelaCadastro").style.display ="none"; 	
	 document.getElementById("cadastroContent").style.display="block";
   	 document.getElementById("cadastroContent").innerHTML = xmlhttp.responseText;
	 
    }
}
xmlhttp.open("GET", url, true);
xmlhttp.send(); 	
 }
function validarCadastro(){
	  var codigo =document.getElementById("codigo").value;
	  var descricao =document.getElementById("descricao").value;
	  var preco =document.getElementById("preco").value;
	  var quantidade =document.getElementById("quantidade").value;
	  if(codigo==""&&descricao==""&&preco==""&&quantidade=="")
	  {
	  	document.getElementById("codigo").style.borderColor="red";
	  	document.getElementById("descricao").style.borderColor="red";
	  	document.getElementById("preco").style.borderColor="red";
	  	document.getElementById("quantidade").style.borderColor="red";
	  	document.getElementById("mensagem").innerHTML="Preencha o(s) campo(s) em vermelho!";
	  	document.getElementById("mensagem").style.color="red";
	  }
	  else if(codigo==""&&descricao!=""&&preco!=""&&quantidade!="")
	  {
	  	document.getElementById("codigo").style.borderColor="red";
	  	document.getElementById("mensagem").innerHTML="Preencha o(s) campo(s) em vermelho!";
	  	document.getElementById("mensagem").style.color="red";
	  }
	  else if (codigo!=""&&descricao==""&&preco!=""&&quantidade!="")
	  {
	  	document.getElementById("descricao").style.borderColor="red";
	  	document.getElementById("mensagem").innerHTML="Preencha o(s) campo(s) em vermelho!";
	  	document.getElementById("mensagem").style.color="red";
	  }
	  else if (codigo!=""&&descricao!=""&&preco==""&&quantidade!="")
	  {
	  	document.getElementById("preco").style.borderColor="red";
	  	document.getElementById("mensagem").innerHTML="Preencha o(s) campo(s) em vermelho!";
	  	document.getElementById("mensagem").style.color="red";
	  }
	  else if (codigo!=""&&descricao!=""&&preco!=""&&quantidade=="")
	  {
	  	document.getElementById("quantidade").style.borderColor="red";
	  	document.getElementById("mensagem").innerHTML="Preencha o(s) campo(s) em vermelho!";
	  	document.getElementById("mensagem").style.color="red";
	  }
}
 function validarEditacao(){

	  var codigo =document.getElementById("codigoEdicao").value;
	  var descricao =document.getElementById("descricaoEdicao").value;
	  var preco =document.getElementById("precoEdicao").value;
	  var quantidade =document.getElementById("quantidadeEdicao").value;
	  if(codigo==""&&descricao==""&&preco==""&&quantidade=="")
	  {
	  	document.getElementById("codigoEdicao").style.borderColor="red";
	  	document.getElementById("descricaoEdicao").style.borderColor="red";
	  	document.getElementById("precoEdicao").style.borderColor="red";
	  	document.getElementById("quantidadeEdicao").style.borderColor="red";
	  	document.getElementById("mensagemEdicao").innerHTML="Preencha o(s) campo(s) em vermelho!";
	  	document.getElementById("mensagemEdicao").style.color="red";
	  }
	  else if(codigo==""&&descricao!=""&&preco!=""&&quantidade!="")
	  {
	  	document.getElementById("codigoEdicao").style.borderColor="red";
	  	document.getElementById("mensagemEdicao").innerHTML="Preencha o(s) campo(s) em vermelho!";
	  	document.getElementById("mensagemEdicao").style.color="red";
	  }
	  else if (codigo!=""&&descricao==""&&preco!=""&&quantidade!="")
	  {
	  	document.getElementById("descricaoEdicao").style.borderColor="red";
	  	document.getElementById("mensagemEdicao").innerHTML="Preencha o(s) campo(s) em vermelho!";
	  	document.getElementById("mensagemEdicao").style.color="red";
	  }
	  else if (codigo!=""&&descricao!=""&&preco==""&&quantidade!="")
	  {
	  	document.getElementById("precoEdicao").style.borderColor="red";
	  	document.getElementById("mensagemEdicao").innerHTML="Preencha o(s) campo(s) em vermelho!";
	  	document.getElementById("mensagemEdicao").style.color="red";
	  }
	  else if (codigo!=""&&descricao!=""&&preco!=""&&quantidade=="")
	  {
	  	document.getElementById("quantidadeEdicao").style.borderColor="red";
	  	document.getElementById("mensagemEdicao").innerHTML="Preencha o(s) campo(s) em vermelho!";
	  	document.getElementById("mensagemEdicao").style.color="red";
	  }	
 }