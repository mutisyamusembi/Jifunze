<?php include('serstd.php') ?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <title>JIFUNZE</title>
        <style> body {
                background-image: url("images/bg-01.jpg");
                background-size: cover;
        }
         </style>
    </head>
    <body>
          <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">JIFUNZE</h5>
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="btn btn-outline-primary" href="index.html">Home</a>
        </nav>
      </div>
      <form  method="post" action="stdlg.php">
          <h1 style="text-align:center">LOGIN</h1>
           <?php include('errors.php'); ?>
      <div class="container loginstyle">
              <div  class='jumbotron'>
        <p>
          <input  class="form-control"type = "text" name = "username" placeholder = "Username"><br>

          <input class="form-control" type = "password" name = "password" placeholder = "Password"><br><br>
            <button class="btn btn-primary btn-lg" name = "login_std" ><i class="fa fa-user"></i> Login</button>
</div>
        </div>
        </form>
    </body>

</html>
