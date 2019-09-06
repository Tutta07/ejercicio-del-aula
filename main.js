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

