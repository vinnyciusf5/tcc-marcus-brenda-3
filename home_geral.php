<?php
    session_start();
    if((!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)){
        header('location: index.php');
    }
    $nome_user = $_SESSION['username'];
    $senha = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_home1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Home</title>
</head>

<!----------------------------------------------------------INICIO DO NAVBAR-------------------------------------------------------->
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Conteúdo expandido</h5>
      <span class="text-muted">Expansível, atráves da marca no navbar.</span>
    </div>
  </div>
    <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <img src="img/logo.png" alt="" width=150px id="navbar_logo">
    <div>
        <a href="sair_home.php"><button id="btsair">Sair</button></a>
    </div>
  </nav>
</div>
<!-------------------------------------------------------------FINAL DO NAVBAR------------------------------------------------------->
<!------------------------------------------------------------------PERFIL------------------------------------------------------------>
<div class="perfil">
  <p><img src="img/user.png" alt=""  class="foto_user"></p>
  <?php
    echo "<h1>$nome_user</h1>";
   // echo "Username: $senha";
    //echo "Nome: $name";
  ?>
</div>
<!------------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------Barra de Menu----------------------------------------------------------->
<div class="feed">

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="home.php">Informes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="home_geral.php">Geral</a>
  </li>
</ul>

</div>
<!----------------------------------------------------------------POST-------------------------------------------------------------------->
<div class="feed">

<div class="card">
  <div class="card-body">
    This is some text within a card body.
  </div>
</div>

</div>
<body>
<!------------------------------------------------------------------------------------------------------------------------------------>

<?php
    //echo "<h1>Bem vindo <u>$logado</u></h>";
?>
</body>
</html>