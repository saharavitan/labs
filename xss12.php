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
        <?php if(isset($_GET['move'])){echo "welcome " . $_GET['move']; } ?>
        <h3>XSS - Level 1 </h3>
<hr>
            <form method="get" action="#">
                what is your name ? <br><br> <input type="text" name="username" value="" placeholder="David Cohen"> 
                <input type="hidden" name="move" value="test" placeholder="David Cohen"> 
                <input type="submit" value="ok">
                </form>
                <br>
                <?php if(isset($_GET['username'])){echo "welcome " . $_GET['username']; } ?>

            <form method="post" action="#">
              what is your name ? <br><br> <input type="text" name="aaa" value="<?php if(isset($_POST['aaa'])){echo $_POST['aaa']; } ?>" placeholder="David Cohen"> 
              <input type="hidden" name="move1" value="test" placeholder="David Cohen"> 
              <input type="submit" value="ok">
            </form>


            <?php
              $headers = apache_request_headers();
            ?>
                <form>
                Send new requests with user agent ? <br><br> <input type="text" name="name" value="<?php echo $headers['User-Agent'];  ?>" id="guest" placeholder="David Cohen" style="width: 100%;"> 
                <input type="submit" id="search" value="Go" style="margin-top:20px;"/>
                </form>
            <br>

<br><br>



<?php
include("down.php")
?>
