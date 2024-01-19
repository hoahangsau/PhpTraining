<form method="post" action="Lab5.2.php">
    Nhập ngày sinh nhật tiếp theo của bạn: <input type="date" name="birthday">
    <input type="submit" name="submit" value="Nhập">
</form>

<?php
if (isset($_POST["submit"])) {
    $birthday = isset($_POST["birthday"]);
    $birthday=strtotime($_POST["birthday"]);
    $today = time();
    $difference = $birthday - $today;
    $difference2 = intval($difference / 86400);
    if ($difference >= 0) {
        echo "Sinh nhật bạn sẽ đến trong $difference2 ngày";
    } else {
        echo "Hãy nhập ngày sinh nhật sắp tới, không phải là sinh nhật đã qua ";
    }
}
?>
