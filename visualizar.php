<?php
require_once "src/funcoes-alunos.php";
require_once "src/funcoes-utilitarias.php";

$alunos = lerAlunos($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    
</head>

<body>
    <div class="container">
        <h1>Lista de alunos</h1>
        <hr>
        <p><a class="btn btn-primary" href="inserir.php">Inserir novo aluno</a></p>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Nota1</th>
                    <th>Nota2</th>
                    <th>Média</th>
                    <th>Situação</th>
                    <th>Operações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alunos as $aluno) {
                    $media = calcularMedia($aluno['nota1'], $aluno['nota2']);
                ?>
                    <tr>
                        <td><?= $aluno['nome'] ?></td>
                        <td><?= $aluno['nota1'] ?></td>
                        <td><?= $aluno['nota2'] ?></td>
                        <td><?= $media ?></td>
                        <td><?= situacaoAluno($media) ?></td>
                        <td>
                            <a class="btn btn-info" href="atualizar.php?id=<?= $aluno['id'] ?>">Atualizar</a>
                            <a class="btn btn-danger excluir" href="excluir.php?id=<?= $aluno['id'] ?>" data-nome="<?= $aluno['nome'] ?>">Excluir</a>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <p><a href="index.php">Voltar ao início</a></p>
    </div>

    <script src="src/confirma-exclusao.js"></script>


</body>
<script>src="js</script>
</html>



