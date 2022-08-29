<?php

$numero = array();
for($i = 0; $i < 10; $i++)
{
$numero[$i] = rand(-10,10);
}

echo "<pre>";
print_r($numero);
echo "</pre>";
$negativo = 0;
$positivo = 0;
for($i = 0; $i < 10; $i++)
{
if($numero[$i] < 0){
    $negativo ++;
}else{
    $positivo++;

}

}
echo "Negativos : $negativo";
echo "<br />   Positivos : $positivo";



?>