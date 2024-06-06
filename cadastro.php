<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Parabens!</h1>
    </header>

    <section>
        <?php 
            include "conexao.php";

            if (mysqli_query($conexao, $inserir)) {
                echo "<p><strong>Parabéns! Você cadastrou o produto com sucesso!</strong></p>";
            } else {
                echo "<p><strong>Erro: Seu cadastro não deu certo. Tente novamente mais tarde</strong></p>";
            }
        ?>
        <button onclick="javascript:window.location.href='index.php'">Voltar para a página de cadastro</button>
    </section>

</body>
</html>