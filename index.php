
<?php $conn=mysqli_connect("localhost","root","","adminpnl");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
       <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body >

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Dashboard</a></li>
           
             <li><a href="humidity.php">Humidity</a></li>
            <li><a href="temp.php">Tempreture</a></li>
            <li><a href="users.php">Users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon" aria-hidden="true"></span> Dashboard</h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
             
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3" >
            <div class="list-group">
              <a href="index.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="humidity.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Humidity<span class="badge"></span></a>
              <a href="temp.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>tempreture<span class="badge"></span></a>
              <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge"></span></a>
            </div>

         
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Website Overview</h3>
              </div>
              <div class="panel-body" id="two" >                   
                <div class="col-md-3">
                   
                  <div class="well dash-box">
                      <div class="row">
                          
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span><?php
                       
                        $sqlc1="SELECT MAX(temperature)  as max FROM temp";
                        $query_run1= mysqli_query($conn,$sqlc1);
                        $row1 = mysqli_fetch_assoc($query_run1);
                            
                        
                        $datee=date("m-d-Y");
                        $sqlc2="SELECT MAX(temperature)  as max FROM temp WHERE date='$datee'";
                        $query_run2= mysqli_query($conn,$sqlc2);
                        $row2 = mysqli_fetch_assoc($query_run2);   
                       // echo "Today's Temp:".$row2['max']."<br>";
                        echo "Maximum Temp:".$row1['max']
                        
                        ?></h2>
                    <h4>Tempreture</h4>
                          
                  </div>
                      
                      
                      
                </div>
                 </div>
                <div class="col-md-3">
                                   <div class="well dash-box">
                      <div class="row">
                        <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                         <?php 
                        $sqlc1="SELECT MAX(humidity)  as max FROM humidity";
                        $query_run1= mysqli_query($conn,$sqlc1);
                        $row1 = mysqli_fetch_assoc($query_run1);
                            
                        
                        $datee=date("Y-m-d");
                        $sqlc2="SELECT MAX(humidity)  as max FROM humidity WHERE date='$datee'";
                        $query_run2= mysqli_query($conn,$sqlc2);
                        $row2 = mysqli_fetch_assoc($query_run2);   
                       // echo "Today's Temp:".$row2['max']."<br>";
                        echo "Maximum humidity:".$row1['max']
                        
                        ?>
                          
                          
                          </h2>
                    <h4>Humidity</h4>
                  </div>
                      
                     
                </div>
                </div>
                
                
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php
                       
                        $sqlc="SELECT COUNT(id)  as Total FROM register";
                        $query_run= mysqli_query($conn,$sqlc);
                        $row = mysqli_fetch_assoc($query_run);
                            
                        echo $row['Total'];
                        ?>
                      </h2>
                    <h4>Users</h4>
                  </div>
                </div>
              </div>
              </div>

            
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>
              
              
              
              
               
        
            

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add user Profile 
            </button>
      
      
  </div>
    
  
  <div class="card-body">

    <div class="table-responsive">
        <?php
    $conn=mysqli_connect("localhost","root","","adminpnl");
           $query="select * from register";
            $query_run= mysqli_query($conn,$query);
        
        ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Username </th>
            <th>Email </th>
            <th>Password</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
            <?php
            if(mysqli_num_rows($query_run)>0)
            {
               while($row =mysqli_fetch_assoc($query_run)) 
               {
                    ?>
            
            
            
            
          
     
          <tr>
            <td> <?php echo $row['id'];  ?> </td>
            <td> <?php  echo $row['username'];
 ?></td>
            <td> <?php echo $row['email']; ?></td>
            <td> <?php echo $row['password']; ?></td>
            <td>
                <form action="register_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id'];  ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value=" <?php echo $row['id'];  ?> ">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>
                     <?php
               
               }
            }
            else
            {
                echo " no record found";
            }
            ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Cbroz, &copy; 2019</p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
      
    
  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
       <script src="js/jquery-1.12.4.js"></script>
       <script src="js/jquery-ui.js"></script>
      <script>   
      $(document).ready(function(){  
     
      
        $("table").fadeIn("slow");

 
      });  
</script> 
       <script>
  $( function() {
    $( "#from" ).datepicker();
  } );
            $( function() {
    $( "#to" ).datepicker();
  } );
  </script>
  </body>
</html>
