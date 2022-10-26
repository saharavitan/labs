<?php 

setcookie("_ad", "tes", time() + (86400 * 30), "/");
setcookie("_ga", "false", time() + (86400 * 30), "/");
setcookie("permission", "false", time() + (86400 * 30), "/");
setcookie("session", "c7b4f000ed88af84fdd3ef064c18ef71", time() + (86400 * 30), "/");

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
           <h3> Get the admin user</h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h3>Cookies - Level 2 </h3>
<hr>
          <?php 
            if (isset($_COOKIE["session"])){
              
                if ($_COOKIE["session"] == "c7b4f000ed88af84fdd3ef064c18ef71"){
                  echo "Hello Mamba_1337";
                } elseif ($_COOKIE["session"] == "21232f297a57a5a743894a0e4a801fc3"){
                  echo "Hello admin";
                } else {
                  echo "Hello Guest";
                  $_COOKIE["session"] = "adb831a7fdd83dd1e2a309ce7591dff8";
                }
            }
            
          ?>
    <br><br>



<?php
include("down.php")

?>
