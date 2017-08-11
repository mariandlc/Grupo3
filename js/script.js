function makeUL(array) {
// Create the list element:
  var list = document.createElement('ul');

  for(var i = 0; i < array.length; i++) {
      // Create the list item:
      var item = document.createElement('li');

      // Set its contents:
      item.appendChild(document.createTextNode(array[i]));

      // Add it to the list:
      list.appendChild(item);
  }

  list.setAttribute("class", "list-errors" );
  list.style.listStyle = "none";

  return list;

}

function check_name(errors) {

  var username_length = $("#name").val().length;

  if(username_length < 3 || username_length > 20)
    errors.push("Nombre muy corto, al menos 3 caracteres.");

}

function check_surname(errors) {

  var username_length = $("#surname").val().length;

  if(username_length < 2 || username_length > 20)
      errors.push("Apellido corto, al menos 2 caracteres.");
}

function check_username(errors) {

  var username_length = $("#username").val().length;

  if(username_length < 3 || username_length > 20)
    errors.push("Nombre de usuario corto, al menos 4 caracteres.");

}

function check_password(errors) {

  var password_length = $("#password").val().length;

  if(password_length < 8)
    errors.push("Contraseña invalida, necesitan al menos 8 caracteres");

}

function check_retype_password(errors) {

  var password = $("#password").val();

  var retype_password = $("#password_confirm").val();

  if(password !=  retype_password)
    errors.push("La contraseña no coincide");

}

function check_email(errors) {

  var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

  if(!pattern.test($("#email").val()))
    errors.push("Email inválido");

}


$(document).ready(function(){


  $('#form-register').on('submit',function(event) {



    var errorsHtml = document.getElementById('errors');

    if(errorsHtml.style.getPropertyValue('display') === 'block'){
      errorsHtml.style.display = 'none';
      $(".list-errors").remove();
    }

    var errors = [];

    check_name(errors);
    check_surname(errors);
  	check_username(errors);
  	check_password(errors);
  	check_retype_password(errors);
  	check_email(errors);

    if (errors.length != 0){
      event.preventDefault();
      errorsHtml.appendChild(makeUL(errors));
      errorsHtml.style.display = 'block';
      console.log(errors);
      return false;
    }


  return true;

  });

});
