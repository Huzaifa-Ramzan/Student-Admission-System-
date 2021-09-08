<?php 
include"header.php";
?>
<div class="container bg-white p-3">
    <div class="row">
        <div class="col-8 mx-auto bg-light p-5">
            <h4 class=""><ul>Update Data</ul></h4>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="form mb-5">
                <div class="form-group">
                    <label for="" class="">Id :</label>
                    <input type="text" class="form-control" name="sid">
                </div>
                <button class="btn btn-outline-info" name='showbtn'>Show</button>
            </form>
            <?php 
            if(isset($_POST['showbtn'])){
                include'config.php';
                $id=$_POST['sid'];
                $sql="select * from student where sid={$id}";
                $result=mysqli_query($con,$sql) or die('not run');
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
            
            ?>

            <form class="form mt-5" action="updatedata.php" method="post">
                <div class="form-group">
                    <label for="" class="">Name</label>
                    <input type="hidden" class="form-control" name="sid" value="<?php echo $row['sid'];?>">
                    <input type="text" class="form-control" name="sname" value="<?php echo $row['sname'];?>">
                </div>
                <div class="form-group">
                    <label for="" class="">City</label>
                    <input type="text" class="form-control" name="saddress" value="<?php echo $row['saddress'];?>">
                </div>
                <div class="form-group">
                    <Label>Class</Label>  
                    <?php 
                    $sql1='select * from studentclass';
                    $result1=mysqli_query($con,$sql1);
                    if(mysqli_num_rows($result1)>0){
                        echo' <select name="class" id="">';
                        while($row1=mysqli_fetch_assoc($result1)){
                            if($row['sclass']==$row1['cid']){
                                $select='selected';

                            }
                            else{
                                $select='';
                            }
                            echo"
                            <option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
                        }
                        echo' </select>';
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="">Phone_no</label>
                    <input type="text" class="form-control" name="sphone" value="<?php echo $row['sphone'];?>">
                </div>
                
                <button class="btn btn-outline-info">Update</button>
            </form>
            <?php 
            }
        } 
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