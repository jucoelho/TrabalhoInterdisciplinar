function validaLogin(){
	var usuario = document.getElementById("name").value;
	var senha = document.getElementById("password").value;

	if(usuario=="" && senha==""){
         
         document.getElementById("name").style.borderColor="red";
         document.getElementById("password").style.borderColor="red";
        document.getElementById("mensagem").innerHTML = "Preencha o(s) campo(s) em vermelho!";
         document.getElementById("mensagem").style.color = "red";
          $("#formLogin").submit(function () { return false; });
        }
        else if (usuario=="" && senha !=""){
                  document.getElementById("name").style.borderColor="red";
                  document.getElementById("mensagem").innerHTML = "Preencha o(s) campo(s) em vermelho!";
                  document.getElementById("mensagem").style.color = "red";
                }
                else if(usuario!= "" && senha =="")
                {
                   document.getElementById("password").style.borderColor="red";
                   document.getElementById("mensagem").innerHTML = "Preencha o(s) campo(s) em vermelho!";
                   document.getElementById("mensagem").style.color = "red";
       
                }
                else
                  document.getElementById("formLogin").submit();

}
