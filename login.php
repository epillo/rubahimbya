<html>
<head>
    <link rel="stylesheet" type="text/css" href="index.css">
	<link rel="icon" type="image" href="nsv.png">

	<h1><center><br>
<font color=#719B8B>NET</font>
-
<font color=#DE6D79>SOLUTIONS</font>
<font color=#00FFFF> </font>
<font color=#6BA7FF> </font> </h1></center>
	
</head>

<title>LOGIN</title>
<body>

  <form method='post'>
  <div class="login-box">
  	 <img src="nsv.png" class="uganda">
  <center><br>
name: <input type="text" name="name" placeholder="Enter name"><br><br>

workno: <input type="text" name="workno" placeholder="Enter workno"><br><br>


password: <input type="password" name="password" placeholder="Enter Password"><br><br>
<a href="index.php"><button name='log'>Login</button></a><br><br>
 
  
 <a href="replace password.php">Forget Password</a><br><br>

<a href="index.php">HOME</a><br><br></center>


 <center>Powered By NET SOLTIONS</center>

<?php
 $con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error());
	
			 if(isset($_POST['name'])){
			 $name = ($_REQUEST['name']);
			 $workno =($_REQUEST['workno']);
			 $password = ($_REQUEST['password']);

        $query = "SELECT * FROM `login` WHERE name='$name' and workno='$workno' and password='$password'";
		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);

        if($rows==1){
			$_SESSION['name'] = $name;
			$_SESSION['workno'] =$workno;
			$_SESSION['password'] = $password;
			header("Location:index.php"); // Redirect user to Doctors.php
            }		else{
				echo "<div id='body'><h3><center><font color=green size=8>Details  are incorrect.</font></center></h3><br/><center></div>";
				}
			 }
?>
</div></form>
  </body>
  </html>
