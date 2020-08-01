<HTMLTYPE 5>
    <head>
   <link rel="stylesheet" type="text/css" href="sign up.css">
  <link rel="icon" type="image" href="nsv.png">

  <h1><center><br>
<font color=#719B8B></font>

<font color=#DE6D79>NET</font>
<font color=#00FFFF> SOLUTION</font>
<font color=#6BA7FF><br><br> <?php echo '<input value="' . date("d F Y H:i:s") . '"readonly/>';?> </font> </h1></center>
  
</head>
          <title> SIGN UP
          </title>
    <form method='post'>
           <div class="login-box">
           <img src="nsv.png" class="uganda">
  <center><br>

     
       name: <input type="text" name="name" placeholder="Enter name"><br><br>
      email:<input type="text" name="email" placeholder="Enter email"><br><br>
      password: <input type="password" name=" password" placeholder=" Password"><br><br>
       workno:  <input type="text" name="workno" placeholder="Enter workno"><br><br>
       contact:  <input type="text" name="contact" placeholder="Enter contact"><br><br>
       age:  <input type="text" name="age" placeholder="Enter age"><br><br>
       country:  <input type="text" name="country" placeholder="Enter country"><br><br>
       city:  <input type="text" name="city" placeholder="Enter city"><br><br>
         <button name="sub">save</button><br><br>

            <a href="login.php">LOGIN</a><br><br>
          <a href="replace password.php">Forget Password</a><br><br></center>

                 <font color=#719B8B><center>THE BEST CONNECTIVITY</center></font>


   <?php
 $con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error());
   
  if(isset($_POST['sub'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $workno=$_POST['workno'];
  $contact=$_POST['contact'];
  $age=$_POST['age'];
  $country=$_POST['country'];
  $city=$_POST['city'];
 
 
  $qry="insert into login values('$name','$email','$password','$workno','$contact','$age','$country','$city')";
  if($res=mysqli_query($con,$qry)){
	  echo"<script>alert('Records successfully saved')</script>"; header("Location: index.php");
  }else{
  echo"<center><font color=green size=15>Data Has not been saved</font></center>";}
  
  }
?>
  