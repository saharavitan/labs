<?php include("up.php"); ?>



    <!-- Content Wrapper -->
    <script>
    function login(username, password){
        if (username == "admin" && password == "A159753@"){
            alert("login successfully");
        } else {
            alert("Username or password incorrect");
        }
    }

    </script>
    
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
           <h3> Get admin account</h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h3>JavaScript - Level 1 </h3>
<hr>

<input type="text" id="username" value="" placeholder="Israel Israeli"><br><br>
<input type="password" id="password" value="" placeholder="********"><br><br>
<input type="submit" onclick="login(document.getElementById('username').value, document.getElementById('password').value)" value="Login">


<?php
include("down.php")

?>
