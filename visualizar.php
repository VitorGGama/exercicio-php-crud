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
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Lista de alunos</h1>
        <hr>
        <p><a href="inserir.php">Inserir novo aluno</a></p>



        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Nota1</th>
                <th>Nota2</th>
                <th>Média</th>
                <th>Situação</th>
                <th>Operações</th>
            </tr>
            <?php foreach ($alunos as $aluno) {
                $media = calcularMedia($aluno['nota1'], $aluno['nota2']);
                ?>
                <tr>
                    <td><?=$aluno['nome']?></td>
                    <td><?=$aluno['nota1']?></td>
                    <td><?=$aluno['nota2']?></td>
                    <td><?= $media ?></td>
                    <td><?=situacaoAluno($media)?></td>
                    <td><a href="atualizar.php">Atualizar | <a href="excluir.php">Excluir</a></a> </td>

                </tr>

            <?php } ?>

        </table>

        <!-- Aqui você deverá criar o HTML que quiser e o PHP necessários
para exibir a relação de alunos existentes no banco de dados.

Obs.: não se esqueça de criar também os links dinâmicos para
as páginas de atualização e exclusão. -->


        <p><a href="index.php">Voltar ao início</a></p>
    </div>

</body>

</html>