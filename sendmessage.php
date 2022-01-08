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
<head><title>Write...</title>
<link rel="icon" type="image/png" href="images/edit1.png">
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
  padding: 18px 25px 21px 25px;
  border-right: 1px solid blue/*color of small lines*/;
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
  right: 17px;
  top: 22px;
}

#cssmenu ul ul {

  position: absolute;
  left: -9999px;
  top: 60px;
  padding-top: 6px;
  font-size: 13px;
  opacity: 0;
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
textarea{

  margin-top: 30px;
  height: 200px;
  width: 237px;
  background: #000033;
  color: white;
  font-size: 15px;
}
.success
{
  font-size:14px;
  font-family: cursive;
  margin-left: -60px;
  height: 20px;
  width: 330px;
  color:#008800;
  text-align:center;
  font-weight:none;
  border:#008000 thin solid;
  background:white;
}
.post
{
  font-size:14px;
  font-family: cursive;
  margin-left: -3px;
  height: 20px;
  width: 330px;
  color:#008800;
  text-align:center;
  font-weight:none;
  border:#008000 thin solid;
  background:white;
  border-radius: 10px;
}
 div#main input[type="submit"],input[type="reset"]{

      color: white;
      font-size: 14px;
      background: #000033;
      font-family: cursive;
      width: 70px;
      height: 40px;
      position: center;
    }


   th {
    background-color: #adaaaa;
    color: ;
    height: 20px;
    font-family: comic;

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
     <li><a href="ideasposted.php"><span>COMMENTS</span></a></li>
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

<p style="color: white; text-align: center; font-family: cursive;">WRITE MESSAGES OUR MEMBERS</p>

<form action="sendmessage.php" method="POST">

<?php

if(isset($_POST['send']))
 {

$query="INSERT INTO posts(activitymean) VALUES('$_POST[activitymean]')";
$result = $conn->query($query);

if ($query)
  {
 
echo'<center class=post>Message Is Sent</center>';
echo'  <meta content="3;sendmessage.php" http-equiv="refresh" />';
  }
  else
  {

  echo'<center >message sent not</center>';
  echo'  <meta content="1;sendmessage.php" http-equiv="refresh" />';
}
}


?>


<div style="margin-left: 20px;">
<textarea cols="30" rows="7" name="activitymean" maxlength="345" placeholder="Write..." required></textarea >
<br>
<input type="submit" name="send" value="Send" style="border-radius: 10px;">
<input type="reset" name="go" value="Clear" style="border-radius: 10px;">

</form>


</div>
<div align="center" style="margin-top: -265px; margin-left: 240px;">

<form action="sendmessage.php" method="POST">

<?php
 
if(isset($_POST['schedule']))
 {

$query="INSERT INTO schedule(actname,actdate,actstart,actplace,actlocation) VALUES('$_POST[actname]','$_POST[actdate]','$_POST[actstart]',
'$_POST[actplace]','$_POST[actlocation]')";

$result = $conn->query($query);

if ($query)
  {
 
echo'<center class=success>Successfully Posted.</center>';
echo'  <meta content="5;sendmessage.php" http-equiv="refresh" />';
  }
  else
  {

  echo'<center >message sent not</center>';
  echo'  <meta content="1;sendmessage.php" http-equiv="refresh" />';
}
}

?>

<style type="text/css">
  .actname{

background: blue;
color: white;
font-family: cursive;
  }

.in{
  background:#000033;
  height: 40px;
  color: white;
  font-family: cursive;
  font-size: 14px;
}

</style>

<table>

<font color="white" style="font-family: cursive;"><u>Time Table Schedule</u></font>

<th class="actname"> Activity Name</th> <th class="actname">Date</th><th class="actname">Start Time</th><th class="actname">Place</th><th class="actname">Location</th>

<tr><td><input type="text" pattern="[(a-z) (A-Z)]+$" name="actname" class="in" style="width: 140px;" required></td><td><input type="date"

 name="actdate" style="width: 140px;"  class="in" required>

</td><td><input type="time" name="actstart" style="width: 110px;" class="in" required></td><td><input type="text" name="actplace" pattern="[(a-z) (A-Z)]+$" class="in" style="width: 100px;" required></td>

<td><input type="text" pattern="[(a-z) (A-Z)]+$" name="actlocation" style="width:100px;" class="in" required></td></tr>

</table>

<input type="submit" name="schedule" value="send" style="margin-top: 20px; border-radius: none;">

</div>
</div></form></div>
<button class="rwema"><font size="2" color="white">&copy by | Bagirishya Rwema Dominique | 2017.</button>
</body>

</html>
