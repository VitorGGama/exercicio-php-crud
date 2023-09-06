<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício CRUD com PHP e MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 36px;
            color: #343a40;
        }

        h2 {
            font-size: 24px;
            color: #343a40;
        }

        .list-group-item {
            background-color: #f8f9fa;
            border: none;
            border-radius: 0;
        }

        .list-group-item a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 20px;
        }

        .list-group-item a:hover {
            color: #0056b3;
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="mt-4">Exercício - CRUD com PHP e MySQL</h1>
            <hr>
            <h2>Gerenciamento de alunos, notas, médias e aprovação/reprovação</h2>
            <hr>
            <ul class="list-group mt-4">
                <li class="list-group-item"><a href="visualizar.php">Visualizar Alunos</a></li>
                <li class="list-group-item"><a href="inserir.php">Inserir novo aluno</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>