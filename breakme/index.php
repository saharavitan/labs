
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>CyberSpace - CTF (AttacKit)</title>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sa-admin-2.min.css" rel="stylesheet">
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

<script src="./assets/pages/helper.js"></script>
<script src="./assets/pages/main.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

 <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise" rel="stylesheet" type="text/css"/>

	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}


.active {
  background-color: #007bff;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li ab {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
<body>




<ul>
  <li><ab><b> Attackit </ab></a></li>
  <li><a class="active" href="https://attackit.co.il/breakme-1/index.php">Login</a></li>
</ul>

<center>
<br><br>
<h3>Login system</h3><hr style="width:20%; font-weight: bold;"><br>
<form action="" method="post">
<p>
    <input type="text" name="username" placeholder="username" />
</p>
<p>
    <input type="password" name="password" placeholder="password" />
</p>

<p>
<input type="submit" class="btn btn-primary" name="login" value="Login" style="margin-top:20px;" />
</p>
</form>

<?php

$username = "as1d1asd6@#%&@@#a1sda165d";
$password = "58as1d96as1d6@#^&^@@#as16da";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if (strcmp($username, $_POST['username']) == 0 && strcmp($password, $_POST['password']) == 0) {
        echo 'flag{strcmp_s0_bad_7a98x2c894a}';
    } else {
            echo "Wrong username/password, Try again";
    }
}
?>
</center>
<hr style="width:100%; font-weight: bold;"><br><h3>Source Code</h3><hr style="width:100%; font-weight: bold;"><br>
<pre>

                    &lt;?php

                    $username = "\\REMOVE";
                    $password = "\\REMOVE";

                    if (isset($_POST['username']) && isset($_POST['password'])) {
                        if (strcmp($username, $_POST['username']) == 0 && strcmp($password, $_POST['password']) == 0) {
                            echo '\\REMOVE';
                        } else {
                                echo "Wrong username/password, Try again";
                        }
                    }
                    ?&gt;

</pre>

<center>
<br><br>
<hr>
<span>Copyright © <a href="https://attackit.co.il"> Sahar Avitan</a> (attackit) 2019 , </span><br>
<a href="https://t.me/cyberspaceisrael">Cyber-Space</a> on Telegram
</center>
</body>
</html>