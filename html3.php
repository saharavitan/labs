
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
           <h3> Inject <font color="red">img</font></h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          




        <form method="POST">
          <p>What is your name</p>
          <input type="text" name="search" placeholder="Sahar Avitan" value="<?php if(isset($_POST['search'])){echo htmlentities($_POST['search'], ENT_QUOTES, "UTF-8") ;} ?>">
          <input type="submit" value="Send">
        </form>

        <input type="text" name="aaaa" placeholder="Sahar Avitan" value='<?php if(isset($_POST['search'])){echo $_POST['search'];} ?>'>



<?php 
	include("down.php");
?>