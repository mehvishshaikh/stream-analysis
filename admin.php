<?php
$con = mysqli_connect('localhost','root','');
if(!$con)
{
    echo'not connected to server';
}
if(!mysqli_select_db($con,'project'))
{
    echo'database not selected';
}
$username = $_POST['user'];
$password = $_POST['pass'];
$sql = "select * from admin where Username = '$username' and Password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
if ($row['Username'] == $username && $row['Password'] == $password)
{
    echo'<script type="text/javascript">alert("Login successful!!  Welcome");</script>';
    header("refresh:2; url=table.php");
}
else{
    echo'<script type="text/javascript">alert("Failed to login");</script>';
    header("refresh:2; url=admin.html");
}

?>