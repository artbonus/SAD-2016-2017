<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Laboratory Resource System</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style> 
    body.style
    {
      background-color: #00b5f0;
      background-image: url(images/lala.png);
    }
    .navbar-fixed-top
    {
      height: 50px;
    }

    .navbar-brand
      {
        padding-top: 0;
        padding-left:3;


      }
      .img-size
      {
        width:100%;
        height:50%;
        margin:0;
      }

      .img-responsive
      {
        width:100%;
        height:50%;
        margin:0;
      }


/* Navbar Effects */
.navbar-brand { position: relative; z-index: 2; }

.navbar-nav.navbar-right .login { position: relative; z-index: 2; padding: 4px 20px; margin: 10px auto; transition: transform 0.3s; }
.navbar-nav.navbar-right .signup { position: relative; z-index: 1; padding: 4px 20px; margin: 10px auto; transition: transform 0.3s; }

.navbar .navbar-collapse { position: relative; overflow: hidden !important; }
.navbar .navbar-collapse .navbar-right > li:last-child { padding-left: 22px; }

.navbar .nav-collapse { position: absolute; z-index: 1; top: 0; left: 0; right: 0; bottom: 0; margin: 0; padding-right: 120px; padding-left: 80px; width: 100%; }
.navbar.navbar-default .nav-collapse { background-color: #f8f8f8; }
.navbar.navbar-inverse .nav-collapse { background-color: #222; }
.navbar .nav-collapse .navbar-form { border-width: 0; box-shadow: none; }
.nav-collapse>li { float: right; }

.btn.btn-circle { border-radius: 50px; }
.btn.btn-outline { background-color: transparent; }

.navbar-nav.navbar-right .btn:not(.collapsed) {
    background-color: #00b5f0;
    border-color: #00b5f0;
    color: rgb(255, 255, 255);
}

.navbar.navbar-default .nav-collapse,
.navbar.navbar-inverse .nav-collapse {
    height: auto !important;
    transition: transform 0.3s;
    transform: translate(0px,-50px);
}
.navbar.navbar-default .nav-collapse.in,
.navbar.navbar-inverse .nav-collapse.in {
    transform: translate(0px,0px);
}


@media screen and (max-width: 767px) {
    .navbar .navbar-collapse .navbar-right > li:last-child { padding-left: 15px; padding-right: 15px; } 
    
    .navbar .nav-collapse { margin: 7.5px auto; padding: 0; }
    .navbar .nav-collapse .navbar-form { margin: 0; }
    .nav-collapse>li { float: none; }
    
    .navbar.navbar-default .nav-collapse,
    .navbar.navbar-inverse .nav-collapse {
        transform: translate(-100%,0px);
    }
    .navbar.navbar-default .nav-collapse.in,
    .navbar.navbar-inverse .nav-collapse.in {
        transform: translate(0px,0px);
    }
    
    .navbar.navbar-default .nav-collapse.slide-down,
    .navbar.navbar-inverse .nav-collapse.slide-down {
        transform: translate(0px,-100%);
    }
    .navbar.navbar-default .nav-collapse.in.slide-down,
    .navbar.navbar-inverse .nav-collapse.in.slide-down {
        transform: translate(0px,0px);
    }
}
/* ADDED FONTS BESHI */
@font-face {
  font-family: 'NexaBold';
  src: url('fonts/hinted-NexaBold.eot?') format('eot'), 
  url('fonts/hinted-NexaBold.woff') format('woff'), 
  url('fonts/hinted-NexaBold.ttf') format('truetype');
  font-weight: bold;
  font-style: normal;
}

@font-face {
  font-family: 'NexaLight';
  src: url('fonts/hinted-NexaLight.eot?') format('eot'), 
  url('fonts/hinted-NexaLight.woff') format('woff'), 
  url('fonts/hinted-NexaLight.ttf') format('truetype');
  font-weight: 300;
  font-style: normal;
}



    </style>
  </head>
  <body class = "style">

<!-- navbar for sign in -->
    <nav class="navbar navbar-default">
      <div class="container" style="background-image:url(images.lalala.png);">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
           <img src="images/logoo.png">
          </a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" style="font-family: NexaLight">Home</a></li>
            <li><a href="#" style="font-family: NexaLight">Laboratory</a></li>
            <li><a href="#" style="font-family: NexaLight">Maintenance</a></li>
            <li><a href="#" style="font-family: NexaLight">Inventory</a></li>
            <li><a href="#" style="font-family: NexaLight">About</a></li>
            <li>
              <div class="btn-group" role="group" aria-label="...">
                <a class="btn btn-default btn-outline signup"  data-toggle="collapse" href="labrs/signup.php" aria-expanded="false" aria-controls="nav-collapse2" style="font-family: NexaBold">Sign Up</a>
                <a class="btn btn-default btn-outline login"  data-toggle="collapse" href="#nav-collapse2" aria-expanded="false" aria-controls="nav-collapse2" style="font-family: NexaBold">Log in</a>
              </div>
            </li>
          </ul>
          <div class="collapse nav navbar-nav nav-collapse" id="nav-collapse2">
            <form class="navbar-form navbar-right form-inline" role="form">
              <div class="form-group">
                <label class="sr-only" for="Email">Email</label>
                <input type="email" class="form-control" id="Email" placeholder="Email" autofocus required />
              </div>
              <div class="form-group">
                <label class="sr-only" for="Password">Password</label>
                <input type="password" class="form-control" id="Password" placeholder="Password" required />
              </div>
              <button type="submit" class="btn btn-success">Log In</button>
            </form>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
  


    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>