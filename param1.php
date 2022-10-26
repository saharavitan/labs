<?php 
include("up.php");
if (!isset($_GET['perm'])){
  echo "<script>document.location='param1.php?perm=68934a3e9455fa72420237eb05902327'</script>";
}
if (isset($_GET['perm'])){
      
        if ($_GET['perm'] == "68934a3e9455fa72420237eb05902327"){
            $user = "You do not have access, login to admin.";
            
        }
        else if ($_GET['perm'] == "b326b5062b2f0e69046810717534cb09"){
          $user = "Hello admin";
        }
        else if ($_GET['perm'] != "68934a3e9455fa72420237eb05902327"){
          echo "<script>document.location='param1.php?perm=68934a3e9455fa72420237eb05902327'</script>";
        }
        
  } else {
    echo "<script>document.location='param1.php?perm=68934a3e9455fa72420237eb05902327'</script>";
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
        <h3>Parameter Tampering - Level 1 </h3>
<hr>
<?php echo "$user"; ?>



<?php
include("down.php")

?>
