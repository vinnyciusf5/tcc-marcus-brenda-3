<?php
    session_start();
    if((!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)){
        header('location: index.php');
    }
    $logado = $_SESSION['username'];
    $senha = $_SESSION['password'];

    $name = $_SESSION['name'];


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
<div class="feed">


<div class="perfil">
  <?php
   // echo "Username: $logado";
   // echo "Username: $senha";

    echo "Nome: $name";
  ?>
</div>
<!------------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------Barra de Menu----------------------------------------------------------->
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">Disabled</a>
  </li>
</ul>
<!----------------------------------------------------------------POST-------------------------------------------------------------------->
<div class="card mb-3">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
  <img src="..." class="card-img-bottom" alt="...">
</div>

</div>
<body>
<!------------------------------------------------------------------------------------------------------------------------------------>

<?php
    //echo "<h1>Bem vindo <u>$logado</u></h>";
?>
</body>
</html>