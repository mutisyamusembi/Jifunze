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
 $db = mysqli_connect('localhost', 'root', '', 'jifunze');
     $uss= $_SESSION['username'];
     $user_check_query = "SELECT id FROM teachers WHERE username='$uss' LIMIT 1";
     $result = mysqli_query($db, $user_check_query);
     $tea= mysqli_fetch_assoc($result);
     $teachid =$tea['id'];

if (isset($_GET['post_id'])) {
    $id =$_GET['post_id'];
    $sql ="DELETE FROM `posts` WHERE `id` = $id";
    $dletion = mysqli_query($db, $sql);
    
}
    
     $db = mysqli_connect('localhost', 'root', '', 'jifunze');
     $uss= $_SESSION['username'];
     $user_check_query = "SELECT id FROM teachers WHERE username='$uss' LIMIT 1";
     $result = mysqli_query($db, $user_check_query);
     $tea= mysqli_fetch_assoc($result);
     $teachid =$tea['id'];
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
    <a class="nav-link"  href="teachdash.php?logout='1'" >Sign out</a>
</nav>
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="">
              <span data-feather="file"></span>
            </a>
          </li><p>
         <p> <li class="nav-item">
            <a class="nav-link" href="create.php">
             Create Lesson
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              My lessons
            </a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="up.php">
             Upload resources
            </a>
          </li>
          </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        </h6>
      </div>
      </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <p></p><p></p>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       </div>
      <h2>My Lessons</h2>
      <p>
        Create lessons that all students who add you get to enjoy
      </p>
     
  <?php 
            $resu = mysqli_query($db, "SELECT id,title, body FROM posts WHERE teacher_id = '$teachid' ");
            while ($row = mysqli_fetch_array($resu)) { ?>
    
    <div class="container">
    <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
     <div class="card-body" style="text-align:left">
    <div class="form-row">
    <div class="form-group col-md-10">
       <?php echo $row['title']; 
         echo "<br>";
         echo "<br>";
          echo $row['body']; 
        ?>
  
    </div>                                            
        <div class="form-group col-md-2"> 
        <a class="btn btn-danger btn-xs" href="teachdash.php?post_id=<?php echo $row['id']; ?>" >Delete</a>                                        
                </div>
            </div>
          </div>
        </div>
    </div>
  </div>
     <?php
}
?>
</main>
</body>
</html>
