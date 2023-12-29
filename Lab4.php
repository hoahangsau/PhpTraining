<html>
<head>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    echo'<div style="font-family: sans-serif; font-size: 20px; font-weight: bold;">Upload an image</div>';
?>
    <form action="Lab4.php" method="post" enctype="multipart/form-data">
        <input type="file" name="hinhanh">
        <input type="submit" name="submit" value="Upload Image">
    </form>
<?php

//Upload image
if(isset($_POST['submit']) && ($_POST['submit'])){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]); 
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
          echo '<script>alert("Invalid file type")</script>'; }
          else {
            if(move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)){
            echo "Upload successful";   
            echo "<br><img src='". $target_file ."'>";      
        }else{
            echo "Upload failed";}
    }
}
?>
</body>
</html>
