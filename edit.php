<?php include 'header.php'; ?>
<div class="container ">
    <div class="row">
        <div class="col-10 mx-auto ml-auto p-5">
        <div id="main-content">
    <h2>Edit Record</h2>
    <?php
            $con=mysqli_connect('localhost','root','','crud') or die('not connect');
            $id=$_GET['id'];
            $sql="select * from student where sid={$id}";
            $result=mysqli_query($con,$sql) or die('not run');
            if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
            ?>
    <form class="form-inline" action="updatedata.php" method="post">
        <div class="form-group m-5">
            <label>Name</label>
            
        <input type="hidden" name="sid" value="<?php echo $row["sid"];?>"/>
            <input type="text" name="sname" class="form-control mx-3" value='<?php echo $row['sname'];?>' />
       
            <label>Address</label>
            <input type="text" name="saddress" class="form-control mx-3" value='<?php echo $row['saddress'];?>'/>
        </div>
        
        <div class="form-group m-5">
            <label>Class</label>
            <?php
            
            $sql1='select * from studentclass';
            $result1=mysqli_query($con,$sql1) or die('not run');
            if(mysqli_num_rows($result1)>0){
                echo'
                <select name="class" class="form-control ml-3 mr-5" >
                
                <option value="" selected disabled>Select Class</option>';
            
            while($row1=mysqli_fetch_assoc($result1)){
            if($row['sclass']==$row1['cid']){

                $select='selected';
            }
            else{
                $select='';
            }
            echo"<option {$select} value=' {$row1['cid']}'> {$row1['cname']}</option>";
            }
            echo"</select>";
            }
            ?>
                
            

        </div>
       
        <div class="form-group">
            <label class="ml-3">Phone</label>
            <input type="text" name="sphone" class="form-control mx-3" value="<?php echo $row["sphone"];?>"/>
           
          
        </div>
        <input class="submit btn btn-info mx-5" type="submit" value="Update" />
    </form>
    <?php }
    }?>
</div>
        </div>
    </div>
</div>
</div>
</body>
</html>
