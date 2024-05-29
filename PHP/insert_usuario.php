<?php
$nomeServidor = "localhost";
$nomeUsuario = "root"; //Usuário banco (root)
$password = "root"; //Senha root MySQL
$nomeBanco = "db_calendario_interativo";

// A linha abaixo é o comando para se conectar no banco usando a função mysqli_connect

$conexao = mysqli_connect($nomeServidor,$nomeUsuario, $password,$nomeBanco);

// Esse comando é para verificar se a conexão foi feita com sucesso
if (!$conexao) {
    die("falha na conexão: " . mysqli_connect_error());
}

$sql = "INSERT INTO tb_usuario VALUES (null,'11961523464','lune@gmail.com','senha')";

if (mysqli_query($conexao, $sql)) {
    echo "New record created sucessfully";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
