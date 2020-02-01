<?php
session_start();

// initializing variables
$username = "";
$name = "";
$brief = "";
$email = "";

$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'jifunze');

// REGISTER Teacher
if (isset($_POST['reg_teach'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $brief = mysqli_real_escape_string($db, $_POST['brief']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array
if (empty($name)) { array_push($errors, "Name is required"); }
if (empty($username)) { array_push($errors, "Username is required"); }
if (empty($brief)) { array_push($errors, "Description is required"); }
if (empty($email)) { array_push($errors, "Email is required"); }
if (empty($password_1)) { array_push($errors, "Password is required"); }
if ($password_1 != $password_2) {
array_push($errors, "The two passwords do not match");
}

// first check the database to make sure
// a user does not already exist with the same username and/or email
$user_check_query = "SELECT * FROM teachers WHERE username='$username' OR email='$email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) { // if user exists
if ($user['username'] === $username) {
array_push($errors, "Username already exists");
}

if ($user['email'] === $email) {
array_push($errors, "email already exists");
}
}
$filename = $_FILES['myfile']['name'];
// destination of the file on the server
 $destination = 'teachpic/' .basename($filename) ;
 // get the file extension
 $extension = pathinfo($filename, PATHINFO_EXTENSION);

 // the physical file on a temporary uploads directory on the server
 $file = $_FILES['myfile']['tmp_name'];
 $size = $_FILES['myfile']['size'];

 if (!in_array($extension, ['jpeg', 'png','jpg',])) {
     echo "You file extension must be .jpeg, jpg or .png ";
 } elseif ($_FILES['myfile']['size'] > 8000000) { // file shouldn't be larger than 8Megabytes
     echo "File too large!";
 } else {
     // move the uploaded (temporary) file to the specified destination
     if (move_uploaded_file($file, $destination)) {

       if (count($errors) == 0) {
       $password = md5($password_1);//encrypt the password before saving in the database

       $query = "INSERT INTO teachers (name, username, description, email, password, images)
       VALUES('$name','$username','$brief', '$email', '$password','$filename')";
       if (mysqli_query($db, $query)) {
           echo "File uploaded successfully";
           $_SESSION['username'] = $username;
            header('location: teachdash.php');
       }
       }

}
}
}

// ...
// LOGIN USER
if (isset($_POST['login_teach'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM teachers WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  header('location: teachdash.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
