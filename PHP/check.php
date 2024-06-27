<?php

$codigo = $_GET['cod'];

include 'conexao.php';

$deletar = "DELETE FROM tb_compromisso WHERE id_compromisso = $codigo";

$query = mysqli_query($conexao, $deletar);

if($query){
    echo "<script>alert('Tarefa realizada com sucesso'); history.back();</script>";
} else{
    echo "<script>alert(Error no script php); history.back();</script>";
}

?>