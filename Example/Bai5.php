<?php
$temp = [];
for ($i=0; $i <= 100; $i++) {
    if($i%2 == 0){
        $temp[] = '<b>'.$i.'</b>';
    }else{
        $temp[] = $i;
    }
}
echo implode(', ',$temp);

?>