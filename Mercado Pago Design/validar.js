var input = document.getElementsByClassName("formulario__input");
for (var i = 0; i < input.length; i++) {
  input[i].addEventListener("keyup", function () {
    if (this.value.length >= 1) {
      this.previousElementSibling.classList.add("fijar");
    } else {
      this.previousElementSibling.classList.remove("fijar");
    }
  });
}
function validar(){
  var email = document.getElementById('email').value;
  if(email == ''){
    var error = document.getElementById('error');
    error.style.fontSize='15px';
    error.style.height='30px';
    error.style.width='100px';
    error.style.color='red';
  }
  else{
    console.log(email);
  }
  return;
}
/*
if(document.getElementById('email').value == ''){
  console.log('aca no hay nada');
}
else{
  var valor = document.getElementById('email').value;
  console.log(valor);
}*/