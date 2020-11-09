
<title> Future Value Calculator</title>
<form method="post">
    <input type="text" name="tien" placeholder="Inventment Amount ">
    <input type="text" name="lai" placeholder="Yearly Interest Rate" >
    <input type="text" name="nam" placeholder="Number of Years">
    <input type="submit" name="submit" value="Calculate">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if (!empty($_POST['tien']) && !empty($_POST['lai']) && !empty($_POST['nam'])){
        $tuonglai = ($_POST['tien']+($_POST['tien']*$_POST['lai']));
        $tuonglai = $tuonglai * $_POST['nam'];
        echo "Gia tri tuong lai" . $tuonglai;
    }else{
        echo "ban chua nhap du";
    }
}
