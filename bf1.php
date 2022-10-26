<?php 
include("up.php");

if (isset($_POST['otp'])){
  if ($_POST['otp'] == "7498"){
    $user = "<b><font color='green'>login successful</font>, <br>Hello admin</b>";
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
           <h3> Get admin account</h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h3>OTP sent to 054-8*****3 </h3>
<hr>
<form method="post">
  <input type="text" name="otp" value="" placeholder="1234"> <br>
  <br>
  <input type="submit" value="Verify"> <br>
</form>

<?php 
if (isset($user)){
  echo "<br><br>$user"; 
}
?>



<?php
include("down.php")

?>
