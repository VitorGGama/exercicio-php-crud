<?php
require_once 'src/funcoes-alunos.php';
require 'src/funcoes-utilitarias.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$aluno = lerUmAluno($conexao, $id); 
$media = calcularMedia($aluno['nota1'], $aluno['nota2']);
situacaoAluno($media);
if (isset($_POST['atualizar']) ){
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $nota1 = filter_input(INPUT_POST, "nota1", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $nota2 = filter_input(INPUT_POST, "nota2", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION); 


atualizarAluno($conexao, $id, $nome, $nota1, $nota2);

header("Location: visualizar.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atualizar dados - Exercício CRUD com PHP e MySQL</title>
    <!-- Inclua os arquivos CSS e JavaScript do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Atualizar dados do aluno</h1>
    <hr>

    <p>Utilize o formulário abaixo para atualizar os dados do aluno.</p>

    <form action="#" method="post">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input value="<?=$aluno['nome']?>" type="text" class="form-control" name="nome" id="nome" required>
    </div>
    
    <div class="mb-3">
        <label for="nota1" class="form-label">Primeira nota:</label>
        <input value="<?=$aluno['nota1']?>" type="number" class="form-control" name="nota1" id="nota1" step="0.01" min="0.00" max="10.00" required>
    </div>
    
    <div class="mb-3">
        <label for="nota2" class="form-label">Segunda nota:</label>
        <input value="<?=$aluno['nota2']?>" type="number" class="form-control" name="nota2" id="nota2" step="0.01" min="0.00" max="10.00" required>
    </div>

        <div class="mb-3">
            <label for="media" class="form-label">Média:</label>
            <input value="<?=$media?>" type="number" class="form-control" name="media" id="media" step="0.01" min="0.00" max="10.00" readonly disabled>
        </div>

        <div class="mb-3">
            <label for="situacao" class="form-label">Situação:</label>
            <input value="<?=situacaoAluno($media)?>" type="text" class="form-control" name="situacao" id="situacao" readonly disabled>
        </div>
        
        <button type="submit" name="atualizar" class="btn btn-primary">Atualizar dados do aluno</button>
    </form>

    <hr>
    <p><a href="visualizar.php" class="btn btn-secondary">Voltar à lista de alunos</a></p>

</div>



</body>
</html>
