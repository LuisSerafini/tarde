<?php
//Array
$carros = array();
$carros =["BMW","GOL","SAVEIRO","HILUX"];
//imprimi SAVEIRO
echo "$carros[2]<br/><hr><br/>";
echo "<ul>";
for($i = 0; $i < count($carros); $i++)
{
    echo "<li>$carros[$i]</li>";
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

$carros["Eletricos"]="Tesla";
echo "<pre>";
print_r($carros);
echo "</pre>";

echo "<hr /><br />";
$cadastro = array();

$pessoa1 = array("ID"=>1,"Nome"=>"Fer","CPF"=>"123");
$pessoa2 = array("ID"=>2,"Nome"=>"Sa","CPF"=>"456");
$pessoa3 = array("ID"=>3,"Nome"=>"Bruno","CPF"=>"789");

array_push($cadastro,$pessoa1);
array_push($cadastro,$pessoa2);
array_push($cadastro,$pessoa3);
echo "<pre>";
print_r($cadastro);
echo "</pre>";

$cadastro["Cliente"]=$pessoa1;
array_push($cadastro,$pessoa2);
array_push($cadastro,$pessoa3);
echo "<pre>";
print_r($cadastro);
echo "</pre>";

 $teste = $cadastro["Cliente"]["Nome"];

 echo "$teste";
?>