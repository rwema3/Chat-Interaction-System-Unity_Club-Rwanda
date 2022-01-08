<?php session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "membership";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
 } 

 ?>
 <?php

if(!isset($_SESSION['username'])){
  echo '<script>windows: location="membership.php"</script>';
  }

$session=$_SESSION['username'];
$sql = "SELECT * FROM users where username= '$session'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
       
       $sessionname=$row['username'];
    }
}
?>


<!DOCTYPE html>
<html >
  <head>
  <meta charset="UTF-8">
  <title>Settings || <?php echo $_SESSION ["username"] ?> </title>
  <link rel="icon" type="image/png" href="images/settings2.png">
  <link rel="stylesheet" type="text/css" href="css/editmembers.css">
  <script src="validate/jquery-2.2.0.min.js"></script>

<style type="text/css">

body {
background-image: url(login3.jpg);
  
}

h1{
  color: white;
}

.menu .avatar .title img{
  margin-left: 400px;
}
.menu {
  height: 100vh;
  width: 220px;
  position: relative;
  top: 0;
  left: 5cm;
  color: white;
  z-index: 5;
  background-color:#000033;
  
}
.menu .avatar {
 
  padding: 2em 0.5em;
  text-align:justify;
  border-bottom: solid #47ade2;
  box-shadow: 4px 4px 4px 1px white;
  background-color: #003300;
  width:900px;
  height:88px;
  margin-left: 0px;
 
}
.menu .avatar .img {
  margin-bottom:2px;
  margin-top:-40px;
  border-radius:50%;
  width: 122px;
  height: 100px;
  border: 4px solid white;
  box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.2);
}
.menu .avatar .title .img{

  margin-bottom:70px;
  margin-top:40px;
  width: 122px;
  height: 100px;
  border-radius: 50%;
  border: 4px solid white;
  box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.2); 

}

.menu ul {
  list-style: none;
  padding: 0.5em 0 0;
  margin: 0;
    text-decoration:none;
  color:#CCCCCC;
  background-color:#999999;
  margin-top: 113px;
  
}

.menu ul li {
  padding: 0.5em 1em 0.5em 3.4em;
  font-size: 0.8em;
  color:#000000;
  background-repeat: no-repeat;
  background-position: left 15px center;
  background-size: auto 23px;
  transition: all 0.15s linear;
  cursor: pointer;
  margin-left:333px;
  text-decoration:none;
  background-color:#666666;
  
}
.menu ul li.icon-dashboard {
  
  border: 2px solid green;
  background: #000033;
  color: white;
  width:133px;
  font-size: 13px;
  margin-left:18px;
  height:24px;
  margin-bottom:2px;
}
.menu ul li.icon-new {

  border: 2px solid green;
  background: #000033;
  color: white;
  width:133px;
  font-size: 13px;
  margin-left:18px;
  height:24px;
  margin-bottom:2px;
}

.menu ul li.icon-customers {

  border: 2px solid green;
  background: #000033;
  color: white;
  font-size: 13px;
  width:133px;
  margin-left:18px;
  height:24px;
  margin-bottom:2px;

}
.menu ul li.icon-users {

  border: 2px solid green;
  background: #000033;
  color: white;
  width:133px;
  font-size: 13px;
  margin-left:18px;
  height:24px;
  margin-bottom:2px;
  }
  
    
.menu ul li.icon-message {
   
  border: 2px solid green;
  background: #000033;
  color: white;
  width:133px;
  font-size: 13px;
  margin-left:18px;
  height:24px;
  margin-bottom:2px;
}
.menu ul li.icon-settings {
  border: 2px solid green;
  background: #000033;
  color: white;
  width:133px;
  margin-left:18px;
  height:24px;
  font-size: 13px;
  margin-bottom:2px;
  margin-top: 2px;
}
  
.menu ul li.icon-logout {

  border: 2px solid green;
  background: #000033;
  color: white;
  width:133px;
  margin-left:18px;
  height:24px;
  font-size: 13px;
  margin-bottom:100px;
}


.menu ul li:hover {
background: white;
    background: -webkit-linear-gradient(top, blue 0%,#00CCCC  100%);
    background: -moz-linear-gradient(top, blue 0%,#00CCCC  100%);
    background: -o-linear-gradient(top, blue 0%,#00CCCC  100%);
    background: -ms-linear-gradient(top, blue 0%,#00CCCC  100%);
    background: linear-gradient(top, blue 0%,#00CCCC  100%);

}

div#item{

    width:50%;
    min-width: 700px;
    min-height: 500px;
    margin-top: -500px;
    margin-left: 410px;
    border:1px solid gray;
    border-radius:10px;
    background: #000033;
    color: white;
    opacity: 0.9;

}
.items{

  margin-top: 70px;

}
.wrong
{
  font-size:17px;
  font-family: cursive;
  margin-left: -60px;
  color:#FF0000;
  width: 330px;
  text-align:center;
  font-weight:bold;
  padding:5px 5px 5px 25px;
  border:#FF0000 solid;
  background:white url('wrong.png') left center no-repeat;
}

</style>

</head>

  <body>

  <div id="main">

  <nav class="menu" tabindex="0">
  <div class="avatar">
  <div class="title">
   <center><img src="images/logo.png"></center>
   </div>
 
   <?php
$session=$_SESSION['username'];
$select="SELECT * from users where username='$session'";
$result = $conn->query($sql);

 $fetch = $result->fetch_array();

$prof='<img src="data:image/jpeg;base64,'.base64_encode($fetch['profile']).'" class="img" alt="Upload Profile">';
echo $prof;
?>

  <h3>
   <font size="4px" style="font-family: cursive; color: white;"><?php echo $_SESSION['username'] ?></font>
   <sub style="color: green;">&nbsp&nbsp&nbsp&nbsp<br><img src="images/tick.png"> Online</sub>
   </h3>
  </div>
  <div class="login-triangle">
    <ul>
    <a href="memberindex.php" style="text-decoration:none;"> <li tabindex="0" class="icon-dashboard"><span>Home</span></li></a>
    <a href="upload.php"style="text-decoration:none;"><li tabindex="0" class="icon-new"><span>Change profile</span></li></a>
     <a href="posted.php"style="text-decoration:none;"><li tabindex="0" class="icon-customers"><span>Income Message</span></li></a>
     <a href="metting.php"style="text-decoration:none;"><li tabindex="0" class="icon-customers"><span>Join Meeting Now</span></li></a>
    <a href="todayschedule.php"style="text-decoration:none;"> <li tabindex="0" class="icon-users"><span>Timetable Tour</span></li></a>
    <a href=" editmember.php"style="text-decoration:none;"><li tabindex="0" class="icon-message"><span>Edit Account </span></li></a>
     <a href="logout2.php"style="text-decoration:none;"> <li tabindex="0" class="icon-logout"><span>Logout</span></li></a>
  </ul>
  </div>
</nav>
<div id="item" align="center">

<form action="editmember.php" method="Post" style="margin-top: 30px;">

<?php

if(isset($_POST['change']))

{

$password=$_POST['password'];
$oldpass = $_POST['password'];
$newfname = $_POST['fname'];
$newlname = $_POST['lname'];
$newusername = $_POST['username'];

$query="SELECT * FROM users WHERE password='{$oldpass}'";
$result = $conn->query($query);

if($result->num_rows > 0){

if ($password==$password) {
 
  $query="UPDATE users SET fname='{$newfname}', lname='{$newlname}',username='{$newusername}' WHERE password='{$oldpass}'";
  $result = $conn->query($query);

  if($query){

     echo'  <p class="success"> Your Names has been successfuly changed!</p>';
     echo' <meta content="6;membership.php" http-equiv="refresh" />';  

    }     
   }
   

   else{

  echo'  <p class="wrong">Wrong password!</p>';
  echo' <meta content="500;editmember.php" http-equiv="refresh" />';

  }
  }
  }
  ?>
  <div class="items">

<table border="0" align="center"  width="680" style="margin-top: 50px;">

<tr>
<td> 
<div id="input">
<div class="group">
<input type="text"  pattern="[(a-z) (A-Z)\s]+$"  name="fname" maxlength="30" required>
<label>New First Name</label>
<span class="bar"></span>
</div></td>

<td>
<div id="input">
<div class="group">
<input type="text"  name="lname" maxlength="30" required>
<label>New Last Name</label>
<span class="bar"></span>
</div>
    </td>
    </tr><tr>
      <td>
<div id="input">
<div class="group">
<input type="text" pattern="[(a-z) (A-Z)\s]+$" name="username" maxlength="30" required>
<label> New UserName</label>
<span class="bar"></span>
</div>
    </td>
     <td>
<div id="input">
<div class="group">
<input type="password" name="password" maxlength="30" required>
<label>Enter Current Password</label>
<span class="bar"></span>
</div>
  </td>
</tr>
</table>

<table align="center">
<tr><td>
    <input type="submit" name="change" value="Change">

</td>
</td>
</tr>
</table>
</div>
</form>

<div class="pass">

<form accept="editmember.php" method="POST">

<?php

if(isset($_POST['changepass']))
{
$oldpass = $_POST['old_password'];
$newpass = $_POST['new_password'];
$confirmpass = $_POST['confirm_password'];

$query="SELECT * FROM users WHERE password='{$oldpass}' ";

$result = $conn->query($query);

if($result->num_rows > 0){

    if($newpass!=$confirmpass){

         echo"<meta content='4';><p class='wrong'>New password and Confirm Password Doesn't Match</p>";                                
      
       }
       elseif($newpass==$oldpass){

         echo"<meta content='4';><p class='wrong'>same new and current password.</p>";                                
       
       }
       else
       {
  $query="UPDATE users SET password='{$newpass}', repassword='{$confirmpass}' WHERE password='{$oldpass}'";
  $result = $conn->query($query);

     echo'  <p class="success"> Your password has been changed successfuly!</p>';
      echo' <meta content="7;editmember.php" http-equiv="refresh" />';  
   }
   }

else

{

 echo'<p class="wrong">Wrong Current password!</p>';
 echo' <meta content="5;editmember.php" http-equiv="refresh" />';
}
}
?>


    <table align="center" style="margin-top: 50px;">
    <tr>
<td class="current">
<div id="input">
<div class="group">
<input type="password"  name="old_password" minlength="4" maxlength="30" required >
<label>current Password</label>
<span class="bar"></span>
</div>
    </td>
    </tr>
    </table>
<table border="0" align="center"  width="680" style="margin-top: -20px;">
    <tr>
      <td>
<div id="input">
<div class="group">
<input type="password" name="new_password" minlength="4" maxlength="30" required>
<label> New Password</label>
<span class="bar"></span>
</div>

 </td>
 <td>

<div id="input">
<div class="group">
<input type="password" name="confirm_password" minlength="4" maxlength="30" required>
<label>Confirm Password</label>
<span class="bar"></span>
</div>
  </td>
</tr>
</table>

<table align="center">
<tr><td>
    <input type="submit" name="changepass" value="Change">

</td>
</td>
</tr>
</table>
  </div>
</ul>

</table>
</form>
</div>


<script>
  
  $(document).ready(function() {

    $('input').blur(function() {

      if ($(this).val())
        $(this).addClass('used');
      else
        $(this).removeClass('used')

    });


  });


</script>

</body>
</html>