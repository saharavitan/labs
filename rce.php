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
           <h3> Website alive</h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h3>Remote Code Execution</h3>
<hr>
<form method="post" action="rce.php">
<input type="text" name="page" value="">
<input type="submit" value="send">
</form>
<?php
if (isset($_POST['page'])){
  echo "<pre>";
  $aaaa = exec("ping ". $_POST['page'] . " -c 4");
  echo $aaaa;
  if(strpos($aaaa, "=") !== false){
    if(strpos($aaaa, "m") !== false){
        echo "<br><br>Site is up";
      } else{
        echo "<br><br>Site is down";
      }
  }
  echo "</pre>";
}

?>
            


<?php
include("down.php");

?>
