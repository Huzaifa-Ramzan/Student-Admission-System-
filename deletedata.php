<?php
$id=$_GET['id'];
include'config.php';
$sql="DELETE FROM student where sid={$id}";
$result=mysqli_query($con,$sql);
header('Location:http://localhost/student_crud/index.php');
mysqli_close($con);
?>