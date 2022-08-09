<link rel="stylesheet" href="public/css/custom.css" type="text/css">
<script src='public/js/custom.js'></script>
<script type="text/javascript"></script>
<form name = "ABC" action="Tinh2.php" method="POST">
    <h1>PHÉP TÍNH TRÊN HAI SỐ</h1>
    <h3>Chọn phép tính:
    <?php 
    $kq = 0;
    if(isset($_POST['r1'])){
        echo 'Cộng';
        $kq = $_POST['first'] + $_POST['last'];
    }
    if(isset($_POST['r2'])){
        echo 'Trừ';
        $kq = $_POST['first'] - $_POST['last'];
    }
    if(isset($_POST['r3'])){
        echo 'Nhân';
        $kq = $_POST['first'] * $_POST['last'];
    }
    if(isset($_POST['r4'])){
        echo 'Chia';
        $kq = $_POST['first'] / $_POST['last'];
    }
    ?>
    </h3>
    <label>Số Thứ Nhất: </label>
    <input type="text" name = "first" value="<?=$_POST['first']?>"></input>
    <br>
    <label>Số Thứ Hai: &nbsp;</label>
    <input type="text" name = "last" value="<?=$_POST['last']?>"></input>
    <br>
    <label>Kết quả: &nbsp;</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name = "kq" value="<?=$kq?>"></input>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#" onclick="goBack()"><u>Quay lại trang trước</u></a>
</form>