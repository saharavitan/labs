<?php 
include("up.php");
if (!isset($_GET['id']) || !isset($_GET['token'])){
  echo "<script>document.location='idor2.php?id=10&token=d3d9446802a44259755d38e6d163e820'</script>";
}
if (isset($_GET['id']) && isset($_GET['token'])){
  if (md5($_GET['id']) == $_GET['token']){
      switch ($_GET['id']) {
        case 0:
            $user = "Admin";
            break;
        case 1:
            $user = "test";
            break;
        case 2:
            $user = "user_test";
            break;
        case 3:
            $user = "fance_ark";
            break;
        case 4:
            $user = "SugerDaddy";
            break;
        case 5:
            $user = "SaharAvitan";
            break;
        case 6:
            $user = "0xdc777";
            break;
        case 7:
            $user = "__Anon__";
            break;
        case 8:
            $user = "Israel_is";
            break;
        case 9:
            $user = "Dark19927";
            break;
        case 10:
            $user = "Mamba_771";
            break;
    }
  } else {
    echo "<script>document.location='idor2.php?id=10&token=d3d9446802a44259755d38e6d163e820'</script>";
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
        <h3>IDOR - Level 2 </h3>
<hr>
<?php echo "Hello $user"; ?>



<?php
include("down.php")

?>
