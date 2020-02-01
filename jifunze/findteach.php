<?php
   session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: stdlg.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.html");
  }


if (isset($_GET['add_teach'])) {
     $db = mysqli_connect('localhost', 'root', '', 'jifunze');
     $us= $_SESSION['username'];
     $user_check_query = "SELECT id FROM students WHERE username='$us' LIMIT 1";
     $result = mysqli_query($db, $user_check_query);
     $std= mysqli_fetch_assoc($result);
     $stdid =$std['id'];
     $ids =$_GET['add_teach'];
     $newteach="INSERT INTO feed (student_id ,teacher_) VALUES($stdid,$ids)";
     $newteachquery=mysqli_query($db, $newteach);

     if($newteachquery) {
       echo "<script> window.location.href='stddash.php';
       alert('Teacher added successfully.'); </script>";

     } else {
       echo "<script> window.location.href='findteach.php';
       alert('Task unsuccesful. Please try again.'); </script>";
     }

    // header("location: stddash.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>STUDENT </title>
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Jifunze</a>
    <a class="nav-link"  href="stddash.php?logout='1'" >Sign out</a>
</nav>
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
            </a>
          </li><p>
            <p> <li class="nav-item">
            <a class="nav-link" href="stddash.php">
              Home
            </a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="findteach.php">
              Find Teachers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="myteach.php">
              <span data-feather="users"></span>
              My Teachers
            </a>
            </li>
                 <li class="nav-item">
            <a class="nav-link" href="downloads.php">
              Download Recources
            </a>
          </li>
          </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        </h6>
      </div>
    </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><p></p><p></p>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       </div>
      <h2>Time to learn</h2>

 <?php
             $db = mysqli_connect('localhost', 'root', '', 'jifunze');
             $results = mysqli_query($db, "SELECT * FROM teachers ORDER BY id DESC");

           while ($row = mysqli_fetch_array($results)) { ?>




    <div class="container">
    <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
     <div class="card-body" style="text-align:left">
    <div class="form-row">
    <div class="form-group col-md-6">
     <img  style="margin-left:200px" style="border-radius:80px"src="teachpic/<?php echo $row['images'];?>" class="img-responsive" alt="image"width="200px" height="200px">

    </div>
    <div class="form-group col-md-3">
        <?php echo $row['name'];
         echo "<br>";
         echo "<br>";
          echo $row['description'];
        ?>
        </div>
        <div class="form-group col-md-3">
            <?php
            $us= $_SESSION['username'];
                    $user_check_query = "SELECT id FROM students WHERE username='$us' LIMIT 1";
                    $result = mysqli_query($db, $user_check_query);
                    $std= mysqli_fetch_assoc($result);
                    $stdid =$std['id'];
                    $teachers="SELECT teacher_ FROM feed WHERE student_id='$stdid'";
                    $teachers_query=mysqli_query($db,$teachers);
                    $a=array();
                    while($rows =mysqli_fetch_array($teachers_query)){
                    $rev=$rows['teacher_'];
                    array_push($a,$rev);
                    }
                    $bold=$row['id'];
                    if(in_array("$bold",$a)){ ?>
                        <i class="fa fa-check-circle"></i> Already Added
                   <?php }
                     else{ ?>
               <a  class="btn btn-primary btn-xs" href="findteach.php?add_teach=<?php echo $row['id']; ?>" >ADD</a>
                    <?php }


        ?>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
	<?php }

          ?>

        </main>
    </div>
 </div>
</body>
</html>
