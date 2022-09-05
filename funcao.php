<?php
function pulaLinha() {
echo "<br /><br />";
}

function imprimirTexto($texto){
    echo $texto;
    pulaLinha();
}/*
pulaLinha();
imprimirTexto("Minha chamada da função");

imprimirTexto("2");

imprimirTexto("terceira");

imprimirTexto("quarta vez que eu chamo");

imprimirTexto("ultima chamada da função");
pulaLinha();
**/
echo "<hr>";
pulaLinha();
function Adicao($numero1, $numero2){
    return $numero1 + $numero2 ;
}
function Media ( $numero1, $numero2 ) {
    return Adicao($numero1,$numero2)/2;
}
function Divisao($numero1, $numero2){
    return  $numero1 / $numero2;
}
function Menos($numero1, $numero2){
    return  $numero1 - $numero2;
}
function Resto($numero1, $numero2){
    return  $numero1 % $numero2;
}
$menos = Menos(8,7);
$divisao = Divisao(8,2);
$soma = Adicao(10,12);
$media = Media(8,7);
$resto = Resto(35,2);


imprimirTexto("A soma é: $soma");
imprimirTexto("A média é: $media");
imprimirTexto("A divisão é: $divisao");
imprimirTexto("A subtração é: $menos");
imprimirTexto("O resto é: $resto");

echo "<br><hr>";
$resultado = 0;
function lendariaCalculadora($numero1, $numero2, $operacao){

    if($operacao == "+"){
       $resultado =Adicao($numero1, $numero2);
    }
    else if($operacao == "-"){
       $resultado = Menos($numero1, $numero2);
    }
    else if($operacao == "*"){
        $resultado = Multicacion($numero1, $numero2);
    }
    else if($operacao == "/"){
       $resultado = Divisao($numero1, $numero2);
    }
    else if ($operacao == "%"){
        $resultado = Resto($numero1, $numero2);
    }
    else{
        $resultado = "Operação Invalida";
    }
imprimirTexto($resulado);
}
lendariaCalculadora(20,10,"+")

?>