<?php include "cabecalho.php" ; ?>

<?php
if(isset($_GET["pesquisa"]) && !empty($_GET["pesquisa"]))
{
$dados = file_get_contents("https://reserva.fatectq.edu.br/api/disciplinas/Busca/".urlencode($_GET["pesquisa"]));
$dados = json_decode($dados,true);
}
else
{
$dados = file_get_contents("https://reserva.fatectq.edu.br/api/disciplinas");
$dados = json_decode($dados,true);
}
// echo "<pre>";
// print_r($dados);
// echo "</pre>";

?>


    <div class="row">
    <div class=" col-10 offset-1">
        <div class="card mt-2"><b>Pesquisar Disciplina</b>
            <div class="card-header">

                 <div class="card-body">
                <form action="./disciplinas.php" method="get">
                    <div class="row">
                <div class ="col-3">
                    <a href="#" class="btn btn-success">Nova Disciplina</a> 
                </div>
                <div class ="col-4">
                    <input type="text" class="form-control" name="pesquisa" />
                </div>
                <div class ="col-2"> 
                    <button class="btn btn-primary" type="submit" > Pesquisar
                    </button>
                </div>
                 </div>
                </div>
            </div>
        </form>
    </div>
</div>
<table class="table table-hover table-striped table-dark">
<thead>
<tr>
    <th>ID </th>
    <th>Nome </th>
    <th>Apelido</th>
    <th>Sigla </th>
    <th></th>
    <th></th>
</thead>
<tbody>
    <?php
        for($i=0; $i< count($dados); $i++){
    ?>
<tr>
    <td><?php echo $dados[$i]["disciplinaId"]; ?></td>
    <td><?php echo $dados[$i]["nome"]; ?></td>
    <td><?php echo $dados[$i]["apelido"]; ?></td>
    <td><?php echo $dados[$i]["sigla"]; ?></td> 
    <td>   <a href="./editar_disciplina.php?id=<?php echo $dados[$i]["disciplinaId"]; ?>" class="btn btn-warning">Editar</a></td>
    <td> <a href="#" class="btn btn-danger">Delete</a></td>
</tr>
<?php
        }
        ?>


</tbody>



</table>

    </div>
</div>


<?php include "rodape.php";?>

<!-- 
a tela é dividida em 12 partes 
acessada pela atributo col-XX onde xx pode ser 1 a 12
-->
