<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sign Up</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <style>
          .form-control { margin-bottom: 10px; }
          .btn {background-color:#00b5f0; border-color: #00b5f0;}

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
        .header
          {
            background-image:url("images/panel_background.png");
            background-attachment: fixed;
            background-color: #00b5f0;
          }

      </style>
  </head>
  <body>
    <div class="panel panel-default header">
      <div class="panel-body">
     <a class="navbar-brand" href="#">
            <img alt="Brand" src="images/logo2.png">
      </div>
    </div>

 
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            <legend><h3 style="font-family: NexaBold; color:#00b5f0;"> Sign Up </h3></legend>
            <form action="#" method="post" class="form" role="form">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="firstname" placeholder="First Name" type="text"
                        required autofocus />
                </div>
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                </div>
            </div>
            <input class="form-control" name="studno" placeholder="Student No." type="text" />
            <label for="" style="font-family:NexaBold; color:#00b5f0;"> Course </label>
              <div class="pull-right" style="margin-right: 40px;">
                  <label class="radio-inline" style="margin-right: 40px;">
                    <input type="radio" name="course" id="inlineCheckbox1" value="bsit" />
                    BSIT
                  </label>
                  <label class="radio-inline" style="margin-right: 40px;">
                    <input type="radio" name="course" id="inlineCheckbox2" value="bscs" />
                    BSCS
                  </label>
              </div>
            <input class="form-control" name="section" placeholder="Section" type="text" required />
            <input class="form-control" name="enteremail" placeholder="Enter Email" type="email" />
            <input class="form-control" name="contactno" placeholder="Contact No." type="text" />
            <input class="form-control" name="password" placeholder="New Password" type="password" />
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit" style="font-family:NexaBold">
                Sign up</button>
            </form>
        </div>
    </div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>