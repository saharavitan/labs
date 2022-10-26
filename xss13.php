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
        <?php
        // you cannot do anything without ...

        // no parentheses ...
        $escaped = preg_replace("/[()]/", "", $_GET['payload']);

        // no event handlers!
        $escaped = preg_replace("/.*o.*n.*/i", "", $escaped);
        ?>

        <h1>Hello, <?= $escaped ?>!</h1>


        <h1>inject</h1>
        <form>
            <input type="text" name="payload" placeholder="your payload here">
            <input type="submit" value="GO">
        </form>

        <br><br>
    </div>

    <?php
    include("down.php")
    ?>
