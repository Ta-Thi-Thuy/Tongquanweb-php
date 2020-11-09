<form method="post">
    <input type="number" name="number" placeholder="Enter a number ">
    <input type="submit" value="submit">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] = $_POST) {
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        if (!is_numeric($number)) {
            echo "Mời bạn nhập một số";
        } else {
            echo "Số " . $number . " thành chữ là: ";
            if ($number >= 0 && $number < 10) {
                echo unitRow($number);
            }
            if ($number >= 10 && $number <20){
                echo dozens($number);
            }
            if ($number >=20 && $number <100){
                echo numberDozen($number);
            }
        }
    }
}
function unitRow($number)
{
    switch ($number) {
        case 0:
            return "zero";
        case 1:
            return "one";
        case 2:
            return "two";
        case 3:
            return "three";
        case 4:
            return "four";
        case 5:
            return "five";
        case 6:
            return "six";
        case 7:
            return "seven";
        case 8:
            return "eignt";
        case 9:
            return "nine";
    }
}
function dozens($number){
    switch ($number){
        case 10:
            return "ten";
        case 11:
            return "eleven";
        case 12:
            return "twelve";
        case 13:
            return "thirteen";
        case 14:
            return "fourteen";
        case 15:
            return "fifteen";
        case 16:
            return "sixteen";
        case 17:
            return "seventeen";
        case 18:
            return "eighteen";
        case 19:
            return "nineteen";

    }
}




