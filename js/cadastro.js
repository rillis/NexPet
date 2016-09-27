var imageSelected = false;
function step(n){
  if(n==1){
      document.getElementById('step1').style.top='0px';
      document.getElementById('step1').style.left='0px';
      document.getElementById('step2').style.top='100%';
      document.getElementById('step2').style.left='0px';
      document.getElementById('animal1').style.top='0px';
      document.getElementById('animal1').style.left='100%';
      document.getElementById('animal2').style.top='100%';
      document.getElementById('animal2').style.left='100%';
      document.getElementById('animal3').style.top='200%';
      document.getElementById('animal3').style.left='100%';
      document.getElementById('animal4').style.top='300%';
      document.getElementById('animal4').style.left='100%';
      document.getElementById('animal5').style.top='400%';
      document.getElementById('animal5').style.left='100%';
      document.getElementById('success').style.top='500%';
      document.getElementById('success').style.left='100%';
  }
  else if(n==2){
    if(validate(1)){
      document.getElementById('step1').style.top='-100%';
      document.getElementById('step1').style.left='0px';
      document.getElementById('step2').style.top='0px';
      document.getElementById('step2').style.left='0px';
      document.getElementById('animal1').style.top='0px';
      document.getElementById('animal1').style.left='100%';
      document.getElementById('animal2').style.top='100%';
      document.getElementById('animal2').style.left='100%';
      document.getElementById('animal3').style.top='200%';
      document.getElementById('animal3').style.left='100%';
      document.getElementById('animal4').style.top='300%';
      document.getElementById('animal4').style.left='100%';
      document.getElementById('animal5').style.top='400%';
      document.getElementById('animal5').style.left='100%';
      document.getElementById('success').style.top='500%';
      document.getElementById('success').style.left='100%';
    }
  }

  else if(n==3){
    if(validate(2)){
    document.getElementById('step1').style.top='0px';
    document.getElementById('step1').style.left='-100%';
    document.getElementById('step2').style.top='100%';
    document.getElementById('step2').style.left='-100%';
    document.getElementById('animal1').style.top='0px';
    document.getElementById('animal1').style.left='0px';
    document.getElementById('animal2').style.top='100%';
    document.getElementById('animal2').style.left='0px';
    document.getElementById('animal3').style.top='200%';
    document.getElementById('animal3').style.left='0px';
    document.getElementById('animal4').style.top='300%';
    document.getElementById('animal4').style.left='0px';
    document.getElementById('animal5').style.top='400%';
    document.getElementById('animal5').style.left='0px';
    document.getElementById('success').style.top='500%';
    document.getElementById('success').style.left='0px';
    }
  }
  else if(n==4){
    document.getElementById('step1').style.top='-100%';
    document.getElementById('step1').style.left='-100%';
    document.getElementById('step2').style.top='0px';
    document.getElementById('step2').style.left='-100%';
    document.getElementById('animal1').style.top='-100%';
    document.getElementById('animal1').style.left='0px';
    document.getElementById('animal2').style.top='0px';
    document.getElementById('animal2').style.left='0px';
    document.getElementById('animal3').style.top='100%';
    document.getElementById('animal3').style.left='0px';
    document.getElementById('animal4').style.top='200%';
    document.getElementById('animal4').style.left='0px';
    document.getElementById('animal5').style.top='300%';
    document.getElementById('animal5').style.left='0px';
    document.getElementById('success').style.top='400%';
    document.getElementById('success').style.left='0px';
  }
  else if(n==5){
    document.getElementById('step1').style.top='-200%';
    document.getElementById('step1').style.left='-100%';
    document.getElementById('step2').style.top='-100%';
    document.getElementById('step2').style.left='-100%';
    document.getElementById('animal1').style.top='-200%';
    document.getElementById('animal1').style.left='0px';
    document.getElementById('animal2').style.top='-100%';
    document.getElementById('animal2').style.left='0px';
    document.getElementById('animal3').style.top='0px';
    document.getElementById('animal3').style.left='0px';
    document.getElementById('animal4').style.top='100%';
    document.getElementById('animal4').style.left='0px';
    document.getElementById('animal5').style.top='200%';
    document.getElementById('animal5').style.left='0px';
    document.getElementById('success').style.top='300%';
    document.getElementById('success').style.left='0px';
  }
  else if(n==6){
    document.getElementById('step1').style.top='-300%';
    document.getElementById('step1').style.left='-100%';
    document.getElementById('step2').style.top='-200%';
    document.getElementById('step2').style.left='-100%';
    document.getElementById('animal1').style.top='-300%';
    document.getElementById('animal1').style.left='0px';
    document.getElementById('animal2').style.top='-200%';
    document.getElementById('animal2').style.left='0px';
    document.getElementById('animal3').style.top='-100%';
    document.getElementById('animal3').style.left='0px';
    document.getElementById('animal4').style.top='0px';
    document.getElementById('animal4').style.left='0px';
    document.getElementById('animal5').style.top='100%';
    document.getElementById('animal5').style.left='0px';
    document.getElementById('success').style.top='200%';
    document.getElementById('success').style.left='0px';
  }
  else if(n==7){
    document.getElementById('step1').style.top='-400%';
    document.getElementById('step1').style.left='-100%';
    document.getElementById('step2').style.top='-300%';
    document.getElementById('step2').style.left='-100%';
    document.getElementById('animal1').style.top='-400%';
    document.getElementById('animal1').style.left='0px';
    document.getElementById('animal2').style.top='-300%';
    document.getElementById('animal2').style.left='0px';
    document.getElementById('animal3').style.top='-200%';
    document.getElementById('animal3').style.left='0px';
    document.getElementById('animal4').style.top='-100%';
    document.getElementById('animal4').style.left='0px';
    document.getElementById('animal5').style.top='0px';
    document.getElementById('animal5').style.left='0px';
    document.getElementById('success').style.top='100%';
    document.getElementById('success').style.left='0px';
  }
}
function contains(x,y){
  if(x.indexOf(y) !== -1){
    return true;
  }else{
    return false;
  }
}
function boxShadow(x,y){
  if(x==0){
    document.getElementById(y).style.boxShadow = 'none';
  }else{
    document.getElementById(y).style.boxShadow = '0px 0px 14px 1px rgba(255,0,0,1)';
  }
}
function image(lol) {
	if(lol==null){
	imageSelected=false;
	}else{
	imageSelected=true;
	document.getElementById("fotopicker").style.backgroundColor = "#51B14A";
	}
}
function visibility(x,y){
  if(x==0){
    document.getElementById(y).style.visibility = 'hidden';
  }else{
    document.getElementById(y).style.visibility = 'visible';
  }
}
function validate(n){
  if(n==1){
    boxShadow(0,"email");
    visibility(0,"e_email");
    boxShadow(0,"senha");
    visibility(0,"e_senha");
    boxShadow(0,"senha2");
    visibility(0,"e_senha2");
    boxShadow(0,"nome");
    visibility(0,"e_nome");
    boxShadow(0,"sexo");
    var email = document.getElementById("email").value;
    var senha = document.getElementById("senha").value;
    var senha2 = document.getElementById("senha2").value;
    var nome = document.getElementById("nome").value;
    var sexo = document.getElementById("sexo").value;

    var error = false;
    if(!contains(email,"@") || !contains(email,".")){
      boxShadow(1,"email");
      visibility(1,"e_email");
      error=true;
    }
    if (senha.length<8) {
      boxShadow(1,"senha");
      visibility(1,"e_senha");
      error=true;
    }
    if (senha!==senha2) {
      boxShadow(1,"senha2");
      visibility(1,"e_senha2");
      error=true;
    }
    if (nome.lenght<6 || nome.length>100 || nome=="") {
      boxShadow(1,"nome");
      visibility(1,"e_nome");
      error=true;
    }
	if(!imageSelected){
		document.getElementById("fotopicker").style.backgroundColor = "#D63A3A";
		error=true;
	}

    if (error) {
      return false;
    }else {
      return true;
    }
  }
  if(n==2){
    boxShadow(0,"endereco");
    visibility(0,"e_endereco");
    boxShadow(0,"numero");
    visibility(0,"e_numero");
    boxShadow(0,"complemento");
    visibility(0,"e_complemento");
    boxShadow(0,"telefone1");
    visibility(0,"e_telefone1");
    boxShadow(0,"telefone2");
    visibility(0,"e_telefone2");
    boxShadow(0,"cep");
    visibility(0,"e_cep");
    boxShadow(0,"bairro");
    visibility(0,"e_bairro");
    var complemento = document.getElementById("complemento").value;
    var endereco = document.getElementById("endereco").value;
    var numero = document.getElementById("numero").value;
    var telefone1 = document.getElementById("telefone1").value;
    var telefone2 = document.getElementById("telefone2").value;
    var cep = document.getElementById("cep").value;
    var bairro = document.getElementById("bairro").value;

    var error = false;
    if(endereco.length<6){
      boxShadow(1,"endereco");
      visibility(1,"e_endereco");
      error=true;
    }
    if(numero.length=="" || numero.length > 6 || numero.toLowerCase().match(/[a-z]/i)){
      boxShadow(1,"numero");
      visibility(1,"e_numero");
      error=true;
    }
    if(complemento.length > 60){
      boxShadow(1,"complemento");
      visibility(1,"e_complemento");
      error=true;
    }
    if(telefone1.length != 10 || telefone1.toLowerCase().match(/[a-z]/i)){
      boxShadow(1,"telefone1");
      visibility(1,"e_telefone1");
      error=true;
    }
    if(telefone2.length < 10 || telefone2.length > 11 || telefone2.toLowerCase().match(/[a-z]/i)){
      boxShadow(1,"telefone2");
      visibility(1,"e_telefone2");
      error=true;
    }
    if(cep.length != 8 || cep.toLowerCase().match(/[a-z]/i)){
      boxShadow(1,"cep");
      visibility(1,"e_cep");
      error=true;
    }
    if(bairro.length > 75 || bairro.length <= 1 ){
      boxShadow(1,"bairro");
      visibility(1,"e_bairro");
      error=true;
    }

    if (error) {
      return false;
    }else {
      return true;
    }
  }
}
