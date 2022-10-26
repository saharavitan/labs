
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
  <li><ab><b> CyberSpace. </ab></a></li>
  <li><a  href="https://cyber-space.co.il/ctf/index.php">Login</a></li>
  <li><a class="active" href="https://cyber-space.co.il/ctf/flag.php">Flag</a></li>
  <li><a  href="https://t.me/cyberspaceisrael">Cyber-Space Telegram</a></li>
  <li><a  href="https://www.youtube.com/channel/UC1KrdYKBo5ohJrBHLF_rgSQ">Attackit | youtube</a></li>
</ul>
<br><br><br>
<center>
<form method="post" >
Flag : <input type="text" name="flag" placeholder="flag here">
<br>
<input type="submit" class="btn btn-primary" value="validate" style="margin-top:20px;" />
<br>


<br>
 <?php
                if ($_POST['flag']  ==  '7cb733289e24'  ) {

	   $random_string = chr(rand(65,90)) . rand(1,9) . chr(rand(65,90)) . chr(rand(65,90)) . rand(1,9) .  chr(rand(65,90)) . chr(rand(65,90)) . rand(1,9)  . chr(rand(65,90)) . rand(1,9)  . chr(rand(65,90)) . rand(1,9); // random(ish) 5 character string

                 echo  "Congratulations you've passed the challenge, the code should be sent to <a href='https://t.me/attackit'>Sahar avitan (AttacKit)</a> : " .  $random_string;


            $timestamp = date('d/m/Y h:i:s');

            $ipaddress = $_SERVER['REMOTE_ADDR'];

            $myfile = fopen("passed/" . $random_string.".txt" , "w");
            $txt = "Code = " . $random_string . " IP = " . $ipaddress . " Time = " . $timestamp  ;
            fwrite($myfile, $txt);
            fclose($myfile);
            

                 } else {
                    echo  '<span style="color:#dc143c;font-weight: 900;text-align:center;">You dont have the flag yet</span>' ;
                 }
 
 ?>

<br><br><br><br>
<hr>
<span>Copyright © <a href="https://attackit.co.il"> Sahar Avitan</a> (attackit) 2019 , </span><br>
<a href="https://t.me/cyberspaceisrael">Cyber-Space</a> on Telegram
</center>
</body>
</html>