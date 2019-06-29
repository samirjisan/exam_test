<?php
include 'Connection.php';
$conn = new Connection;
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $data = array(
        ':username' => $username,
        ':password' => $password,
        ':status' => 1
    );
    $conn->update("INSERT INTO user (username,password,status) VALUES (:username,:password,:status)",$data);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username"><br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Register"><br>
    </form>
</body>
</html>