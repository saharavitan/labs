
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
        <h3>XSS - Level 3 </h3>
<hr>
<input type="text" name="aa" value="<?php if(isset($_GET['search'])){echo htmlentities($_GET['search'], ENT_QUOTES, "UTF-8");} else{ echo "";} ?>"> 

<h4><?php if(isset($_GET['search'])){echo "1. yahoo : no results found for : " . htmlentities($_GET['search']);} else{ echo "";} ?></h4>
<script>

    //override alert
    var _old_alert = window.alert;

    window.alert = function() {
        $("#notification").html("<a href='xss4.php'>Good job go to Level 4!</a>");
        _old_alert.apply(window, arguments);
    };

</script>
        <form method="get" action="#">
<input type="text" name="search" value="<?php if(isset($_GET['search'])){echo str_replace(">", "" ,$_GET['search']);} else{ echo "";} ?>"> 

<input type="submit" value="search">
</form>

<br>
<br>

<h4><?php if(isset($_GET['search'])){echo "search for : " . htmlentities($_GET['search']);} else{ echo "";} ?></h4>

<br>
<hr>
<br>
<font color="blue">
<h4><?php if(isset($_GET['search'])){echo "1. yahoo : no results found for : " . htmlentities($_GET['search']);} else{ echo "";} ?></h4>

<br>
<br>

<h4><?php if(isset($_GET['search'])){echo "2.walla : no results found for : " . htmlentities($_GET['search']);} else{ echo "";} ?></h4>

<br>
<br>

<h4><?php if(isset($_GET['search'])){echo "3.Bing : 1 result found for " . htmlentities($_GET['search']) . " click here to see";} else{ echo "";} ?></h4>

<br>
<br>

<h4><?php if(isset($_GET['search'])){echo "4.walla : no results found for : " . htmlentities($_GET['search']);} else{ echo "";} ?></h4>

<br>
<br>

<h4><?php if(isset($_GET['search'])){echo "5.google : no results found for :" . htmlentities($_GET['search']);} else{ echo "";} ?></h4>

<br>
<br>

<h4><?php if(isset($_GET['search'])){echo "6.Duckgo : no results found for : " . htmlentities($_GET['search']);} else{ echo "";} ?></h4>
<br>
<br>
</font>














<?php 
	include("down.php");
?>