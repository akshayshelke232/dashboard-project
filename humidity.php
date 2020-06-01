<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Humidity</title>
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
          <ul class="nav navbar-nav">
            <li><a href="index.php">Dashboard</a></li>
            <li class="active"><a href="humidity.html">Humidity</a></li>
            <li><a href="temp.php">Temperature</a></li>
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
            <h1><span  aria-hidden="true"></span> Humidity</h1>
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
          <li><a href="index.php">Dashboard</a></li>
          <li class="active">Humidity</li>
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
           
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">humidity</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filter Tempreture...">
                      </div>
                </div>
                <br>
             
                    
  <div class="card-body">

    <div class="table-responsive">
        <?php
    $conn=mysqli_connect("localhost","root","","adminpnl");
           $query="select * from humidity";
            $query_run= mysqli_query($conn,$query);
        
        ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            
            <th> humidity</th>
            <th>Date </th>
           
           

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
            
            <td> <?php  echo $row['humidity'];
 ?></td>
            <td> <?php echo $row['date']; ?></td>
           
           
           
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

          </div>              </div>
              </div>

        
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
  </body>
</html>
