<?php 
include("up.php"); 

if (isset($_POST['username']) && isset($_POST['password'])){
    if ($_POST['username'] == "admin" && $_POST['password'] == "123456"){
      echo "<script>alert('login successfully')</script>";
    } else {
      echo "<script>alert('Username or password incorrect')</script>";
    }
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
           <h3> Sensetive Data Exposed </h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h3>Burp-Suite - Level 3 </h3>
<hr>

<form method="post">
<p>Find the secret passwords file and login to admin! - Using Burp-Suite</p>
  <input type="text" placeholder="Sahar" name="username"><br><br>
  <input type="password" placeholder="********" name="password"><br><br>
  <input type="submit" value="Login">
</form>


<?php
include("down.php")

?>
