 <?php
include('includes/header.php'); 
 //include('includes/navbar.php'); 
?>

<div class="container">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h2 class="m-0 font-weight-bold text-primary">Edit User details
            
    </h2>
  </div>

   
  <div class="card-body">
      
<?php 
 
$conn=mysqli_connect("localhost","root","","adminpnl");
if(isset($_POST['edit_btn']))
{
    $id=$_POST['edit_id'];
      
    $query ="select * from register where id='$id' ";
    $query_run =mysqli_query($conn,$query);
    
    foreach($query_run as $row)
    {
       ?> 
      


       <form action="code.php" method="POST">
        
           <input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>  
                <input type="email" name="email" 
                       value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $row['password'] ?>"  class="form-control" placeholder="Enter Password">
            </div>
         <a href="register.php" class="btn btn_danger">Cancel</a>
            <button class="btn btn-primary" type="submit" name="updatebtn">Update</button>
        
        
      </form>
  <?php
    }
}
?>
       
      
    </div>
    </div>
</div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>