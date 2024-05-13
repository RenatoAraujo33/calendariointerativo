const mostrarSenha = document.getElementById("mostrarSenha");

mostrarSenha.addEventListener("click", (evt) => {
  let inputSenha = document.getElementById("exampleInputPassword1");

  if (inputSenha.type == "password") {
    if (mostrarSenha.classList.contains("fa-eye-low-vision")){
      mostrarSenha.classList.remove("fa-eye-low-vision");
      mostrarSenha.classList.remove("fa-sharp");
      mostrarSenha.classList.add("fa-eye");
    }
    inputSenha.type = "text";
  } else {
    if (mostrarSenha.classList.contains("fa-eye")){
      mostrarSenha.classList.add("fa-eye-low-vision");
      mostrarSenha.classList.add("fa-sharp");
      mostrarSenha.classList.remove("fa-eye");
    }
    inputSenha.type = "password";
  }
});
