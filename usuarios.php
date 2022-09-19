<?php include "cabecalho.php";?>


<table >
<thead>
    <tr>
        <td> ID</td>
        <td> Clientes</td>
        <td> e-mail</td>
        <td> </td>
        <td> </td>
    </tr>
        </thead>
<tbody>


<?php

for($i=0;$i<10;$i++){



    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td>Nome <?php echo $i; ?></td>
        <td>E-mail <?php echo $i; ?></td>
        <td><a class="btn btn-warning">Editar</a></td>
        <td><a class="btn btn-ganger">Excluir</a></td>
    </tr>

    <?php

}
?>
</tbody>
</table>

<?php include "rodape.php"; ?>