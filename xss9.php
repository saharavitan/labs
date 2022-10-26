
<?php
if(isset($_GET['username'])){
    echo str_replace("alert","",strtolower($_GET['username']));
    die();
}
?>


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

            <h1>XSS - Level 5</h1><br><br>


            what is your name ? <br><br> <input type="text" name="username" value="<?php if(isset($_GET['username'])){echo $_GET['username']; } ?>" id="guest" placeholder="David Cohen">
            <input type="submit" id="search" value="Go" style="margin-top:20px;"/>

            <br>




<?php
include("down.php");
?>