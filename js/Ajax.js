var READY_STATE_COMPLETE = 4;
var STATUS_RIGTH = 200;
var http_request = null;

// function validarMail() {
//   //Obtenemos el valor del campo
//   var valor = document.getElementById("email");

//   if (!valor.checkValidity()) {
//     if (valor.validity.valueMissing) {
//       document.getElementById("duplicado").innerHTML =
//         "No hay nada introducido";
//       document.getElementById("boton").disabled = true;
//       document.getElementById("email").focus();
//     }
//     if (valor.validity.patterMismatch) {
//       document.getElementById("duplicado").innerHTML =
//         "No cumple los requisitos";
//       document.getElementById("boton").disabled = true;
//       document.getElementById("email").focus();
//     }
//   } else {
//     document.getElementById("duplicado").innerHTML = "";
//     comprobar();
//   }
// }
var typingTimer;
var doneTypingInterval = 2000;

$("#email").on("keyup", function () {
  clearTimeout(typingTimer);
  typingTimer = setTimeout(doneTyping, doneTypingInterval);
});

//on keydown, clear the countdown
$("#email").on("keydown", function () {
  clearTimeout(typingTimer);
});

//user is "finished typing," do something
function doneTyping() {
  //do something
  comprobar();
}
function comprobar() {
  http_request = new XMLHttpRequest();
  http_request.onload = success;
  http_request.open("POST", "php/compruebaEmail.php", true);
  http_request.setRequestHeader(
    "Content-Type",
    "application/x-www-form-urlencoded"
  );
  http_request.send(
    "email=" + encodeURIComponent(email.value) + "&nocache=" + Math.random()
  );
}

function success() {
  //6 - Trato la respuesta
  try {
    if (http_request.readyState == READY_STATE_COMPLETE) {
      if (http_request.status == STATUS_RIGTH) {
        var xmlResponse = JSON.parse(http_request.response);
        if (xmlResponse.result == "si") {
          console.log("Existe");
          $("#duplicado").removeClass("hidden");
          $("#boton").prop("disabled", true);
        } else {
          $("#duplicado").addClass("hidden");
          console.log("no existe");
          $("#boton").prop("disabled", false);
        }
        //  if (
        //    xmlResponse.getElementsByTagName("existe")[0].firstChild.nodeValue ==
        //    "no"
        //  ) {
        //   document.getElementById("email").focus();
        //   document.getElementById("duplicado").innerHTML =
        //     "El correo electronico esta en uso, utilice otro";
        //   document.getElementById("boton").disabled = true;
        // } else {
        //   document.getElementById("boton").disabled = false;
        //   document.getElementById("duplicado").innerHTML = "";
        // }
      }
    }
  } catch (e) {
    console.log("error");
  }
}
