<?php 
include("up.php");
if (!isset($_GET['status'])){
    echo "<script>document.location='param2.php?status=login'</script>";
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
           <h3> You need to find the registration process</h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h3>Parameter Tampering - Level 2 </h3>
<hr>
<?php 
if (isset($_GET['status'])){
    if ($_GET['status'] == "login"){
    ?>

    <form>
        <input type="text" name="username" value="" placeholder="Username"><br>
        <input type="password" name="password" value="" placeholder="*********"><br>
        
        <input type="Submit" value="Login">
        <br><br><br>
        * You do not have permission to create a new user
        
    </form>
        <?php
    }
}
?>

<?php 
if (isset($_GET['status'])){
    if ($_GET['status'] == "register"){
    ?>

    <form>
        <p><b> Well done!<br>
You passed the challenge! </b></p><br><br>
        <h1> Register to system</h1>
        <input type="text" name="username" value="" placeholder="Username"><br><br>
        <input type="email" name="email" value="" placeholder="test@example.com"><br><br>
        <input type="password" name="new_password" value="" placeholder="*********"><br><br>
        <input type="password" name="confirm_password" value="" placeholder="*********"><br><br>
        <input type="Submit" value="Register">
    </form>
        <?php
    }
}
?>

<?php
include("down.php")

?>
