<?php

$codigo = $_GET['cod'];

$nomeServidor = "calendariointerativo.mysql.database.azure.com";
$nomeUsuario = "renatoaraujo33"; //Usuário banco (root)
$password = "etec@123"; //Senha root MySQL
$nomeBanco = "db_calendario_interativo";
 
// A linha abaixo é o comando para se conectar no banco usando a função mysqli_connect

$conexao = mysqli_connect($nomeServidor,$nomeUsuario, $password,$nomeBanco);

// Esse comando é para verificar se a conexão foi feita com sucesso
if (!$conexao) {
  die("falha na conexão: " . mysqli_connect_error());
}


$deletar = "DELETE FROM tb_compromisso WHERE id_compromisso = $codigo";

$query = mysqli_query($conexao, $deletar);

if($query){
    echo "<script>alert('Tarefa realizada com sucesso'); history.back();</script>";
} else{
    echo "<script>alert(Error no script php); history.back();</script>";
}

?>