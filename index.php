<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bem Vindo Programação Web Tarde</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        
        echo "Minha mensagem com atualização do Commit<br/>";
        if(10>12){ 
        
        echo "Meu nome";
        echo "<script>";
        echo "alert('Teste')";
        echo "</script>";
        }else{
            echo "Condição Falsa !";
        }
           

$nome = "Luis Fernando";
$idade ="41";
$altura ="1.81";
$estadoCivil =" solteiro";

$prova1 =8;
$prova2 = 7.5;
$soma = $prova1 + $prova2;
$media = $soma / 2;

$multiplicacao = $prova1 * $prova2;
$subtracao = $prova1 / $prova2;
CONST NOMECOMPLETO = "LUIS FERNANDO SERAFINI";
echo "<br /><br /><br /><br /><br /><br />";

echo NOMECOMPLETO;
echo "<br /><br /><br /><br /><br />";

$faltas = 21;
if($media >= 6 && $faltas <= 20){
    echo "Aprovado com media  ";
    echo $media;
}else {
    echo "Reprovado";
}

            #para comentarios
            // comentario de uma linha 
            /*
            varias linhas
            */
            /*
!= diferente
== igual
> maior 
< menor
>= maior igual
<= menor igual
=== mesmo conteudo e mesmo tipo
            */


            $valor = 10;
            #valor + valor + 5;
            $valor += 5;
            $valor -= 7;
            $valor *= 2;
            $valor /= 1;

            #incremento de laço de repetição
            $valor +=1;
echo "<br /><br /><br /><br /><br />";
            #resto da divisão (MOD)
            $resto = 4 % 2;
            if ($valor % 2 == 0){
                echo "Par.";
            }else {
                echo "Impar." . "<br />";
            }

            //Incremento e decremento em 1 em 1
            $cont = 0;
            $cont++;
            $cont--;

            //repetição
            do{
                //faça
                $cont++;
                echo $cont . "<br />";
            }while($cont < 10 );
echo "<br /><br /><br /><br /><br />";
            while ($cont > 0 ){
                //faça
                $cont--;
                echo $cont . "<br />";
            }
echo "<br /><br /><br /><br /><br />";

                for ($i = 0; $i < 10; $i++)
                {
                    echo "<h2>For i:" .$i. "</h2>";
                }
                echo "<br /><br /><br /><br /><br>";

                for ($i = 1; $i <= 5197; $i++)
                {

                    if($i % 2 == 0){
                        echo "\t" . $i ."\t" . " Par".  "<br />";
                    
                }
                else {
                        echo "\t" . $i ."\t" . " Impar ". "<br />";
                }
            }

        ?>

        <h1>Bem Vindo Programação Web Tarde</h1><br/>
        <img src="./imagens/baixados.jpg">

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script>
            document.write("<br/>"+"Olá alunos !");
        </script>
    </body>
</html>