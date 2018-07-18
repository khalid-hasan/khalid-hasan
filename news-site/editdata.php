<?php
session_start();
require 'config.php';
$head=$_POST['heading_edit'];
$data=$_POST['newsbody_edit'];
$id = $_SESSION['id'];
$uri= "edit.php?id=$id";

$statement="UPDATE test SET heading= '$head' , summertext= '$data' where id= $id";

if(mysqli_query($conn,$statement))
{
    header("location: $uri");
}
else
    mysqli_error($conn);

mysqli_close($conn);
 ?>