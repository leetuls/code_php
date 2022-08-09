<?php echo 'VD6:'
?>
<br>
<link rel="stylesheet" href="public/css/custom.css" type="text/css">
<?php for($i=-1;$i<=100;$i++) {
echo '<table class="table">';
echo '<tr>';
if($i == -1){
echo '<td><b> STT </b></td>';
echo '<td><b> Tên Sách </b></td>';
echo '<td><b> Nội dung sách </b></td>';
}
if($i >-1) {
echo '<td>' .$i. '</td>';
echo '<td>'.'Tên sách '. $i .'</td>';
echo '<td>'.'Nội dung sách '. $i .'</td>';
echo '</tr>';
echo '</table>';
}
}
?>