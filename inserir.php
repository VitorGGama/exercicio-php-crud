<?php
require_once "src/funcoes-alunos.php"; 


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $nota1 = filter_input(INPUT_POST, "nota1", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $nota2 = filter_input(INPUT_POST, "nota2", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION); 

    inserirAluno($conexao, $nome, $nota1, $nota2);    
    header("Location: visualizar.php");
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastrar um novo aluno - Exercício CRUD com PHP e MySQL</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		<h1 class="mt-5">Cadastrar um novo aluno</h1>
		<hr>

		

		<form action="#" method="post">
			<div class="mb-3">
				<label for="nome" class="form-label">Nome:</label>
				<input type="text" id="nome" name="nome" class="form-control" required>
			</div>

			<div class="mb-3">
				<label for="nota1" class="form-label">Primeira nota:</label>
				<input type="number" id="nota1" name="nota1" class="form-control" step="0.01" min="0.00" max="10.00" required>
			</div>

			<div class="mb-3">
				<label for="nota2" class="form-label">Segunda nota:</label>
				<input type="number" id="nota2" name="nota2" class="form-control" step="0.01" min="0.00" max="10.00" required>


				
			</div>
			<button type="submit" class="btn btn-primary" name="inserir">Inserir aluno</button>
		</form>

		<hr>
		<p><a href="index.php">Voltar ao início</a></p>
	</div>

	
</body>

</html>