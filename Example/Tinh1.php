<link rel="stylesheet" href="public/css/custom.css" type="text/css">
<form name = "ABC" action="Tinh2.php" method="POST">
    <h1>PHÉP TÍNH TRÊN HAI SỐ</h1>
    <h3>Chọn phép tính:</h3>
    <input type="radio" name="r1">Cộng</input><input type="radio" name="r2">Trừ</input><input type="radio" name="r3">Nhân</input><input type="radio" name="r4">Chia</input>
    <br>
    <label>&nbsp;Số Thứ Nhất: </label>
    <input type="text" name = "first"></input>
    <br>
    <label>&nbsp;Số Thứ Hai: &nbsp;</label>
    <input type="text" name = "last"></input>
    <br>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button name = "btn1" type = "submit" value="Submit" class="indam">Tính</button>
</form>