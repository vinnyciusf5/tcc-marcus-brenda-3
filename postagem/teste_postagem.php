<?php
ob_start();
?>
<html>
    <head>

    </head>
    <body>
        <?php
        include("config_postagem.php");

        $titulo=($_POST['titulo']);
        $descricao=($_POST['descricao']);

        $sql="SELECT * FROM posts WHERE titulo='$titulo' AND descricao='$descricao';";
        $resultado=mysqli_query($conexao, $sql);
        $linhas=mysqli_affected_rows($conexao);

        if($linhas>0){
            session_start();
            $_SESSION["titulo"]=$titulo;
            $_SESSION["descricao"]=$descricao;

            header("location: home.php");
        }else{
            //unset($_SESSION["username"]=$username);
            //unset($_SESSION["password"]=$password);
            header("location: index.php");
        }
        ?>
    </body>
</html>