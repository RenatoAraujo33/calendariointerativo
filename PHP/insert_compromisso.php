<?php
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

//Recebendo dados do formulário

$data = $_POST['data'];
$mes_array = explode("/", $data);//Separa nos espaços a string "data" e transforma em um array.
$renatao = array_reverse($mes_array);
 
$dia = $renatao['2'];
$mes = $renatao['1'];
$ano = $renatao['0'];
 
$data = "$ano/$mes/$dia";

$hora = $_POST['hora'];
$mensagem = $_POST['mensagem'];


$sql = "INSERT INTO tb_compromisso VALUES (null,'$data','$hora','$mensagem','1')";

if (mysqli_query($conexao, $sql)) {
    echo "<script> alert('Compromisso cadastrado com sucesso'); location.href='../calendario.html'; </script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
