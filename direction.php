<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "membership";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);
} 

if (!isset($_SESSION)) {
   session_start();
}
?>

<html>
<head>
<title>Club --Directions</title>
<link rel="icon" type="image/png" href="images/admin.png">
<link rel="stylesheet" type="text/css" href="css/indexs.css">
<style type="text/css">

  div#main{

    width: 400px;
    height: 400px;
    border:1px solid gray;
    border-radius:3px;
    background-image: url(administ.jpg);
    box-shadow: 100px;
    margin-left: 25%;

}
div#main .header{

    width: 100%;
    height: 80px;
    color: white;
    font-family: whitrabt; 
    background: white;
    background: -webkit-linear-gradient(top, blue 0%,#00CCCC  100%);
    background: -moz-linear-gradient(top, blue 0%,#00CCCC  100%);
    background: -o-linear-gradient(top, blue 0%,#00CCCC  100%);
    background: -ms-linear-gradient(top, blue 0%,#00CCCC  100%);
    background: linear-gradient(top, blue 0%,#00CCCC  100%);
    -webkit-border-radius: none;
    -moz-border-radius: none;
    border-radius: none;
    z-index:2;
}

div#main .header .logo
{
    float: left;
    margin: 5px;
    width:20%;
    background: none;
    height: 70px;
    padding:10px;
}


div#main .header img
{
margin-right: 170px;
height: 70px;
width: 100px;
}

form { padding: 1.5em; }
        .group {position: relative; margin-bottom: 1.2em; }

        label {

            color: white;
            font-size: 17px;
            font-weight: normal;
            font-family: cursive;
            position: absolute;
            pointer-events: none;
            top: 10px;
            transition: 0.2s ease all;
        } 

        input[type="text"]

        {
            color: #909090;
            background-image: url(administ.jpg);
            font-size: 15px;
            padding: 10px 0px 10px 0px;
            width: 270px;
            border-bottom: 1px solid green;
            margin-bottom: 0px; 
        }

   input[type="password"]

        {
            color: #909090;
            font-size: 15px;
            padding: 10px 5px 10px 0px;
            width: 270px;
            background-image: url(administ.jpg);
            border-bottom: 1px solid green; 

        }
       

        .bar{position: relative; display: block; width: 270px; }

        .bar:before, .bar:after{
            content: "";
            height: 2px;
            width: 0;
            bottom: -1px;
            position: absolute;
            background: red;
            transition: 0.2s ease all;
        }
        .bar:before {left: 50%; }
        .bar:after {right: 50%; }

        input:valid {border-bottom: 1px solid green; }

        input:valid ~ .bar:before,
        input:valid ~ .bar:after{
            background-color: green !important;
        }

        input:focus ~ label,
        input.used ~ label {
            top: -12px;
            font-size: 13px;
            color:green;
        }

        input:valid ~ label,
        input:valid.used ~ label {
            color: green;
        }
        input:focus ~ .bar:before,
        input:focus ~ .bar:after{
            width: 50%;
        }
.wrong
{
    font-size:17px;
    width: 340px;
    font-family: cursive;
    margin-top: -30px;
    margin-right: -20px;
    color:#FF0000;
    text-align: left;
    font-weight:bold;
    padding:5px 5px 5px 25px;
    border:#FF0000 thin solid;
    background: url('wrong.png') left center no-repeat;
}
.success
{
    font-size:14px;
    width: 340px;
    font-family: comic;
     margin-top: -30px;
    margin-right: -20px;
    color:#008800;
    text-align:center;
    font-weight:bold;
    padding:10px 10px 10px 10px;
    border:#008000 thin solid;
    background:  right center no-repeat;
}

   div#main input[type="submit"]{
      color: white;
      font-size: 14px;
      background-image: url(wq.jpg);
      font-family: cursive;
      width: 130px;
      height: 50px;
      position: center;

    } 
      div#main input[type="reset"]{
      color: white;
      font-size: 14px;
      background: #000033;
      font-family: cursive;
      width: 130px;
      height: 50px;
      position: center;
      background-image: url(wq.jpg);
}
        td .link{
          color:white;
        margin-top: 300px;
        font-size: 17px;
        }
        p{
          position: absolute;
          margin-top: 40px;
          margin-right: 400px;
        }

    .rwema{

    background: white;
    background: -webkit-linear-gradient(top, blue 0%,#00CCCC  100%);
    background: -moz-linear-gradient(top, blue 0%,#00CCCC  100%);
    background: -o-linear-gradient(top, blue 0%,#00CCCC  100%);
    background: -ms-linear-gradient(top, blue 0%,#00CCCC  100%);
    background: linear-gradient(top, blue 0%,#00CCCC  100%);
    -webkit-border-radius: none;
    -moz-border-radius: none;
    border-radius: none;
    z-index:2;
    border: 2px;
    color: white;
    text-align: center;
    font-family: cursive;
    font-size: 16px;
    width: 900px;
    height: 40px;
}
        
.dominique{
    width: 900px;
    height: 400px;
    background-image: url(administ.jpg);
    margin-top: -50px;
}
.body
{
    margin: 40px auto;
    margin-top: 10px;
    width: 900px;
}
</style>

</head>

<body background="images/back.JPG">
<div class="body">

<table border="0" align="center"  width="680">

<tr><td colspan="3"> <center><img src="images/ramos.jpg" width="900" height="140"></center> </td></tr>

<tr><td align="center" colspan="3">

<ul class="menu">
    <li><a href="index.php">Who we are</a></li>
    <li><a href="membership.php">registration & login</a></li>
  <li><a href="direction.php">Administration</a></li>
    <li><a href="news.php">Unity Club News</a></li>
   <li><a href="susponser.php">Sponsors form</a></li>
    <li><a href="contactus.php">Contact Us</a></li>
</ul>
</td></tr>
</table>

<div class="dominique">
<div id="main" align="right">
<div class="header">
<img src="images/user.png"></div>
<br>

<form action ="direction.php" method="POST">


<?php 

//if the login form is submitted

if (isset($_POST['admin'])) { // if form has been submitted
//if (!get_magic_quotes_gpc()) {


  $password = $_POST['password'];
  $username = $_POST['username'];
  
$sql = "SELECT * FROM admin where username = '$username'and password='$password'";
  $result = $conn->query($sql);
      
  echo "<div class=error>";   
  
  $count_row = $result->num_rows;

  if ($count_row == 0) {

    echo '<center class=wrong>Unknown Administrator And Password</center></center>';
    
    }
    
    else
    {

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    
    //then redirect them to the members area
    echo '<center class=success>please Wait.... <img src="images/loading.gif" ></center></center>';
    echo "<META http-equiv=refresh content=3;URL=directionindex.php>";

    }
    
    echo "</div>";
    
    }
    
?>


<table border="0" align="center"  width="680">
    <tr>
<td>  <div class="group">
<input type="text"  name="username" maxlength="30" autocomplete="off" required > 
<label>Username</label>
<span class="bar"></span>
</div>
</tr>
<br>
<tr>
</td>
    <td><div class="group">
<input type="password"  name="password" maxlength="30" required > 
<label>Password</label>
<span class="bar"></span>
</div>
</td>
</tr>
<tr>
<td>
<input type="submit" name="admin" value="Login">&nbsp&nbsp<input type="reset" value="CANCEL">
</td>
<tr><td ><p align="center"><a href="remember.php" class="link">Forget Password?</a></p></td></tr>
</tr>
</td></tr></table></form></div>
</div>
<br>
<button class="rwema"><font size="2" color="white">&copy by | Bagirishya Rwema Dominique | 2017.</button>
</font></button></div></body></html>
