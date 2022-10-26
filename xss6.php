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



<h3>XSS - Level 6</h1>
<hr>


          
          
            <form method="get" action="#">
                what is your name ? <br> <input type="text" name="username" value="" placeholder="David Cohen"> <br><br>

                choose your city <br>
                <select name="city">
                  <option name="1" value="Tel aviv">Tel aviv</option>
                  <option name="2" value="Haifa">Haifa</option>
                  <option name="3" value="karmiel">karmiel</option>
                  <option name="4" value="Jerusalem">Jerusalem</option>
                </select>
                <br>
                <br>
                <input type="submit" value="ok">
                </form>
                <br>
                <?php if(isset($_GET['username'])){echo "welcome " . htmlentities($_GET['username']); } ?>
                



                <input type="hidden" class="input-block-level" placeholder="stage4" name="token" id="hidden" value="<?php
     if(isset($_GET['username']) && isset($_GET['city'])){
        echo $_GET['city'];
    }else{
        echo 'fcb733289e24';
    }
?>">



                <?php 
	include("down.php");
?>