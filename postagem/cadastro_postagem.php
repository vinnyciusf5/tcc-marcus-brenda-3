<?php
    include("config_postagem.php");
    
   // if(isset($_POST['submit'])){

        
       // include_once('config.php');

        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $imagem = $_POST['imagem'];
        $data = $_POST['data'];
        $hora = $_POST['hora'];
        $postador = $_POST['postador'];

        $sql="INSERT INTO posts(titulo, descricao, imagem, data, hora, postador) 
        VALUES ('$titulo','$descricao','$imagem','$data','$hora','$postador')";

        if(mysqli_query($conexao, $sql)){
            echo "Postado com sucesso!";
        }else{
            echo "Erro";   
        }
        mysqli_close($conexao);
        header('Location: index.php');
        exit();
?>
