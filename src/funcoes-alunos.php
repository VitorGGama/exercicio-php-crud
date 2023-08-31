<?php
require_once "conecta_php";

//function lerAlunos( PDO $conexao ){
//$sql = "SELECT * FROM alunos ORDER BY nome";

//try {
  //  $consulta = $conexao->prepare($sql);
    //$consulta->execute();
    //$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC)
//} catch (Exception $erro) {
  //  die
//}

//}

function inserirAluno( PDO $conexao, string $nome, int $nota1, int $nota2){
  $sql = "INSERT TO alunos(nome, nota1, nota2) VALUES(:nome, :nota1, :nota2)";
  





?>
