<?php include('serteach.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
     <?php include('errors.php'); ?>
<form method="post" action="teachreg.php" enctype="multipart/form-data">
    <div class="container jumbotron">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputFirstname"> Name</label>
      <input type="text"  name ="name" class="form-control" id="inputFirstname" placeholder="Name" value="<?php echo $name; ?>" required>
    </div>
    <div class="form-group col-md-6">
        <label for="inputuname">Username</label>
        <input type="text" name="username" class="form-control" id="inputuname" placeholder="Username" value="<?php echo $username; ?>" required>
    </div>
  </div>
        <div class="form-row">
             <div class="form-group col-md-6">
                   <label for="inputmail">Email</label>
                 <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" id="inputmail" placeholder="Email" value="<?php echo $email; ?>" required>
            </div>
        </div>
        <div class="form-row">
             <div class="form-group col-md-12">
                   <label for="inputdesc">Brief Description</label>
                 <textarea type="email" name="brief" class="form-control" id="inputdesc" placeholder="Provide a brief description " value="<?php echo $brief; ?>" required></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
      <label for="inputEmail">Password</label>
      <input type="password" class="form-control" name="password_1" id="inputEmail" placeholder="Password" required>
            </div>
             <div class="form-group col-md-6">
      <label for="inputfile">Upload Photo</label>
       <div class="custom-file">
          <input type="file" name="myfile" required> <br>
            </div>
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6" >
    <label for="inputconf">Confirm password</label>
    <input type="password" class="form-control" id="inputconf"  name="password_2"placeholder="Confirm Password" required>
        </div>
         <div class="form-group col-md-6" ><p>    </p>
        <button type="submit" class="btn btn-primary" name="reg_teach" style="margin-left:200px">Create Account</button>
            </div>
              </div>
    </div>
</form>
</body>
</html>
