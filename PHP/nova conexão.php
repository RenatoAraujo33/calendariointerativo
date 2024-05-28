<?php
$nomeServidor = "localhost";
$nomeUsuário = "root"; //Usuário banco (root)
$password = "root"; //Senha root MySQL
$dbname = "myDB";

// A linha abaixo é o comando para se conectar no banco usando a função mysqli_connect

$conexão = mysqli_connect($nomeServidor,$nomeUsuário, $senha,$dbname);

// Esse comando é para verificar se a conexão foi feita com sucesso
if (!$conn) {
    die("falha na conexão: " . mysqli_connect_error());
}

$sql = "INSERT INTO     MyGuests (firstname, lastname, email)";

if (mysqli_query($conn, $sql)) {
    echo "New record created sucessfully";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
