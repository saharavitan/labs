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

          <h3>XSS - Level 5 </h3>
<hr>
          
            <form method="get" action="#">
            College : <input type="text" name="col" value="<?php
     if(isset($_GET['col']) && isset($_GET['city']) && isset($_GET['cou'])){
        echo htmlentities($_GET['col']);
    }
?>" placeholder="David Cohen"> <br><br>
            City : <input type="text" name="city" value="<?php
     if(isset($_GET['col']) && isset($_GET['city']) && isset($_GET['cou'])){
        echo htmlentities($_GET['city']);
    }
?>" placeholder="David Cohen"> <br><br>
            Course Name : <input type="text" class="input-block-level" placeholder="imhere" name="cou" id="hidden" value='<?php
     if(isset($_GET['col']) && isset($_GET['city']) && isset($_GET['cou'])){
        echo $_GET['cou'];
    }
?>'> <br><br>
            From price : <input type="text" name="pf" onkeypress='return event.charCode >= 48 && event.charCode <= 57'> <br><br>
            To price : <input type="text" name="pt" onkeypress='return event.charCode >= 48 && event.charCode <= 57'> <br><br>
                <input type="submit" value="search">
                </form>
                <br>
              



              






                <?php 
	include("down.php");
?>