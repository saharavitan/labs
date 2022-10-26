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
           <h3>Save your name</h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h3>Save your name in file</h3>
<hr>

<form method="post">
  <input name="text">
  <input type="submit" value="save">
</form>
<?php 
if (isset($_POST['text'])){
  $myfile = fopen("log.txt", "w") or die("Unable to open file!");
  $txt = $_POST['text']. "\n";
  fwrite($myfile, $txt);
  fclose($myfile);
  echo htmlentities($_POST['text'], ENT_QUOTES, 'UTF-8') . "save in log file"; 
}


include("down.php");

?>
