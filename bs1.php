<?php 
header("Token: 0x9A76BE48");
include("up.php"); 
?>

<?php

if (isset($_POST['header'])){
  if ($_POST['header'] == "0x9A76BE48"){
    echo "<script>alert(\"Good Job\")</script>";
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
           <h3> Can you find the token? </h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h3>Burp-Suite - Level 1 </h3>
<hr>

<form method="post">
  <p> What is the value of the header "Token"? </p>
  <input type="text" name="header" value="" placeholder="--------"><br><br>
  <input type="submit" value="Check">
</form>


<?php
include("down.php")

?>
