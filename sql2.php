<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME','sqli');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
include("up.php");
if (isset($_POST['username']) ){
  $username = $_POST['username'];
  if (isset($_POST['password'])){
    $password = $_POST['password'];
  } else {
    $password = '1';
  }
  


}

?>


<?php


if (isset($_POST['username']) ){
 $query=mysqli_query($con,"select * from users where username='$username' and password='$password'");
  $row=mysqli_fetch_array($query) ;
}

?>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
           <h3> Hack to admin account</h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h3>SQL Injection - Level 2 </h3>





<br><br>

<form method="post">

<input type="text" name="username" value="" placeholder="Username">
<br>
<input type="password" name="password" value="" placeholder="*********">
<br>
<input type="submit" Value="Login">

<br><br>
<?php
if (isset($row['username'])){
  echo htmlentities($row['username']);;
}
?>
</form>



<?php

include("down.php");

?> 