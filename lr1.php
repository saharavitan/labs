<?php 

include("up.php");
if (!isset($_GET['page'])){
  echo "<script>document.location='lr1.php?page=read2.txt'</script>";
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
           <h3> Try to get "WINDOWS\win.ini"</h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h3>Local File Inclusion - Level 1 </h3>
<hr>
<?php
$page = str_replace("\\", "", $_GET['page']);
if (str_starts_with($page, '/')) {
  $page = substr($page, 1);
}
$page = str_replace("../", "", $page);
include($page);
?>
            


<?php
include("down.php");

?>
