<?php
session_start();
$conn=mysqli_connect("localhost","root","","adminpnl");

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['confirmpassword'];
    
    if($password === $cpassword)
    {
        $query="insert into register(username,email,password) values('$username','$email','$password') ";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
    {
        echo "saved";
        $_SESSION['success']="Admin profile added";
        header('Location: index.php');
    }
    else
    {
        $_SESSION['success']="Admin profile not added";
        header('Location: index.php');
 
    }
        
    }
    else
    {
         $_SESSION['success']="password and confirm password does not match";
        header('Location: index.php');
    }
    
}






if(isset($_POST['updatebtn']))
{
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email =$_POST['email'];
    $password = $_POST['password'];
    
    $query ="update register set username=' $username',email='$email',password='$password' where id='$id'";
    echo $query;
    $query_run =mysqli_query($conn,$query);
    if($query_run)
    {
       $_SESSION['success'] = "your data is updated";
        header('Location: users.php');
    }
    else
    {
         $_SESSION['status'] = "your data is not updated";
       header('Location: register.php');
    }
}
if(isset($_POST['submit']))
{
   
    $username = $_POST['username'];
    $email =$_POST['email'];
    $password = $_POST['password'];
    
    $query ="update register set usename=' $username',email='$email',password='$password' where id='$id'";
    $query_run =mysqli_query($conn,$query);
    if($query_run)
    {
       $_SESSION['success'] = "your data is updated";
        header('Location: users.php');
    }
    else
    {
         $_SESSION['status'] = "your data is not updated";
       header('Location: register.php');
    }
}


if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query ="delete from register where id='$id' ";
    $query_run =mysqli_query($conn,$query);
    
    if($query_run)
    {
     // $_SESSION['success'] = "your data is deleted";
         header('Location: users.php');
    }
    else
    {
       //  $_SESSION['status'] = "your data is not deleted";
         header('Location: register.php');  
    }
}








?>