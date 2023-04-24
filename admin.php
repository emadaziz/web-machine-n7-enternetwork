<!DOCTYPE html>
<html>
    <head><title>admin interface</title></head>
<body>
    <?php
$hostname = 'localhost';
$username = 'root';
$password = '123456789';
$database = 'Machine';
$connect = mysqli_connect($hostname,$username,$password,$database);
$query = "select password from login";
$result = mysqli_query($connect,$query);
$row = mysqli_fetch_assoc($result);

if ($_COOKIE['role'] == 'admin') {
    $FLAG = explode(':',$row['password']);    
    echo $FLAG[1];;
}
else {
    echo 'this interface is admin only';
}

?>
</body>
</html>
