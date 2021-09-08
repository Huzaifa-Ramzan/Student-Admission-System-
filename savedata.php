
<?php 
 $stu_name=$_POST['sname'];
$stu_address=$_POST['saddress'];
$stu_class=$_POST['class'];
$stu_phone=$_POST['sphone'];
$con=mysqli_connect('localhost','root','','crud');
$sql="insert into student(sname,saddress,sclass,sphone) values('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result=mysqli_query($con,$sql) or die('not run');
header('Location:http://localhost/student_crud/index.php');
mysqli_close($con);
?>