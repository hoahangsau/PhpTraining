<html>
<body>
<h2>Login</h2>
<form method ="post" action = "Lab3.1.php">
Username:<input type ="text" name="name" required><br>
Password: <input type ="password" name="password" required><br>
        <input type ="submit" name="login" value="Login">
</body>
</html>

<?php
//Checked when form is submitted
if(isset($_POST['login'])){
    $username = $_POST['name'];
    $password = $_POST['password'];
    //checked information 
    if($username === 'admin' && $password === '123123')
      echo '<br><div style="font-weight: bold;">Welcome, your username is ' . '"' . $username . '"' .'</div>';
    elseif($username === 'user' && $password === '123456')
      echo '<br><div style="font-weight: bold;">Welcome, your username is ' . '"' . $username . '"' .'</div>';
    else
      echo 'Failed Login';
}
?>
