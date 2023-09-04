<?php
require_once "conecta.php";

// Início lerAlunos
function lerAlunos (PDO $conexao):array {
    $sql = "SELECT * FROM alunos ORDER BY nome"; 

    try {
        $consulta = $conexao->prepare($sql);
        $consulta-> execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $erro){
        die("Erro: " .$erro->getMessage());
    }

    return $resultado;
} 

// Início inserirAlunos
function  inserirAluno(
    PDO $conexao,
    string $nome, 
    float $nota1, 
    float $nota2
 ):void {

    $sql = "INSERT INTO alunos(nome, nota1, nota2)
            VALUES(:nome, :nota1, :nota2)";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindValue(":nome", $nome, PDO::PARAM_STR);
        $consulta->bindValue(":nota1", $nota1, PDO::PARAM_STR);
        $consulta->bindValue(":nota2", $nota2, PDO::PARAM_STR);

        $consulta->execute();        

    } catch (Exception $erro) {
        die("Erro ao inserir: " .$erro->getMessage());        
    }        

} 


// Início lerUmAluno
function lerUmAluno(
    PDO $conexao, 
    int $id,
    
    ):array {
    $sql = "SELECT * FROM alunos WHERE id = :id";
    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindValue(":id", $id, PDO::PARAM_INT);    

        $consulta->execute();
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro ao carregar dados: ".$erro->getMessage());
    }    
    return $resultado;
} 

    
  // Início excluirAluno
  function excluirAluno(PDO $conexao, int $id):void{
    $sql = "DELETE FROM alunos WHERE id = :id"; 

   try {
       $consulta = $conexao->prepare($sql);
       $consulta->bindValue(":id", $id, PDO::PARAM_INT);
       $consulta->execute();
    
   } catch (Exception $erro) {
        die ("Erro ao excluir: " .$erro->getMessage());
   }
  } 


 // Início atualizarAluno
  function atualizarAluno(
    PDO $conexao,
    int $id,
    string $nome, 
    int $primeira, 
    int $segunda):void {

    $sql = "UPDATE alunos SET
        nome = :nome,
        primeira = :primeira,
        segunda = :segunda     
        WHERE id = :id";

    try {        
        $consulta = $conexao->prepare($sql);
        $consulta->bindValue(":id", $id, PDO::PARAM_INT);
        $consulta->bindValue(":nome", $nome, PDO::PARAM_STR);
        $consulta->bindValue(":primeira", $primeira, PDO::PARAM_STR);
        $consulta->bindValue(":segunda", $segunda, PDO::PARAM_STR);             
       
        $consulta->execute();
    } catch (Exception $erro) {
        die("Erro ao atualizar: ".$erro->getMessage());
    }   
} 