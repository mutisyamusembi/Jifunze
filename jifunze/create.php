<?php  

  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: teachlg.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.html");
  }
$uss= $_SESSION['username'];
$title = "";
$body= "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'jifunze');

if (isset($_POST['create_post'])) {
  // receive all input values from the form
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $body = mysqli_real_escape_string($db, $_POST['body']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($title)) { array_push($errors, "Title is required"); }
  if (empty($body)) { array_push($errors, "Body is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM posts WHERE title='$title' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
    
                             
    if ($user) { // if post with similar titleexists
    if ($user['title'] === $title) {
      array_push($errors, "Title already exists");
    }
    }
    

  // Finally, update post if there are no errors in the form
    if (count($errors) == 0) {
    $user_check_query = "SELECT id FROM teachers WHERE username='$uss' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $tea= mysqli_fetch_assoc($result);
    $teachid =$tea['id'];
    $query = "INSERT INTO posts (teacher_id, title, body) 
  			  VALUES('$teachid','$title', '$body')";
    if(mysqli_query($db, $query)){
        echo "Lesson added succesfully";
       header('location: teachdash.php');
    }
      else{
          echo "error";
      }
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>TEACHER </title>
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Jifunze</a>
    <a class="nav-link"  href="create.php?logout='1'" >Sign out</a>
</nav>
      <form method="post" action="create.php">
           <?php include('errors.php'); ?>
             <div class='jumbotron text-center'>
     <legend>CREATE LESSON</legend>
     <div class="form-row">
    <div class="form-group col-md-6">
    <p>TITLE<input  class="form-control"type = "text" name = "title" placeholder = "Title" value="<?php echo $title; ?>"><br>
      <p>
        <button type="submit" class="btn btn-success btn-lg" name ="create_post">Create</button>
      </p>
    </div>
    <div class="form-group col-md-6">
      BODY
    <textarea name="body" class="form-control" rows="20" cols="30" placeholder="This is the body of your lesson" value="<?php echo $body; ?>" ></textarea>
    
             </form>
</body>
</html>
