$('.carousel').carousel({
  interval: 4000
})

var inputs=document.getElementsByClassName('formulario_input');
for(var i=0;i<inputs.length;i++){
inputs[i].addEventListener('keyup',function(){
  if(this.value.length>=1){
    this.nextElementSibling.classList.add('fixar');
  }
  else{
    this.nextElementSibling.classList.remove('fixar');
  }
});
}

function validar(){  /* validar los elementos del formulario de contacto con java*/
  var nome,email,telefone,mensagem,expresion;
  nome=document.getElementById("nome").value;
  email=document.getElementById("email").value;
  telefone=document.getElementById("telefone").value;
  mensagem=document.getElementById("mensagem").value;
  
  /*Evaluar q el correo este bien escrito con expresiones regulares*/
  expresion = /\w+@\w+\.+[a-z]/;
  
  /*evaluar los campos del formulario*/
  if(nome ===""|| email ==="" || telefone ==="" || mensagem ===""){
   alert("Insira todos os items");
   return false;
  }
  else if(nome.length>30){
    alert("O nome é muito longo");
    return false;
  }
  else if(email.length>40){
    alert("O email é muito longo");
    return false;
  }
  else if(!expresion.test(email)){
    alert("O email não é correto");
  }
  else if(telefone.length>10){
    alert("O telefone é muito longo");
    return false;
  }
  else if(isNaN(telefone)){
    alert("O telefone inserido não é um número");
    return false;
  }
  
  
  
  
  
  
  } 
