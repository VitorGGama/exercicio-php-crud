<?php
function calcularMedia(float $nota1, float $nota2):float{
   return ($nota1 + $nota2) / 2;   

}

function situacaoAluno(float $media):string{
    if ($media >= 7){
       $situacao = 'aprovado';       
    }elseif ($media < 5){
        $situacao = 'reprovado';
    }else { 
        $situacao = 'recuperação';
    }
    return $situacao;
}

    
    



