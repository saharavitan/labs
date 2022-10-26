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
           <h3> Get the <font color="red">Flag</font></h3>
              
            </div>
          </form>
          <!-- Topbar Navbar -->
        

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">















        <form method="post" >
       <p> Username : someone </p>
       <p> Password : // removed </p>
       Enter Username :  <br> <input type="text" name="username" value="" placeholder="David Cohen"> <br><br>
       Enter Password :  <br> <input type="password" name="password" value="" placeholder="*******" onkeypress='validate(event)'> <br><br>
       <input type="hidden" name="auth" value="false" />
        <input type="submit" value="Login">
        <br><br>
       <?php
        
       if (isset($_POST['username']) =='someone' && $_POST['auth'] =='true') {
            echo '<script>alert("copy : 74c5g94d67ea128ff778")</script>';
        } else {
           echo  '<span style="color:#dc143c;font-weight: 900;text-align:center;">Error</span>' ;
        }

?>
</form>



<br><br><br><br><br><br><br><br><br><br>

<hr>








<form method="post" >
Flag : <input type="text" name="flag" placeholder="flag here">
<br>
<input type="submit" class="btn btn-primary" value="validate" style="margin-top:20px;" />
<br>


<br>
 <?php

                 if (!isset($_POST['flag'])) {
                  echo  '<span style="color:#dc143c;font-weight: 900;text-align:center;">You dont have the flag yet</span>' ;
               }else{
                if ($_POST['flag']  ==  '74c5g94d67ea128ff778'  ) {
                  echo '<span style="color:#00cc00;font-weight: 900;text-align:center;">Good Job!<a href="WEB2.php"></span>';
              } 
               }
 
 ?>

</form>









<script>
function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>
<?php 
	include("down.php");
?>