<?php

$codigo = $_GET['cod'];

$nomeServidor = "localhost";
$nomeUsuario = "root"; //Usuário banco (root)
$password = "root"; //Senha root MySQL
$nomeBanco = "db_calendario_interativo";
$conexao = mysqli_connect($nomeServidor,$nomeUsuario, $password,$nomeBanco);

$deletar = "DELETE FROM tb_compromisso WHERE id_compromisso = $codigo";

$query = mysqli_query($conexao, $deletar);

if($query){
    echo "<script>alert('Deletado com sucesso'); history.back();</script>";
} else{
    echo "<script>alert(Error no script php); history.back();</script>";
}

?>