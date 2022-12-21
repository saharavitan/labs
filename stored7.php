<?php
include("up.php");

if (isset($_POST['var'])){
    if ($_POST['var1'] == "7cb7" and $_POST['var2'] == "3328" and $_POST['var3'] == "9e24" ) {
        $myfile = fopen("stored7Text.txt", "w") or die("Unable to open file!");
        $txt = $_POST['var']. "\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    }
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
    <h3>Stored (POST) </h3>
    <hr>
    <form method="post" action="#">
        what is your name ? <br><br>
        <input type="text" name="var1" value="7cb7" placeholder="var1">
        <input type="text" name="var" value="" placeholder="David Cohen">
        <input type="text" name="var2" value="3328" placeholder="var2">
        <input type="text" name="var3" value="9e24" placeholder="var3">


        <input type="submit" value="ok">
    </form>
    <br>

    <br><br>


<?php
include("down.php")
?>
<?php
