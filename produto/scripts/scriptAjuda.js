
function mostraConteudo(id){
	
        var status = document.getElementById(id).style.display ;
        if(status != "block")
		document.getElementById(id).style.display ="block";
       else
       	document.getElementById(id).style.display ="none";
}