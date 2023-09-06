const formulario = document.querySelector("form");
const inputPrimeira = formulario.querySelector("#nota1");
const inputSegunda = formulario.querySelector("#nota2");
const inputMedia = formulario.querySelector("#media");
const inputSituacao = formulario.querySelector("#situacao");

let primeira, segunda, media, situacao;

function atualizarMedia(nota1, nota2){
    return (nota1 + nota2) / 2;
}
function atualizarSituacao(resultadoDaMedia){
    if(resultadoDaMedia >= 7 ){
        situacao = "aprovado";
    }else if(resultadoDaMedia >= 5){
        situacao = "recuperacao";
    }else{
        situacao = "reprovado";
    }
    return situacao;
}

inputPrimeira.addEventListener("input", function(){
    console.log(this.value);
});

