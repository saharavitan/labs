<?php 

if (session_status() == PHP_SESSION_NONE) 
{
  session_start();
  
  if (!isset($_SESSION["points"]))
  {
    $_SESSION["points"] = 0;
  }
  if (isset($_POST["send"])){
    if ($_POST["send"] == "Point up")
    {
      $_SESSION["points"] = $_SESSION["points"] + 1;
    }
  }
}
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
           <h3> Get more score from another page</h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h3>ClickJacking - Level 1 </h3>
<hr>
		<?php
			echo "You have " . $_SESSION["points"] . " points !"; 
    ?>
  <br><br>
	<form method="post">
		<input type="submit" name="send" value="Point up">
	</form>
            


<?php
include("down.php")

?>
