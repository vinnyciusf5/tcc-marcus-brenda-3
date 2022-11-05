<?php
    include("config_formulario.php");
    
   // if(isset($_POST['submit'])){

        
       // include_once('config.php');

        $nome = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $faculdade = $_POST['faculdade'];
        $semestre = $_POST['semestre'];
        $curso = $_POST['curso'];
        $ra = $_POST['ra'];


        $sql="INSERT INTO usuarios(name, email, username, password, faculdade, semestre, curso, ra) 
        VALUES ('$nome','$email','$username','$password','$faculdade','$semestre','$curso','$ra')";

        if(mysqli_query($conexao, $sql)){
            echo "Usuario cadastrado com sucesso";
        }else{
            echo "Erro";   
        }
        mysqli_close($conexao);
        header('Location: index.php');
        exit();
        //$result = mysqli_query($conexao, "INSERT INTO usuarios(name, email, username, password, faculdade, semestre, curso, ra) 
        //VALUES ('$nome','$email','$username','$password','$faculdade','$semestre','$curso')");
  //  }
?>
