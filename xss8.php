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
           <h3> Inject <font color="red">alert</font> command</h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          
<h3>XSS - Level 8 </h1>
<hr>



        <form method="get" action="xss8.php">
                    <h4>What is your favorite number:</h4>
                    <input type=range min=0 max=100 class=input-block-level name="num" id=input value=<?php
						if(isset($_GET['num'])){
							echo htmlentities($_GET['num']);
						}else{
							echo 0;
						}
					?>>
                    <br>
                    <b><?php
    if(isset($_GET['num'])){
        echo "you selected ".htmlspecialchars($_GET['num']);
    }
?></b>
                    <center><input type="submit" class="btn btn-primary" id="search" value="Choose" style="margin-top:20px;"/></center>


                </form>














</form>

                <?php 
	include("down.php");
?>