<?php

function calcularMedia($nota1, $nota2) {
    
    $media = ($nota1 + $nota2) / 2;  
    
    
    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {$media < 5
        $situacao = "Reprovado";
    }

    
    return [
        'media' => number_format($media, 2, '.', ''),
        'situacao' => $situacao,
    ];
}