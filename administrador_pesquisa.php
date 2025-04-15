<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="bg-primary text-white p-3 text-center">
        <h1>Pesquisa de Administradores</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-10 mx-auto">

            <table class="table">
                <tr>
                <td><?= $linha["codigo"] ?></td>
                <td><?= $linha["nome"] ?></td>
                <td><?= $linha["login"] ?></td>

                </tr>
                <?php
                    include "conexao.php";
                    $sql = "select * from administrador"

                    $result = $conexao->prepare($sql);
                    $result->execute();

                    while ( $linha = $result->fetch(PDO::FETCH_ASSOC) )
                    {
                ?>

                <tr>
                    <td>230001</td>
                    <td>Larissa Liper</td>
                    <td>Larissa</td>
                </tr>
                <?php
                    }
                ?>

            </table>

            <p>
                <a href="index.php" class="btn btn-primary">Voltar</a>

                </p>
    
</body>
</html>