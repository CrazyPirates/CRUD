<?php 
    error_reporting(E_ERROR);
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $estoque = $_POST["estoque"];

    $conexao = mysqli_connect("localhost", "root", "root", "empresa");
    $inserir = "insert into produtos (nome, descricao, preco, estoque) values ('$nome', '$descricao', '$preco', '$estoque')";
?>