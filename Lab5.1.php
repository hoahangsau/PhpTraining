<form method="post" action="Lab5.1.php">
    Nhập chuỗi: <input type="text" name="inputString">
    <input type="submit" name="submit"value="Process">


<?php
function Process($string) {
    //Xoa cac ky tu khong phai la so, giu lai dau cham va dau phay
    $newstring = preg_replace('/[^0-9.,]/', '', $string);
    return $newstring;
}

    if (isset($_POST['submit'])){
    $inputString=isset($_POST["inputString"]) ? $_POST["inputString"] :'';
    $outputString=Process($inputString);
    echo"<br>Chuỗi sau khi xử lý: ". $outputString;
    
}

?>


