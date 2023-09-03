<?php
require_once "src/funcoes-alunos.php";
require_once "calcular-media.php";

$listaDeAlunos = lerAlunos($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="mt-4">Lista de alunos</h1>
        <hr>
        <p><a href="inserir.php" class="btn btn-primary">Inserir novo aluno</a></p>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Aluno</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Média</th>
                    <th>Situação</th>
                    <th>Operações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaDeAlunos as $aluno) { ?>
                    <tr>
                        <td><?= $aluno["nome"] ?></td>
                        <td><?= $aluno["nota1"] ?></td>
                        <td><?= $aluno["nota2"] ?></td>
                        <?php
                        $media = calcularMedia($aluno["nota1"], $aluno["nota2"]);
                        ?>
                        <td><?= $media['media'] ?></td>
                        <td><?= $media >= 7 ? 'Aprovado' : 'Reprovado' ?></td>
                        <td>
                            <a href="atualizar.php" class="btn btn-warning btn-sm">Atualizar</a>
                            <a href="excluir.php" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <p><a href="index.php" class="btn btn-secondary">Voltar ao início</a></p>
    </div>
</body>

</html>
