function preencheTabela()
{

var xmlhttp = new XMLHttpRequest();
var url = "buscaProdutos.php";

xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	 document.getElementById("tabelaCadastro").innerHTML = xmlhttp.responseText;
	}
}
xmlhttp.open("GET", url, true);
xmlhttp.send();
}

function editar( value)
{

var url = "editarProduto.php?id="+ value;


var xmlhttp = new XMLHttpRequest();


xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	 document.getElementById("tabelaCadastro").innerHTML = xmlhttp.responseText;
	}
}
xmlhttp.open("GET",url , true);
xmlhttp.send();
}	


function buscarOrdernado()
{
	var selectBox = document.getElementById("selectBox");
	var selectedValue = selectBox.options[selectBox.selectedIndex].value;
	
    if(selectedValue =="descricao"){
		var url = "buscaProdutos.php?descricao=descricao" ;    	
    }
    else
    {
   		var url = "buscaProdutos.php?quantidade=qtd_estoque"; 	
    }

	var xmlhttp = new XMLHttpRequest();


	xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	 document.getElementById("tabelaCadastro").innerHTML = xmlhttp.responseText;
	}
}
xmlhttp.open("GET", url, true);
xmlhttp.send();


}
