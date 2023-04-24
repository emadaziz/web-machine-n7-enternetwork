<!DOCTYPE html>
<html>
<head>
    <title>entering network</title>
</head>
<body>
    <?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '123456789';
    $database = 'Machine';
$connect = mysqli_connect($hostname,$username,$password,$database);

if (isset($_POST['sub'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $query = "select * from login where username='$user' and password='$pass'";
    $result = mysqli_query($connect,$query);
    $row = mysqli_fetch_assoc($result);
    $role = 'admin';
    $role = urlencode(base64_encode(md5($role)));
    $cookie = $row['username'].':'.$row['password'];
    $cookie = base64_encode(password_hash($cookie,2));
    setcookie('user',$cookie, time()+10000,'/');
    setcookie('role',$role,time()+10000,'/');
}

?>
<center>
<form action="" method="POST">
    username: <input type="text" name="user">
    <br>
    password: <input type="password" name="pass">
    <br>
    <input type="submit" name="sub" value="SEND">
</form>
</center>

</body>
<!DOCTYPE html>
<html>
<head>
    <title>entering network</title>
</head>
<body>
    <?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '123456789';
    $database = 'Machine';
$connect = mysqli_connect($hostname,$username,$password,$database);

if (isset($_POST['sub'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $query = "select * from login where username='$user' and password='$pass'";
    $result = mysqli_query($connect,$query);
    $row = mysqli_fetch_assoc($result);
    $role = 'admin';
    $role = urlencode(base64_encode(md5($role)));
    $cookie = $row['username'].':'.$row['password'];
    $cookie = base64_encode(password_hash($cookie,2));
    setcookie('user',$cookie, time()+10000,'/');
    setcookie('role',$role,time()+10000,'/');
}

?>
<center>
<form action="" method="POST">
    username: <input type="text" name="user">
    <br>
    password: <input type="password" name="pass">
    <br>
    <input type="submit" name="sub" value="SEND">
</form>
</center>

</body>
<!DOCTYPE html>
<html>
<head>
    <title>entering network</title>
</head>
<body>
    <?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '123456789';
    $database = 'Machine';
$connect = mysqli_connect($hostname,$username,$password,$database);

if (isset($_POST['sub'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $query = "select * from login where username='$user' and password='$pass'";
    $result = mysqli_query($connect,$query);
    $row = mysqli_fetch_assoc($result);
    $role = 'admin';
    $role = urlencode(base64_encode(md5($role)));
    $cookie = $row['username'].':'.$row['password'];
    $cookie = base64_encode(password_hash($cookie,2));
    setcookie('user',$cookie, time()+10000,'/');
    setcookie('role',$role,time()+10000,'/');
}

?>
<center>
<form action="" method="POST">
    username: <input type="text" name="user">
    <br>
    password: <input type="password" name="pass">
    <br>
    <input type="submit" name="sub" value="SEND">
</form>
</center>

</body>
</html>
<?php mysqli_close($connect) ?>
