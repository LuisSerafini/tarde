<?php
//Array
$carros = array();
$carros =["BMW", "GOL","SAVEIRO","HILUX"];
//imprimi SAVEIRO
echo "$carros[2]";
echo "<ul>";
for($i = 0; $i < count($carros); $i++)
{
    echo "<li> $carros[$i] </li>";
    echo "</ul>";

    echo "<pre>";
    print_r($carros);
    echo "</pre>";
}

$nomes = array("Luis"," Isabela", "Sabrina", "Renato");
echo "<pre>";
print_r($nomes);
echo "</pre>";

// adicionar itens
$nomes[567]="Carlos";
array_push($nomes,"Fernando");

echo "<pre>";
print_r($nomes);
echo "</pre>";

$nomes[4]= "Gabriela";

echo "<pre>";
print_r($nomes);
echo "</pre>";

array_push($nomes, "Jubileu");

echo "<pre>";
print_r($nomes);
echo "</pre>";

//removendo do array
array_pop($nomes);
array_pop($nomes);
echo "<pre>";
print_r($nomes);
echo "</pre>";

//conceito chave valor




?>