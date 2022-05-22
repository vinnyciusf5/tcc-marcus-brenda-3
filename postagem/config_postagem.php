<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-universe-3';

    //$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    $conexao = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
        if(!$conexao){
            die("Houve um erro: ".mysqli_connect());
        }
?>