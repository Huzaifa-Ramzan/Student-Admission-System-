
<?php 
$id=$_POST['sid'];
 $stu_name=$_POST['sname'];
$stu_address=$_POST['saddress'];
$stu_class=$_POST['class'];
$stu_phone=$_POST['sphone'];
$con=mysqli_connect('localhost','root','','crud');
$sql="UPDATE student SET sname='{$stu_name}',saddress='{$stu_address}',sclass='{$stu_class}',sphone='{$stu_phone}' WHERE sid={$id}";
$result=mysqli_query($con,$sql) or die('not run');
header('Location:http://localhost/student_crud/index.php');
mysqli_close($con);
?>