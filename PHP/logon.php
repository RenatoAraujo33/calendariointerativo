<?php
$nomeServidor = "localhost";
$nomeUsuario = "root"; //Usuário banco (root)
$password = "root"; //Senha root MySQL
$nomeBanco = "db_calendario_interativo";

// A linha abaixo é o comando para se conectar no banco usando a função mysqli_connect

$conexao = mysqli_connect($nomeServidor,$nomeUsuario, $password,$nomeBanco);

//essas variávaeis abaixo estão armazenando os dados vindo do usuário
$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email == "" && $senha == "" ) {
    echo "<script> alert('Preencha os campos'); location.href='../index.html'; </script>";
} else {
    
$_select="SELECT * FROM tb_usuario WHERE email = '$email'";
$_query = mysqli_query($conexao, $_select);
$_resultado = mysqli_fetch_array($_query);

//essas duas variáveis estão armazenando o e-mail e a senha vindas do banco
$email_banco = $_resultado['email'];
$senha_banco = $_resultado ['senha'];


if ($email == $email_banco && $senha == $senha_banco) {
    header('location: ../calendario.html');
} else {
    echo "<script> alert('Usuário ou senha inválida'); location.href='../index.html'; </script>";
}
}


?>