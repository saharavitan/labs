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
            <form method="get" action="#">
                what is your name ? <br><br> <input type="text" name="first" value="" placeholder="David Cohen">
                <br>
                what is your last name ? <br><br> <input type="text" name="last" value="" placeholder="Cohen">
                <br>
                what is your middle name ? <br><br> <input type="text" name="middle" value="" placeholder="dude">
                <br>
                what is your age ? <br><br> <input type="text" name="age" value="" placeholder="29">
                <br>
                what is your id ? <br><br> <input type="text" name="id" value="" placeholder="29">

                <input type="submit" value="ok">
            </form>
            <br>

            <?php

            $first = str_replace("<", "", $_GET["first"]);
            $last = str_replace("<", "", $_GET["last"]);
            $middle = str_replace("<", "", $_GET["middle"]);
            $age = str_replace("<", "", $_GET["age"]);
            $id = str_replace("<", "", $_GET["id"]);

            $first = str_replace(">", "", $first);
            $last = str_replace(">", "", $last);
            $middle = str_replace(">", "", $middle);
            $age = str_replace(">", "", $age);
            $id = str_replace(">", "", $id);

            ?>
            <script>
                var name = "<?= $first ?>";
            </script>

            <script>
                var name = <?= $id ?>;
            </script>

            <script>
                var name = "aaaaaaaaa";
                console.log("<?= $last ?>" + name);
                var tmp = "";
            </script>

            <script>
                const x = () => {console.log("<?= $middle ?>");}
                x();
            </script>

            <script>
                var json_temp = {"id": "<?= htmlentities($id, ENT_QUOTES, 'UTF-8') ?>", "first": "<?= htmlentities($first, ENT_QUOTES, 'UTF-8') ?>", "age":<?= $age ?>, "middle":"<?= htmlentities($middle, ENT_QUOTES, 'UTF-8') ?>", "last":"<?= htmlentities($last, ENT_QUOTES, 'UTF-8') ?>"};
            </script>


            <br><br>


            <?php
            include("down.php")
            ?>
