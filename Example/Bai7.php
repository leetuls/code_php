<label for="cars">Chọn năm: </label>
<?php 
$startYear = 1900;
$currentYear = date('Y');
?>
<select name="cars" id="cars">
<?php for ($i=$startYear; $i <= $currentYear; $i++) { 
        # code...
?>
  <option value="volvo"><?=$i?></option>

<?php } ?>
</select>