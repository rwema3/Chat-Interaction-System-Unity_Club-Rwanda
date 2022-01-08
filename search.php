<?php session_start();

if(!isset($_SESSION['username'])){
  echo '<script>windows: location="direction.php"</script>';
  }
?>
<?php  
$session=$_SESSION['username'];
include("connect.php");
$result = mysql_query("SELECT * FROM admin where username= '$session'");
while($row = mysql_fetch_array($result))
  {
  $sessionname=$row['username'];

  }
  
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
 div#main input[type="text"]{

      color: white;
      font-size: 14px;
      background: #000033;
      font-family: cursive;
      width: 300px;
      height: 40px;
      position: center;
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
    font-family: cursive;

  }
  th{
  	background: white;
  	color: green;
  }
  table{
  	font-size: 15px;
  	font-family: comic;
  	color: #eeeeee;
  }
.worng{

    font-family:Arial, Helvetica, sans-serif;
    font-size:16px;
    width: 430px;
    font-family: cursive;
    margin-left: 20px;
    color:#FF0000;
    text-align:center;
    font-weight:bold;
    padding:5px 5px 5px 25px;
    border:#FF0000 solid;
    background:white url('worng.png') left center no-repeat; 
    border-radius: ;
}
</style>
</head>
<center><img src="banner/bestbanner.jpg" width="900" height="160"> </center>
<body background="images/bg.JPG"> <center>
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
<h1 align="center" style="font-size:20px; color: white;"> List &nbsp Of &nbsp Unity &nbsp Club &nbsp Members</h1>
<center>

<?php
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('membership') or die(mysql_error());
if (isset($_POST['search'])) {

  $valuetosearch=$_POST['valuetosearch'];
  $query="SELECT * FROM `users` WHERE concat(`id`, `fname`, `lname`, `username`, `phone`, `sex`,`district`, `province`,`password`) LIKE '%".$valuetosearch."%'";
  $search_result=filterTable($query);
}


else
{
  $user=$_SESSION['username'];

    $uc=strtoupper($user);

$query="SELECT * FROM `users`";
$search_result=filterTable($query);
}
function filterTable($query)
{
$connect=mysqli_connect("localhost","root","","membership");
$filter_result=mysqli_query($connect,$query);
return $filter_result;
}
?>

 <table>

<tr>
<th>Id</th><th>First Name</th> <th>Last name</th> <th>UserName</th> <th>Phone</th> <th>Sex</th> <th>District</th><th>province</th><th>Password</th>
</tr>

 <?php

  $search_result=filterTable($query);
  while ($row=mysqli_fetch_array($search_result)):
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['fname']."</td>";
  echo "<td>".$row['lname']."</td>";
  echo "<td>".$row['username']."</td>";
  echo "<td>".$row['phone']."</td>";
  echo "<td>".$row['sex']."</td>";
  echo "<td>".$row['district']."</td>";
  echo "<td>".$row['province']."</td>";
  echo "<td>".$row['password']."</td>";
    echo "</td>";
  echo "</tr>";
  endwhile;
  ?>

</form>
</center>


</div>

</body>

</html>
