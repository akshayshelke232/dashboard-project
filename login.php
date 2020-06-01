<?php

$servername="localhost";
$username="root";
$password="";
$dbname="adminpnl";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['login'])){
    $user=$_POST['user'];       
    $pass=$_POST['pass'];
    $type=$_POST['usertype'];
    $query="SELECT * FROM register WHERE username='$user' and password='$pass' and usertype='$type'" ;
    $result=mysqli_query($conn,$query);
     $x=mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);
    
    if($x>0){
       
            
            echo '<script type="text/javascript" >alert("You are login sucessfully as '.$row['usertype'].'")</script>';
            
    

        if($type=="admin"){
            
           
            
            
            header("Location: index.php");
            
        
            

            
        }else{
        
         
            header("Location: users.php");

 
        }
        
    }
    else
    {
        
         echo '<script type="text/javascript" >alert("username or password incorrect")</script>';
    }
    
}


?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Account Login</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"> Account login</h1>
          </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form id="login" class="well" method="post">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Enter Email" name="user">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="pass">
                  </div>
                <div class="form-group">
                <select class="form-control" id="sel1" name="usertype">
    <option value="admin">admin</option>
    <option value="user">user</option>
   
  </select>
                
                </div>
                
                
                
                  <button type="submit" class="btn btn-default btn-block" name="login">Login</button>
              </form>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright &copy; 2017</p>
    </footer>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
