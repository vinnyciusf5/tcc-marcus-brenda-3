<?php
ob_start();
?>
<html>
    <head>

    </head>
    <body>
        <?php
        include("config_formulario.php");

        $username=($_POST['username']);
        $password=($_POST['password']);

        $name=($_POST['name']);

        $sql="SELECT * FROM usuarios WHERE username='$username' AND password='$password';";
        $resultado=mysqli_query($conexao, $sql);
        $linhas=mysqli_affected_rows($conexao);

        if($linhas>0){
            session_start();
            $_SESSION["username"]=$username;
            $_SESSION["password"]=$password;

            $_SESSION["name"]=$name;

            header("location: home.php");
        }else{
            //unset($_SESSION["username"]=$username);
            //unset($_SESSION["password"]=$password);
            header("location: index.php");
        }
        ?>
    </body>
</html>