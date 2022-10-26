<?php 

include("up.php");





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
           <h3> </h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h3>Reset password - admin account </h3>
<hr>

<!-- <form method="post">
  <input name="text">
  <input type="submit">
</form> -->


<?php 

$pwd = substr(hash('sha256', rand()), 1, 8);
$myfile = fopen("pwd.txt", "w") or die("Unable to open file!");
$txt = $pwd;
fwrite($myfile, $txt);
fclose($myfile);
echo "Password changed Successfully !"; 
?>
<br>
<a href="type_jug_login.php">Login</a>
<?php



include("down.php");

?>
