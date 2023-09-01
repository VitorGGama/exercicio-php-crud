<?php 
require_once "conecta.php";

function lerAlunos(PDO $conexao):array{
    $sql = "SELECT * FROM alunos ORDER BY nome";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC); 
    } catch (Exception $erro) {
        die("Erro ao carregar alunos: ".$erro->getMessage());
    }
    return $resultado;
}

function inserirAluno(PDO $conexao, string $nome, float $nota1, float $nota2):void {
    $sql = "INSERT INTO alunos(nome, nota1, nota2) VALUES (:nome, :nota1, :nota2)";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindValue(":nome", $nome, PDO::PARAM_STR);
        $consulta->bindValue("nota1", $nota1, PDO::PARAM_STR);
        $consulta->bindValue("nota2", $nota2, PDO::PARAM_STR);
        $consulta->execute();
    } catch (Exception $erro) {
        die("Erro ao inserir: ".$erro->getMessage());
    }
}