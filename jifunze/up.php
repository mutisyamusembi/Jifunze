<?php include 'filesLogic.php';?>
<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>TEACHER </title>

    <style> body {
                background-image: url("images/bg-01.jpg");
                background-size: cover;
        }
         </style>
  </head>
<!--
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="teachdash.php">Jifunze</a>
    <a class="nav-link"  href="stddash.php?logout='1'" >Sign out</a>
</nav>
-->
<body>
    <div class="container">
      <div class="row">

        <form action="up.php" method="post" enctype="multipart/form-data" >
          <p></p>
            <h3>Upload File</h3>
            <div class="custom-file">
          <input type="file" name="myfile"> <br>
            </div>
          <button class="btn btn-info" type="submit" name="save">Upload</button>
             <a class="btn btn-outline-primary" href="teachdash.php">Dashboard</a>
        </form>
   
        </div>
       
    </div>
  </body>
</html>
