<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>
<body>

    <header>
        <h1>Cadastre-se</h1>
    </header>

    <section>
        <form action="cadastro.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">

            <label for="email">Descrição:</label>
            <input type="text" name="descricao" id="email">

            <label for="senha">Preço:</label>
            <input type="number" name="preco" id="senha">

            <label for="">Estoque:</label>
            <input type="number" name="estoque" id="estoque">

            <input type="submit" value="Cadastrar">
        </form>
    </section>

    <section>
        <table>
            <tr>
                <td><strong>ID</strong></td>
                <td><strong>Nome</strong></td>
                <td><strong>Descrição</strong></td>
                <td><strong>Preço (R$)</strong></td>
                <td><strong>Estoque</strong></td>
                <td><strong>Deletar</strong></td>
            </tr>

            <?php 
                include "conexao.php";

                $consulta = "select * from produtos";
                $resultado = mysqli_query($conexao, $consulta);

                while($linha = mysqli_fetch_array($resultado)){
                    $id = $linha["id"];
                    $nome = $linha["nome"];
                    $descricao = $linha["descricao"];
                    $preco = $linha["preco"];
                    $estoque = $linha["estoque"];

                    echo "<tr>
                        <td>$id</td>
                        <td>$nome</td>
                        <td>$descricao</td>
                        <td>$preco</td>
                        <td>$estoque</td>
                        <td><a href='excluir.php?id=$id'>Deletar</td>
                    </tr>";
                }
            ?>
        </table>
    </section>
</body>
</html>