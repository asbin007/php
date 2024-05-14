<?php
include ('db.php');

$name= $_POST["name"];
$phone=$_POST["contact"];


echo "name is ".$name .$phone;

$sql= "INSERT INTO names(name,phone) VALUES('$name','$phone')"; 
$result=mysqli_query($conn,$sql);
if ($result)
{
    header("Location:index.php");
}

?>  