<?php 
header("Token: 0x9A76BE48");
include("up.php"); ?>

<?php

if (!isset($_POST['file'])){
    $file = "read.txt";
} else { 
    $file = $_POST['file'];
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
           <h3> Can you load google? </h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h3>SSRF - Level 2 </h3>
<hr>

<div>

<form method="POST">
<input type="hidden" name="file" value="read.txt">
<input type="submit" value="Click Here"> 
</form>


<?php
					if(isset($_POST["file"]))
					{
                        $data = fopen($file, 'rb');
						if (isset($data)){
							
							while(!feof($data)) {
								echo fgets($data) . "<br>";
							}
							
							fclose($data);
						}
					}
				?>

</div>

<?php
include("down.php")

?>
