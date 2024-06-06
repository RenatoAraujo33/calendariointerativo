<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calendario</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  />
  <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../calendário.css ">

</head>
<body> 
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

$select = "SELECT * FROM tb_compromisso";
$query = mysqli_query($conexao,$select);
while ($resultado = mysqli_fetch_array($query)) { ?>  
  <div class="container">
  <div class="calendar" style="display: flex; flex-direction: column; align-items: center; gap: 10%;">
   <h2 style="margin-top: 5%;color: #967BAC;">Compromissos Agendados</h2>  
   <div class="card" style="width: 18rem;">
       <ul class="list-group list-group-flush">
         <li class="list-group-item">Data: <?php echo $resultado['dt_compromisso'] ?></li>
         <li class="list-group-item">Hora: <?php echo $resultado['hr_compromisso'] ?></li>
         <li class="list-group-item">Compromisso: <?php echo $resultado['mensagem'] ?></li>
       </ul>
     </div>
<?php } ?>
 
 <!-- inspired by http://colorhunt.co/c/8184 and 
    https://dribbble.com/shots/2407357-Calendar%60 -->
        <nav class="navbar bg-body-tertiary" style="width: 100%;">
          <div class="container-fluid">
            <a class="tarefas" href="compromisso.php">
              <i class="fa-solid fa-list-check"></i>
              <span>Compromissos</span>
            </a>
            <a class="tarefas" href="../calendario.html">
              <i class="fa-solid fa-calendar-days"></i>
              <span>Calendário</span>
            </a>   
            <a class="tarefas" href="../index.html">
              <i class="fa-solid fa-right-from-bracket"></i>
              <span>Sair</span>
            </a>
          </div>
        </nav>
     </div>
      <!-- As a link -->



</body>
</html>
