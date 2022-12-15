<?php
include("up.php");

if (isset($_GET['username'])){
    $myfile = fopen("stored3Text.txt", "a") or die("Unable to open file!");
    $txt = $_GET['username']. "\n";
    fwrite($myfile, $txt);
    fclose($myfile);
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
                <h3> Inject <font color="red">alert</font> command</h3>

            </div>
        </form>
        <!-- Topbar Navbar -->


    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">
    <h3>XSS - Level 1 </h3>
    <hr>
    <form method="get" action="#">
        what is your name ? <br><br> <input type="text" name="username" value="" placeholder="David Cohen">
        <input type="submit" value="ok">
    </form>
    <br>

    <br><br>


<?php
include("down.php")
?>
