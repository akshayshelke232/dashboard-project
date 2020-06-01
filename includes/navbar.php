

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
            <li class="active"><a href="index.html">Dashboard</a></li>
           
             <li><a href="humidity.html">Humidity</a></li>
            <li><a href="temp.html">Tempreture</a></li>
            <li><a href="users.html">Users</a></li>
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
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="humidity.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Humidity<span class="badge">#</span></a>
              <a href="temp.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>tempreture<span class="badge">#</span></a>
              <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">#</span></a>
            </div>

            <div class="well" id="one">
              <h4>Tempreture Increased</h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
              </div>
            </div>
            <h4>Humidity Increased</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    40%
            </div>
          </div>
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
                          
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 200 F Today</h2>
                    <h4>Tempreture</h4>
                          
                  </div>
                      
                      <div class="row">
                          
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 199 F Today</h2>
                    <h4>Tempreture</h4>
                          
                  </div>
                      
                </div>
                 </div>
                <div class="col-md-3">
                                   <div class="well dash-box">
                      <div class="row">
                        <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 23% Today</h2>
                    <h4>Humidity</h4>
                  </div>
                      
                      <div class="row">
                          <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 23% Today</h2>
                    <h4>Humidity</h4>
                  </div>
                      
                </div>
                </div>
                
                
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 12</h2>
                    <h4>users</h4>
                  </div>
                </div>
              </div>
              </div>
            </div></div></div></section></body>