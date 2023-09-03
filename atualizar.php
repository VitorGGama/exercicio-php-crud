<?php
require_once "src/funcoes-alunos.php";

if (isset($_POST['atualizar'])) {
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    
    $nota1 = filter_input(
        INPUT_POST, "preco", 
        FILTER_SANITIZE_NUMBER_FLOAT,
        FILTER_FLAG_ALLOW_FRACTION
    );

    $nota2 = filter_input(
        INPUT_POST, "preco", 
        FILTER_SANITIZE_NUMBER_FLOAT,
        FILTER_FLAG_ALLOW_FRACTION
    );

atualizarAluno($conexao, $id, $nome, $nota1, $nota2);

header("location: visualizar.php");
}
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atualizar dados - Exercício CRUD com PHP e MySQL</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Atualizar dados do aluno</h1>
        <hr>

        <form action="#" method="post">
            <input type="hidden" name="id" value="<?php echo $aluno['id']; ?>">

            <p><label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value="<?php echo $aluno['nome']; ?>" required></p>

            <p><label for="primeira">Primeira nota:</label>
                <input name="primeira" type="number" id="primeira" step="0.01" min="0.00" max="10.00" value="<?php echo $aluno['nota1']; ?>" required></p>

            <p><label for="segunda">Segunda nota:</label>
                <input name="segunda" type="number" id="segunda" step="0.01" min="0.00" max="10.00" value="<?php echo $aluno['nota2']; ?>" required></p>

            <p>
                <label for="media">Média:</label>
                <input name="media" type="number" id="media" step="0.01" min="0.00" max="10.00" value="<?php echo $aluno['media']; ?>" readonly disabled>
            </p>

            <p>
                <label for="situacao">Situação:</label>
                <input type="text" name="situacao" id="situacao" value="<?php echo $aluno['situacao']; ?>" readonly disabled>
            </p>

            <button type="submit" name="atualizar-dados">Atualizar dados do aluno</button>
        </form>

        <hr>
        <p><a href="visualizar.php">Voltar à lista de alunos</a></p>
    </div>
</body>

</html>
