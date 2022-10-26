<?php 

setcookie("_ad", "tes", time() + (86400 * 30), "/");
setcookie("_ga", "false", time() + (86400 * 30), "/");
setcookie("permission", "false", time() + (86400 * 30), "/");
if (isset($_COOKIE['secret'])){
  echo "";
} else {
  setcookie("secret", "MA", time() + (86400 * 30), "/");
  header("Refresh:0");
}

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
           <h3> Get 9 million points</h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h3>Cookies - Level 3 </h3>
<hr>
          <?php 
            if (isset($_COOKIE['secret'])){
              if (isset($_POST["up"])){
                $now_point = intval(base64_decode($_COOKIE["secret"]));
                $now_point_1 = $now_point + 1;
                $set_point = (string)$now_point_1 . "";
                $endd = str_replace("==", "", base64_encode($set_point . "")) . "";
                echo '<script>document.cookie = "secret='.$endd.'";</script>';
                echo "<script>document.location='coo3.php'</script>";
              }

            }
            
            $points = base64_decode($_COOKIE['secret']);
            echo "You have $points points !";

          ?>

    <br><br>
            <form action="coo3.php" method="post">
              <input type="submit" name="up" value="Point up">
            </form>
            


<?php
include("down.php")

?>
