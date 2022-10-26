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
                    <h3>Inject <font color="red">img</font></h3>

                </div>
            </form>
            <!-- Topbar Navbar -->


        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">




            <!-- Button trigger modal 1-->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal 1
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title1</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="modal.php" method="post">
                            <div class="modal-body">

                                <input name="user_1" required>
                                <input name="input_1" required>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" value="Send" class="btn btn-primary" value="Save changes">
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <br><br>

            <!-- Button trigger modal 2-->
            <button onclick='launchmodal()' type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                Launch demo modal 2
            </button>

            <!-- Modal -->
            <div id="modaltest"></div>

            <br>
            <!-- Button trigger modal 3-->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
                Launch demo modal 3
            </button>
            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title3</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="modal.php" method="post">
                            <div class="modal-body">

                                <input name="user_3" required>
                                <input name="input_3" required>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" value="Send" class="btn btn-primary">
                            </div>
                        </form>



                    </div>
                </div>
            </div>
            <br><br>
            <?php if(isset($_POST['user_1'])){echo " modal_1 = " . $_POST['user_1'] . " | " . $_POST['input_1'];} else{ echo "";} ?>
            <?php if(isset($_POST['user_2'])){echo " modal_2 = " . $_POST['user_2'] . " | " . $_POST['input_2'];} else{ echo "";} ?>
            <?php if(isset($_POST['user_3'])){echo " modal_3 = " . $_POST['user_3'] . " | " . $_POST['input_3'];} else{ echo "";} ?>

            <script src="modal.js"></script>
            <?php
            include("down.php");
            ?>

