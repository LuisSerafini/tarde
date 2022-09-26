<?php include "cabecalho.php";?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Produto</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Valor Unitário</th>
      
    </tr>
  </thead>
  <tr>
    <?php
    for($i=0; $i <10; $i++)
    {?>
      <th scope="row"><?php echo $i ;?></th>
      <td >Produto <?php echo $i ;?></td>
      <td>Quantidade <?php echo $i ;?></td>
      <td>Preço Unitário <?php echo $i ;?></td>
      

    </tr>
  </tbody>
    <?php }
    ?>
</table>




<?php include "rodape.php"; ?>