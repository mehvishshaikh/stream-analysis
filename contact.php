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
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$sql = "INSERT INTO contact (Name,Email,Message) VALUES ('$name','$email','$message')";
if(!mysqli_query($con,$sql))
{
    echo'<script type="text/javascript">alert("data not inserted");</script>';  
}
else{
    echo'<script type="text/javascript">alert("data inserted");</script>';
    header("refresh:2; url=contact.html");
}

?>