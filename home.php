<?php
    session_start();
    if((!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)){
        header('location: index.php');
    }
    $logado = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_home.css">
    <title>Home</title>
</head>
<body>
      <div class="d-flex">
          <a href="sair_home.php">Sair</a>
      </div>
<?php
    echo "<h1>Bem vindo <u>$logado</u></h>";
?>
<br>
 <img src="img/logo.png" alt="some text" width=30% sss >
</body>
</html>