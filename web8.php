
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
           <h3> Get <font color="red">Credentials</font> </h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
<h1> Code Review - Level 1</h1><br>
<?php 
$flag = '4a679e6891c389da19919';
if(isset($_GET['user']) && isset($_GET['pass'])){
if($_GET['user'] == 'admin' && $_GET['pass'] == 'admin'){
echo 'flag is : 4a679e6891c389da19919'; 
} else {
echo 'try again';
}
}
?>
<br><br>
<font color="black"><b><h4>Source Code:</h4></b></font>
<hr>
<p>
<<b></b>?php <br>
$flag = '// remove';<br>
if(isset($_GET['user']) && isset($_GET['pass'])){<br>
if($_GET['user'] == 'admin' && $_GET['pass'] == 'admin'){<br>
echo 'flag is : // remove'; <br>
} else {<br>
echo 'try to login again';<br>
}<br>
}<br>
?>
</p>
<hr>
<br><br><br><br><br><br><br><br><br>
<form method="post" >
Flag : <input type="text" name="flag" placeholder="flag here">
<br>
<input type="submit" class="btn btn-primary" value="validate" style="margin-top:20px;" />
<br>


<br>
 <?php
                if ($_POST['flag']  ==  '4a679e6891c389da19919'  ) {
                     echo '<span style="color:#00cc00;font-weight: 900;text-align:center;">Good Job! <a href="WEB1.php">Go to Level 2 </a></span>';
                 } else {
                    echo  '<span style="color:#dc143c;font-weight: 900;text-align:center;">You dont have the flag yet</span>' ;
                 }
 
 ?>






                <?php 
	include("down.php");
?>