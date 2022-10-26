<?php 

include("up.php");
$res = "";
if (isset($_POST['pwd']) and isset($_POST['user'])){
  if ($_POST['pwd'] == "12345" and $_POST['user'] == "test") {
    $res = "Login Successfuly";
  } else {
    $res = "Try Again !";
  }
}



if (isset($_POST['pwd']) and isset($_POST['user']) and $_POST['user'] == "admin"){
  $myfile = fopen("pwd.txt", "r") or die("Unable to open file!");
  $pwd = fread($myfile,filesize("pwd.txt"));
  $tmp = substr(hash('sha256', $_POST['pwd']), 1, 8);
  if ($tmp == $pwd){
    $res = "Login Successfuly flag{7cb733289e24}";
  } else {
    $res = "Try Again !";
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
            <h3>user: test, pwd: 12345</h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h3>Try Hack to "admin" Account </h3>
<hr>

<form method="post">
<input name="user" type="text"><br>
<input name="pwd" type="password"><br>
  <input type="submit">
</form>
<?php 

echo $res;
// $pwd = substr(hash('sha256', rand()), 1, 8);
// $myfile = fopen("pwd.txt", "w") or die("Unable to open file!");
// $txt = $pwd;
// fwrite($myfile, $txt);
// fclose($myfile);
// if (isset($_POST['pwd'])){
//   echo "Password Update Successfully !"; 
// }



include("down.php");

?>
