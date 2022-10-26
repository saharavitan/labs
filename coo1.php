<?php 

setcookie("_ad", "tes", time() + (86400 * 30), "/");
setcookie("_ga", "false", time() + (86400 * 30), "/");
setcookie("permission", "false", time() + (86400 * 30), "/");
setcookie("sess", "7cb733", time() + (86400 * 30), "/");

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
           <h3> Get admin account</h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h3>Cookies - Level 1 </h3>
<hr>
          <?php 
            if (isset($_COOKIE["permission"])){
              
                if ($_COOKIE["permission"] == "true"){
                  echo "Hello admin";
                  unset($_COOKIE['_ad']);
                  unset($_COOKIE['_ga']);
                  unset($_COOKIE['permission']);
                  unset($_COOKIE['sess']);
                } else {
                  echo "You are not admin";
                }
            }
          ?>



<?php
include("down.php")

?>
