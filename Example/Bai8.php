<?php echo 'VD8:'
?>
<br>
<link rel="stylesheet" href="public/css/custom.css" type="text/css">
<table class = "table">
  <?php for ($i= 2; $i <= 10; $i++) { ?>
    <tr>
    <td>Biểu thức <?= $i ?></td>
    <td>Kết quả</td>
  </tr>
    <?php for ($j= 1; $j <= 10; $j++) { ?>
        <tr>
          <td><?=$i . ' x '. $j . ' = ' ?></td>
          <td><?= $i * $j ?></td>
        </tr>
    <?php }?> 
  <?php }?>

</table>