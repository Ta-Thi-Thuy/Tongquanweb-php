<title> Ứng dụng Product Discount Calculator </title>
<form>
    <input type="text" name="productdescription" placeholder="Product Description">
    <input type="text" name="listprice" placeholder="List Price">
    <input type="text" name="discountpercent" placeholder="Discount Percent">
    <input type="submit" name="sub" value="Submit">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(!empty($_POST['listprice']) && !empty($_POST['productdescription'])){
        $discountAmount = $_POST['listprice']*$_POST['productdescription']*0.1;
        $discountPrice = $_POST['listprice'] - $discountAmount;
        echo "Discount Amount" .$discountAmount ."<br>";
        echo "Discount Price". $discountPrice;
    }else{
        echo "Ban chua nhap du";
    }
}