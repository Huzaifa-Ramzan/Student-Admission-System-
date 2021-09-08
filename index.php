<?php 
include'header.php';
?>

          <div class="container bg-white">
            <div class="row">
                <div class="col-10 mx-auto">
                    <h4 class="p-3">All Records</h4>
                    <?php 
                    $con=mysqli_connect('localhost','root','','crud');
                    $sql="select * from student join studentclass on sclass=cid";
                    $result=mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)>0){
                    ?>
            <table class="table table-bordered bg-light mb-5 text-center">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Class</th>
                    <th>Phone</th>
                    <th>Controls</th>
                </thead>
                <tbody>
                    <?php 
                    while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td name='' ><?php echo $row['sid'];?></td>
                        <td name='' ><?php echo $row['sname'];?></td>
                        <td name='' ><?php echo $row['saddress'];?></td>
                        <td name='' ><?php echo $row['cname'];?></td>
                        <td name='' ><?php echo $row['sphone'];?></td>
                        <td name=''><a href="edit.php?id=<?php echo $row['sid'];?>" class="btn btn-info ml-1 px-4 " name="">Edit</a>
                        <a href="deletedata.php?id=<?php echo $row['sid'];?>" name="" class="btn btn-danger ml-4 mr-0 px-3">Delete</a></td>
                        
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            <?php }?>
                </div>
            </div>
          </div>
           </div>
       </div>
   </div>
    
</body>
</html>