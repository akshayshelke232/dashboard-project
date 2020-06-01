<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Parameter</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/jquery-ui.css" rel="stylesheet">
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
          <ul class="nav navbar-nav">
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="humidity.php">Humidity</a></li>
            <li class="active"><a href="temp.php">Temperature</a></li>
            <li><a href="users.php">Users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome</a></li>
            <li><a href="login.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span aria-hidden="true"></span>Temperature<small> </small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
            <!--  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
             <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>
                <li><a href="#">Add Post</a></li>
                <li><a href="#">Add User</a></li>
              </ul>-->
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.php">Dashboard</a></li>
          <li class="active">Temperature</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="humidity.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Humidity <span class="badge"></span></a>
              <a href="temp.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Temperature<span class="badge"></span></a>
              <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge"></span></a>
            </div>

            
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Temperature</h3>
              </div>
              <div class="panel-body">
                  <form action="temp.php" method="post">
                  <div class="form-group">
                  <label class="col-lg-2 control-label">from</label>
                   
                   
                   <input type="text" name="from-date" id="from" >
              
                  
                  </div>
                   <div class="form-group">
                  <label class="col-lg-2 control-label">to</label>
                  
                   
                   <input type="text" name="to-date" id="to">
                  
                  
                  </div>
                   <div class="form-group">
                  <label class="col-lg-2 control-label"></label>
                  
                   
                   <input type="submit" name="submit" class="btn btn-primary">
                
                  
                  </div>
                      </form>
                  <?php 
                   $conn=mysqli_connect("localhost","root","","adminpnl");
                  if(isset($_POST['submit']))
                  {
                     
                       $from=date('Y.m.d');
                      $from=$_POST['from-date'];
                         $to=date('Y.m.d');
                      $to=$_POST['to-date'];
                    
                      if($from !="" and $to !="")
                      {
                         $query11 ="select * from temp where date='$from' and date='$to'";
                          $d= mysqli_query($conn,$query11) or die('error');
                          if(mysqli_num_rows($d)>0)
                             {
                                while($row = mysqli_fetch_assoc($d))
                                {
                                   
                                    $t=$row['temperature'];
                                       $date=date('d.m.Y'); $date=$row['date'];
                                    $time=$row['time'];
                                    ?>
                        
                          <tr>
                              <td><?php echo $t; ?></td>
                               <td><?php echo $date; ?></td>
                               <td><?php echo $time; ?></td>
                           </tr>
                  <?php
                                    
                                }
                             }
                          
                          else{
                              
                              
                              ?>
                  
                  
                        <tr>
                            <td>not found</td>
                  
                  
                  
                  
                       </tr>
                  <?php
                          }
                          
                      }
                      
                  }
                  
    
                  
                  ?>
                
             
                    
  <div class="card-body">

    <div class="table-responsive">
        <?php
    $conn=mysqli_connect("localhost","root","","adminpnl");
           $query="select * from temp";
            $query_run= mysqli_query($conn,$query);
        
        ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            
            <th> Temperature</th>
            <th>Date </th>
            <th>Time</th>
           

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
            
            <td> <?php  echo $row['temperature'];
 ?></td>
            <td> <?php echo $row['date']; ?></td>
            <td> <?php echo $row['time']; ?></td>
           
           
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
  $( function() {
    $( "#from" ).datepicker();
  } );
            $( function() {
    $( "#to" ).datepicker();
  } );
  </script>
  </body>
</html>
