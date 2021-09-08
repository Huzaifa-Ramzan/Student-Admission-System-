<?php include 'header.php'; ?>
<div class="container ">
    <div class="row">
        <div class="col-10 mx-auto ml-auto p-5">
        <div id="main-content">
    <h2>Add New Record</h2>
    
    <form class="form-inline" action="savedata.php" method="post">
        <div class="form-group m-5">
            <label>Name</label>
            <input type="text" name="sname" class="form-control mx-3" />
       
            <label>Address</label>
            <input type="text" name="saddress"class="form-control mx-3"/>
        </div>
        
        <div class="form-group m-5">
            <label>Class</label>
            <select name="class" class="form-control ml-3 mr-5">
            
            <option value="" selected disabled>Select Class</option>
            <?php
            $con=mysqli_connect('localhost','root','','crud') or die('not connect');
            $sql='select * from studentclass';
            $result=mysqli_query($con,$sql) or die('not run');
            while($row=mysqli_fetch_assoc($result)){
            ?>
                <option value="<?php echo $row['cid'];?>"> <?php echo $row['cname'];?></option>
                <?php }?>
            </select>
      
            <label class="ml-5">Phone</label>
            <input type="text" name="sphone" class="form-control mx-3"/>
        </div>
        <input class="submit btn btn-info mx-5" type="submit" value="Save" />
    </form>
</div>
        </div>
    </div>
</div>
</div>
</body>
</html>
