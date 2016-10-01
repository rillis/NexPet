var imageSelected = false;
var imageSelected2 = false;
var imageSelected3 = false;
var imageSelected4 = false;
var imageSelected5 = false;
var imageSelected6 = false;
var animais = 1;
function step(n,y){
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
	if(validate(3)){
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
		animais++;
	}
  }
  else if(n==5){
	if(validate(4)){
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
		animais++;
	}
  }
  else if(n==6){
	if(validate(5)){
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
		animais++;
	}
  }
  else if(n==7){
	if(validate(6)){
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
		animais++;
	}
  }
  else if(n==8){
    if(validate(7)){
		step(9,0);
	}
  }
  else if(n==9){
	  if(y!=0){
		  if(validate(y)){
				document.getElementById("int").value = ""+animais;
			      document.myform.submit();
		  }
	  }else{
		      document.myform.submit();
	  }
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
function imageAnimal1(lol2) {
	if(lol2==null){
	imageSelected2=false;
	}else{
	imageSelected2=true;
	document.getElementById("fotopicker2").style.backgroundColor = "#51B14A"; 
	}
}
function imageAnimal2(lol3) {
	if(lol3==null){
	imageSelected3=false;
	}else{
	imageSelected3=true;
	document.getElementById("fotopicker3").style.backgroundColor = "#51B14A"; 
	}
}
function imageAnimal3(lol4) {
	if(lol4==null){
	imageSelected4=false;
	}else{
	imageSelected4=true;
	document.getElementById("fotopicker4").style.backgroundColor = "#51B14A"; 
	}
}
function imageAnimal4(lol5) {
	if(lol5==null){
	imageSelected5=false;
	}else{
	imageSelected5=true;
	document.getElementById("fotopicker5").style.backgroundColor = "#51B14A"; 
	}
}
function imageAnimal5(lol6) {
	if(lol6==null){
	imageSelected6=false;
	}else{
	imageSelected6=true;
	document.getElementById("fotopicker6").style.backgroundColor = "#51B14A"; 
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
  if(n==3){
    boxShadow(0,"nome1");
    visibility(0,"e_nome1");

    var nome1 = document.getElementById("nome1").value;


    var error = false;
	if(!imageSelected2){
		document.getElementById("fotopicker2").style.backgroundColor = "#D63A3A";
		error=true;
	}
	if(nome1.length < 2 || nome1.length > 50){
	  boxShadow(1,"nome1");
      visibility(1,"e_nome1");
      error=true;
	}
    if (error) {
      return false;
    }else {
      return true;
    }
  }
	if(n==4){
    boxShadow(0,"nome2");
    visibility(0,"e_nome2");

    var nome2 = document.getElementById("nome2").value;


    var error = false;
	if(!imageSelected3){
		document.getElementById("fotopicker3").style.backgroundColor = "#D63A3A";
		error=true;
	}
	if(nome2.length < 2 || nome2.length > 50){
	  boxShadow(1,"nome2");
      visibility(1,"e_nome2");
      error=true;
	}
    if (error) {
      return false;
    }else {
      return true;
    }
  }
	if(n==5){
    boxShadow(0,"nome3");
    visibility(0,"e_nome3");

    var nome3 = document.getElementById("nome3").value;


    var error = false;
	if(!imageSelected4){
		document.getElementById("fotopicker4").style.backgroundColor = "#D63A3A";
		error=true;
	}
	if(nome3.length < 2 || nome3.length > 50){
	  boxShadow(1,"nome3");
      visibility(1,"e_nome3");
      error=true;
	}
    if (error) {
      return false;
    }else {
      return true;
    }
	}
if(n==6){
    boxShadow(0,"nome4");
    visibility(0,"e_nome4");

    var nome4 = document.getElementById("nome4").value;


    var error = false;
	if(!imageSelected5){
		document.getElementById("fotopicker5").style.backgroundColor = "#D63A3A";
		error=true;
	}
	if(nome4.length < 2 || nome4.length > 50){
	  boxShadow(1,"nome4");
      visibility(1,"e_nome4");
      error=true;
	}
    if (error) {
      return false;
    }else {
      return true;
    }
  }
if(n==7){
    boxShadow(0,"nome5");
    visibility(0,"e_nome5");

    var nome5 = document.getElementById("nome5").value;


    var error = false;
	if(!imageSelected6){
		document.getElementById("fotopicker6").style.backgroundColor = "#D63A3A";
		error=true;
	}
	if(nome5.length < 2 || nome5.length > 50){
	  boxShadow(1,"nome5");
      visibility(1,"e_nome5");
      error=true;
	}
    if (error) {
      return false;
    }else {
      return true;
    }
  }
}
