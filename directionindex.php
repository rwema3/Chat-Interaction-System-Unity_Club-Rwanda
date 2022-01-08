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

?>

<html>
<head><title>Administration</title>

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

  margin-top: 40px;
  height: 200px;
  background: #000033;
  color: white;
  font-size: 15px;
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
    margin-left: -10px;
    color: white;
    text-align: center;
    font-family: cursive;
    font-size: 16px;
    width: 900px;
    height: 40px;
}
</style>
</head>
<center><img src="images/adb.jpg" width="900" height="130"> </center>
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
    
<p align="center" style="margin-top: 50px; font-size: 18px; font-family: cursive; color: skyblue;">
Hello <font color="#009900"> Admin <?php echo $_SESSION['username'] ?> </font> <br>
We know That you will like to control unity club interaction system <br> made four you as A unity club ADMINISTRATION
Becouse you know the benefits<br> of managing the members using this system<br>
<br>
Now you can send In Timetable schedules to send what <br>to want to the members and even to see your mettings Informations.<br>
but after to LOGOUT we no one can hacks you.
<br>
  </div>
</ul>
</table>
<button class="rwema"><font size="2" color="white">&copy by | Bagirishya Rwema Dominique | 2017.</button>
</center>
</body>
</html>
