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
