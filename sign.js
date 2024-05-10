const mostrarSenha = document.getElementById("mostrarSenha");

mostrarSenha.addEventListener("click", (evt) => {
  let inputSenha = document.getElementById("exampleInputPassword1");

  if (inputSenha.type == "password") {
    mostrarSenha.textContent = "Esconder senha"
    inputSenha.type = "text";
  } else {
    mostrarSenha.textContent = "Mostrar senha";
    inputSenha.type = "password";
  }
});
