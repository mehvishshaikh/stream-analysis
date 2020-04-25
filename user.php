<?php
$con = mysqli_connect('localhost','root','');
if(!$con)
{
    echo'not connected to server';
}
if(!mysqli_select_db($con,'practice'))
{
    echo'database not selected';
}
$Email = $_POST['email'];
$password = $_POST['pass'];
$sql = "select * from user where Email = '$Email' and Password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
if ($row['Email'] == $Email && $row['Password'] == $password)
{
    echo'<script type="text/javascript">alert("Login successful!!  Welcome");</script>';
    header("refresh:2; url=index.html");
}
else{
    echo'<script type="text/javascript">alert("check your login credentials");</script>';
    header("refresh:2; url=user.html");
}

?>