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
$pass = $_POST['pass'];
$sql="INSERT INTO user (Email,Password) VALUES ('$Email','$pass')";
if(!mysqli_query($con,$sql))
{
    echo'<script type="text/javascript">alert("data not inserted");</script>';  
}
else{
    echo'<script type="text/javascript">alert("data inserted");</script>';
    header("refresh:2; url=user.html");
}

?>