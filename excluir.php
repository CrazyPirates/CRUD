<?php 
    $id = $_GET["id"];

    $conexao = mysqli_connect("localhost", "root", "root", "empresa");

    $delete = "delete from produtos where id = $id";

    mysqli_query($conexao, $delete);

    header("Location: index.php");
?>