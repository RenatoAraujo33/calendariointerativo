<?php
$nomeServidor = "calendariointerativo.mysql.database.azure.com";
$nomeUsuario = "renatoaraujo33"; //Usuário banco (root)
$password = "etec@123"; //Senha root MySQL
$nomeBanco = "db_calendario_interativo";
 
// A linha abaixo é o comando para se conectar no banco usando a função mysqli_connect

$conexao = mysqli_connect($nomeServidor,$nomeUsuario, $password,$nomeBanco);

// A linha abaixo é o comando para se conectar no banco usando a função mysqli_connect


// Esse comando é para verificar se a conexão foi feita com sucesso
if (!$conexao) {
    die("falha na conexão: " . mysqli_connect_error());
}

//Recebendo dados do formulário
$telefone = $_POST['Telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = "INSERT INTO tb_usuario VALUES (null,'$telefone','$email','$senha')";

if (mysqli_query($conexao, $sql)) {
    echo "<script> alert('Usuário cadastrado com sucesso'); location.href='../index.html'; </script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
