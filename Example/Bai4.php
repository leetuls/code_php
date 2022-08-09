<?php echo 'VD2:'
?>
<br>
<link rel="stylesheet" href="public/css/custom.css" type="text/css">
<?php for($i=-1;$i<=10;$i++) {
echo '<table class="table">';
echo '<tr>';
if($i == -1){
echo '<td> i</td>';
echo '<td> i^2 </td>';
}
if($i >-1) {
echo '<td>'. $i. '</td>';
echo '<td>'.pow($i,2).'</td>';
echo '</tr>';
echo '</table>';
}
}
?>