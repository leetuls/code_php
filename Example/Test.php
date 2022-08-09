<?php
echo "Lee Tu Entertainment";
echo "<Br><Br>";
$x = 3;
$y = 5;
echo "Bài 3_a:";
echo "<br>";
//Phep cong
$result = $x + $y;
echo sprintf("Phep tính %d cộng cho %d là: %d",$x,$y,$result);
echo "<Br>";
//Phep  tru
$result = $x - $y;
echo sprintf("Phep tính %d trừ cho %d là: %d",$x,$y,$result);
echo "<Br>";
//Phep  nhan
$result = $x * $y;
echo sprintf("Phep tính %d nhân cho %d là: %d",$x,$y,$result);
echo "<Br>";
//Phep chia
$result = $x / $y;
echo sprintf("Phep tính %d chia cho %d là: %d",$x,$y,$result);
echo "<Br>";
//Phep chia lay du
$result = $x % $y;
echo sprintf("Phep tính %d chia lấy dư cho %d là: %d",$x,$y,$result);
echo "<Br>";
echo "---------------------------------------------------";
echo "<Br>";
echo "Bài 3_b:";
echo "<br>";
$x = rand(0,100);
$y = rand(0,100);
while($x > $y){
//Phep cong
$result = $x + $y;
echo sprintf("Phep tính %d cộng cho %d là: %d",$x,$y,$result);
echo "<Br>";
//Phep  tru
$result = $x - $y;
echo sprintf("Phep tính %d trừ cho %d là: %d",$x,$y,$result);
echo "<Br>";
//Phep  nhan
$result = $x * $y;
echo sprintf("Phep tính %d nhân cho %d là: %d",$x,$y,$result);
echo "<Br>";
//Phep chia
$result = $x / $y;
echo sprintf("Phep tính %d chia cho %d là: %d",$x,$y,$result);
echo "<Br>";
//Phep chia lay du
$result = $x % $y;
echo sprintf("Phep tính %d chia lấy dư cho %d là: %d",$x,$y,$result);
break;
}
echo "<Br>";
echo "---------------------------------------------------";
echo "<Br>";
echo "Bài 3_c:";
echo "<br>";

if($x % $y == 0){
//Phep cong
$result = $x + $y;
echo sprintf("Phep tính %d cộng cho %d là: %d",$x,$y,$result);
echo "<Br>";
//Phep  tru
$result = $x - $y;
echo sprintf("Phep tính %d trừ cho %d là: %d",$x,$y,$result);
echo "<Br>";
//Phep  nhan
$result = $x * $y;
echo sprintf("Phep tính %d nhân cho %d là: %d",$x,$y,$result);
echo "<Br>";
//Phep chia
$result = $x / $y;
echo sprintf("Phep tính %d chia cho %d là: %d",$x,$y,$result);
echo "<Br>";
//Phep chia lay du
$result = $x % $y;
echo sprintf("Phep tính %d chia lấy dư cho %d là: %d",$x,$y,$result);
}
echo "<Br>";
echo "---------------------------------------------------";

//Tim boi chung nho nhat
echo sprintf("UCLN của %d và %d là:",$x,$y);
echo "<Br>";
$temp = 0;
while($y > 0){
    $x = $x % $y;
    $x = $y;
    $y = $temp;
}
echo $x;
?>