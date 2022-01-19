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
$sql = "SELECT * FROM admin where username= '$session'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
       
       $sessionname=$row['username'];
    }
}
?>

<html>
<head><title>Settings</title>
<script src="validate/jquery-2.2.0.min.js"></script>
<link rel="icon" type="image/png" href="images/settings1.png">
<style type="text/css">

body{
  background-image: blue;
}

#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul li a,
#cssmenu #menu-button {

  margin: 3;
  padding: 0;
  border: none;
  list-style: none;
  line-height: none;
  display: block;
  position: relative;
  background: #000033;
}
#cssmenu:after,
#cssmenu > ul:after {
  content: ".";
  display: none;
  clear: both;
  visibility: all;
  line-height: none;
  height: none;
}

#cssmenu {
  width: auto;
  font-family:cursive;
  box-shadow: none; 
}

#cssmenu > ul > li {
  display: inline-block;
}
#cssmenu.align-center > ul {
  float: none;
  text-align: center;
}
#cssmenu.align-center > ul > li {
  float: none;
}
#cssmenu.align-center ul ul {
  text-align: right;
}
#cssmenu > ul > li > a {
  padding: 17px 25px 21px 25px;
  border-right: 1px solid blue/*color of small*/;
  text-decoration: none;
  font-size: 10px;
  font-weight: 400;
  color: green;
  text-transform: uppercase;
  letter-spacing: 1px;
}
#cssmenu > ul > li:hover > a,
#cssmenu > ul > li > a:hover,
#cssmenu > ul > li.active > a {
  color: white;
  background: green;
  
}
#cssmenu > ul > li.has-sub > a {
  padding-right: 40px;
}
#cssmenu > ul > li.has-sub > a::after {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-top-color: white;
  right: 18px;
  top: 22px;
}

#cssmenu ul ul {

  position: absolute;
  left: -9999px;
  top: 60px;
  padding-top: 6px;
  font-size: 13px;
  opacity: 1;
  -webkit-transition: top 0.2s ease, opacity 0.2s ease-in;
  -moz-transition: top 0.2s ease, opacity 0.2s ease-in;
  -ms-transition: top 0.2s ease, opacity 0.2s ease-in;
  -o-transition: top 0.2s ease, opacity 0.2s ease-in;
  transition: top 0.2s ease, opacity 0.2s ease-in;
}
}
#cssmenu.align-right ul ul {
  text-align: right;
}

#cssmenu > ul > li > ul::after {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border: 5px solid transparent;
  border-bottom-color;
  top: -4px;
  left: 20px;
}
#cssmenu.align-right > ul > li > ul::after {
  left: auto;
  right: 20px;
}
#cssmenu ul ul ul::after {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border: 5px solid transparent;
  border-right-color: red;
  top: 11px;
  left: -4px;
}
#cssmenu.align-right ul ul ul::after {
  border-right-color: initial;
  border-left-color: green;
  left: auto;
  right: -4px;
}
#cssmenu > ul > li > ul {
  top: 120px;
}
#cssmenu > ul > li:hover > ul {
  top: 52px;
  left: 2;
  opacity: 1;
}
#cssmenu.align-right > ul > li:hover > ul {
  left: auto;
  right: 0;
}

#cssmenu.align-right ul ul ul {
  padding-right: 6px;
}
#cssmenu ul ul > li:hover > ul {
  left: 180px;
  top: 0;
  opacity: 1;
}

#cssmenu ul ul li a {
  text-decoration: none;
  font-weight: 900;
  padding: 11px 25px;
  width: 180px;
  color: blue;
  background:white;
}

#cssmenu ul ul li:hover > a,
#cssmenu ul ul li.active > a
{
background-color:green;
}

div#main{

    width:70%;
    min-width: 913px;
    min-height: 400px;
    border:1px solid gray;
    border-radius:3px;
    background: #000033;

}


 div#main input[type="submit"],input[type="reset"]
 {

      color: white;
      font-size: 13px;
      background: #000033;
      font-family: cursive;
      width: 70px;
      height: 40px;
      position: center;
      font-style: bold;
    
     }

.success
{
  font-size:14px;
  font-family: cursive;
  margin-left: -60px;
  width: 330px;
  color:#008800;
  text-align:center;
  font-weight:bold;
  padding:10px 10px 10px 10px;
  border:#008000 thin solid;
  background:#EAFFEA url('tick.png') left center no-repeat;
}

    form { padding: 3.5em; }

    div#input .group {position: relative; margin-bottom: 2.4em; } 

   div#input label {

      color: green;
      font-size: 15px;
      font-weight: normal;
      font-family: cursive;
      position: absolute;
      pointer-events: none;
      top: 10px;
      transition: 0.2s ease all;
    } 

   div#input  input{
      color: #909090;
      font-size: 15px;
      padding: 10px 0px 10px 0px;
      display: block;
      outline: none;
      border: none;
      font-family: cursive;
      background: #000033;
      width: 300px;
      border-bottom: 1px solid #d2d2d2; 
    }

    /*Bars Animations*/
    
     div#input .bar{position: relative; display: block; width: 300px; }

     div#input .bar:before, .bar:after{
      content: "";
      height: 2px;
      width: 0;
      bottom: -1px;
      position: absolute;
      background: #5264ae;
      transition: 0.2s ease all;
    }

    div#input .bar:before {left: 50%; }
    div#input .bar:after {right: 50%; }

    /*INPUT VALIDATIONS*/

      div#input  input:valid {border-bottom: 1px solid #4fc24f; }

     div#input input:valid ~ .bar:before,
     div#input input:valid ~ .bar:after {
      background-color: #4fc24f !important;
        }

       div#input input:focus ~ label,
    div#input input.used ~ label {
      top: -20px;
      font-size: 13px;
      color: #5264ae;
    }

   div#input input:valid ~ label,
   div#input input:valid.used ~ label {
      color: #4fc24f;
    }

   div#input input:focus ~ .bar:before,
    div#input input:focus ~ .bar:after{
      width: 50%;
    }
.rwema{

   background-image: url(administ.jpg);
    border: 2px;
    margin-left: 10px;
    color: white;
    text-align: center;
    font-family: cursive;
    font-size: 16px;
    width: 900px;
    height: 40px;
}

</style>
</head>
<center><img src="images/adb.jpg" width="900" height="120"> </center>
<body background="images/wq.JPG"> <center>
<table border="0"><tr><td bgcolor="skyblue">
 <table border="0"><tr><td>
<div id='cssmenu'>
<ul>

      <li><a href="sendmessage.php"><span>Send Post</span></a></li>
   <li  class='has-sub'><a href='#'><span>Manage Members</span></a>
      <ul><li><a href="#"><span>View Member</span></a></li>
      </UL>
      <ul><li><a href="viewmember.php"><span>View All Member</span></a></li>
         <li><a href="deletemember.php"><span>Delete Member</span></a></li>
     <li><a href="deletepost.php"><span>Delete Posted Messages</span></a></li>
     </UL>
      <li  class='has-sub'><a href='#'><span> club Susponsers</span></a>
      <ul><li><a href="#"><span>View susponsersr</span></a></li>
      </UL>
      <ul><li><a href="saddress.php"><span>View Their Address</span></a></li>
    <li><a href="sdelete.php"><span>Delete Susponsers</span></a></li>
     </UL>
     <li><a href="ideasposted.php"><span>FeedBacks</span></a></li>
<li  class='has-sub'><a href='#'><span>Settings</span></a>
      <ul><li><a href="#"><span>Edit Account</span></a></li>
      </UL>
      <ul><li><a href="changeadminname.php"><span>Change Administrator name</span></a></li>
      <li><a href="changeadminpassword.php"><span>Change Admini Password</span></a></li>
        
     </UL>
  <li><a href="LOGOUT.php"><span>LOGOUT</span></a></li>
  </div></div>
</ul>
</table>
</center>
<div id="main">

<form action="changeadminname.php" method="Post">

<?php
if(isset($_POST['change']))
{
$password=$_POST['password'];
$oldpass = $_POST['password'];
$newfname = $_POST['fname'];
$newlname = $_POST['lname'];
$newusername = $_POST['username'];

$query="SELECT * FROM admin WHERE password='{$oldpass}' ";
$result = $conn->query($query);

if($result->num_rows > 0){

if ($password==$password) {

  $query="UPDATE admin SET fname='{$newfname}', lname='{$newlname}',username='{$newusername}'";
  $result = $conn->query($query);
  
     echo'  <p class="success"> Your Names has been successfuly changed!</p>';
     echo' <meta content="6;changeadminname.php" http-equiv="refresh" />';  
   }
   

   else{

  echo'  <p class="wrong">Wrong password!</p>';
  echo' <meta content="500;changeadminname.php" http-equiv="refresh" />';

  }
  }
  }
  ?>
  
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
<input type="password" pattern="[(a-z) (A-Z)\s]+$" name="password" maxlength="30" required>
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
</div></td></div>
</td></tr></div></td></div></td></tr></table></form></div>
<button class="rwema"><font size="2" color="white">&copy by | Bagirishya Rwema Dominique | 2017.</button>
</form>

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


    </form>


  </div>
</ul>
</table>
</center>
</body>
</html>
