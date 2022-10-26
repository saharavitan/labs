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
            <?php
            // by escaping the payload you won't break this system, haha! :-)
            if (isset($_GET['payload'])){
                $escaped = preg_replace("/[a-zA-Z0-9]/", "", $_GET['payload']);
            }
            $escaped = "";
            ?>

            <script>
                // here you can inject an arbitrary script,
                // but I guess you can't do anything, cuz the script can't include a-zA-Z0-9 ! :-)
                <?= $escaped ?>
            </script>


            <h1>inject</h1>
            <form>
                <input type="text" name="payload" placeholder="your payload here">
                <input type="submit" value="GO">
            </form>
        </div>

        <br><br>
    </div>

    <?php
    include("down.php")
    ?>
