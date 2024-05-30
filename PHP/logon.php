<?php
$nomeServidor = "localhost";
$nomeUsuario = "root"; //Usuário banco (root)
$password = "root"; //Senha root MySQL
$nomeBanco = "db_calendario_interativo";

// A linha abaixo é o comando para se conectar no banco usando a função mysqli_connect

$conexao = mysqli_connect($nomeServidor,$nomeUsuario, $password,$nomeBanco);

$email =$_POST['email'];
$senha = $_POST['senha'];

$_select="SELECT * FROM tb_usuario WHERE email = $email";
$_query = mysqli_query($conexao; $select);


?>