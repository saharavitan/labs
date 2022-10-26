        <?php
$cookie_name = "auth";
$cookie_value = "false";
setcookie($cookie_name, $cookie_value, time()+0.1, "/"); // 86400 = 1 day
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
           <h3> find the <font color="red">flag</font> (HARD Challenge)</h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">




<br>
<form action="" method="post">
<p>
    <input type="text" name="username" placeholder="username" />
</p>
<p>
    <input type="password" name="password" placeholder="password" />
</p>
<p>
<input type="submit" class="btn btn-primary" name="login" value="Login" style="margin-top:20px;" />
</form>
<a href="source2.txt">
<input type="submit" class="btn btn-primary" value="Source Code" style="margin-top:20px;" />
</a>
</p>
<br>
<?php
$flag = "e486a39c78f2a3ad894c52";

$username = "admin";
$password = "admin";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if (strcmp($username, $_POST['username']) == 0 && strcmp($password, $_POST['password']) == 0) {
        echo 'Try verify below : c52bd439c78f2a3ad894c52';
    } else {
            echo "Worng username/password, Try again";
    }
}
?>
<br>


<br><br>
<?php
if(!isset($_COOKIE[$cookie_name])) {
   echo " ";
} else {
 echo "Great, The flag is : 7cb58a1d799fc22e394d";
}
?>


<hr>

<form method="post" >
Flag : <input type="text" name="flag" placeholder="flag here">
<br>
<input type="submit" class="btn btn-primary" value="validate" style="margin-top:20px;" />
<br>


<br>
 <?php
                if ($_POST['flag']  ==  '7cb58a1d799fc22e394d'  ) {
                     echo '<span style="color:#00cc00;font-weight: 900;text-align:center;">Good Job!</span>';
                 } else {
                    echo  '<span style="color:#dc143c;font-weight: 900;text-align:center;">You dont have the flag yet</span>' ;
                 }
 
 ?>

                <?php 
	include("down.php");
?>