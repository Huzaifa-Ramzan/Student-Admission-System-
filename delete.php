<?php 
include"header.php" 
?>

<div class="container bg-white p-5  ">
                <div class="row">
                    <div class="col-6 mx-auto">
                        <h4 class="text-center pb-3"><u>Delete</u></h4>
                     <form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="form">
                     <div class="form-group">
                            <label for="" class="control-lable" >Id :</label>
                            <input type="text" class=" form-control my-3 " name="sid">
                        </div>
                        <button class="btn btn-outline-info" type="submit" name="deletebtn">Delete</button>
                     </form>
                     <?php
                        if(isset($_POST['sid'])){
                                                        
                            $id=$_POST['sid'];
                            include'config.php';
                            $sql="DELETE FROM student where sid={$id}";
                            $result=mysqli_query($con,$sql)or die('not run');
                            header('Location:http://localhost/student_crud/index.php');
                            mysqli_close($con);

                        }
                        ?>
                        
                    </div>
                </div>
            </div>
            
        </div>

        </div>
    </div>
</body>
</html>