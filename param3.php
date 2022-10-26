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
           <h3> Get all permission</h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h3>Parameter Tampering - Level 3 </h3>
<hr>
<?php 
if (!isset($_POST['status'])){
    ?>

    <form method="post">
        <input type="hidden" name="status" value="false">
        <input type="Submit" value="Click me">
    </form>
<?php
}
?>
<?php 
if (isset($_POST['status'])){
    if ($_POST['status'] == "false"){
    ?>

    <form method="post">
        <script>alert("You could not get permissions .. maybe next time")</script>
        <input type="hidden" name="status" value="false">
        <input type="Submit" value="Click Again to get permission">
    </form>
        <?php
    }
}
?>

<?php 
if (isset($_POST['status'])){
    if ($_POST['status'] == "true"){
    ?>

    <form>
        <p><b> Well done!<br>
You passed the challenge! </b></p><br><br>
<input type="Submit" value="Done">
    </form>
        <?php
    }
}
?>

<?php
include("down.php")

?>
