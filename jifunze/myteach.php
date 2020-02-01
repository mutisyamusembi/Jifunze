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
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $db = mysqli_connect('localhost', 'root', '', 'jifunze');
    $sql ="DELETE FROM `feed` WHERE teacher_ ='$id'";
    $deleted=mysqli_query($db,$sql);
}

?>
<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
       
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
      </div>
    </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><p></p><p></p>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       </div>
      <h2>Time to learn</h2>
      
   
        <div class="table-responsive">
        <table class="table table-striped table-sm">

	<thead>
		<tr>
			<th>Name</th>
			<th>Personal Information</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php 
               //Use username to get StudentID from Table
     $data=array();     
     $db = mysqli_connect('localhost', 'root', '', 'jifunze');
     $us= $_SESSION['username'];
     $user_check_query = "SELECT id FROM students WHERE username='$us' LIMIT 1";
     $result = mysqli_query($db, $user_check_query);
     $std= mysqli_fetch_assoc($result);
     $stdid =$std['id'];
        //USE THE student id to find all associated teachers
     $get_teach= "SELECT teacher_ FROM feed WHERE student_id='$stdid'";
     $res= mysqli_query($db,$get_teach);
            //Use the result to get teahcer information
     while($rows = mysqli_fetch_array($res))
     {
         
    $selector= $rows['teacher_'];
    $get_post = "SELECT id,name, description FROM teachers WHERE id='$selector'";
    $resul=mysqli_query($db,$get_post);
     while ($row = mysqli_fetch_array($resul)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['description']; ?></td>
			<td>
				<a href="myteach.php?delete=<?php echo $row['id']; ?>"  class="btn btn-danger btn-xs" >Remove</a>
			</td>
		</tr>
	<?php }
     }
            ?>
</table>
      </div>
    </main>
  </div>
</div>
</body>
</html>
