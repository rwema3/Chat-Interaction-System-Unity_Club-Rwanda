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
<title>Remember Password</title>
<link rel="icon" type="image/png" href="images/admin.png">
<link rel="stylesheet" type="text/css" href="css/indexs.css">
<script src="validate/jquery-2.2.0.min.js"></script>
<style>
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
        .group {
          position: relative; 
          margin-top:  1.40em; 
        }

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
            color: white;
            background-image: url(administ.jpg);
            font-size: 18px;
            padding: 10px 0px 10px 0px;
            width: 270px;
            font-family: cursive;
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
    font-family: cursive;
    margin-top: -20px;
    height: 30px;
    margin-right: -15px;
    color:#008800;
    text-align:center;
    font-weight:bold;
    border:#008000 solid;
    background:white url('Ated.jpg') left center no-repeat;
}

   div#main input[type="submit"]{
      color: white;
      font-size: 14px;
      background-image: url(wq.jpg);
      font-family: cursive;
      width: 130px;
      height: 50px;
      margin-right: 40px;
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
    margin-left: 215px;
    color: white;
    text-align: center;
    font-family: cursive;
    font-size: 16px;
    width: 900px;
    height: 40px;
    margin-top: 5px;
}
        
.dominique{
    width: 900px;
    height: 400px;
    background-image: url(administ.jpg);
    margin-top: -50px;
  
}
.login{
       color: white;
      font-size: 14px;
      background: #000033;
      font-family: cursive;
      width: 130px;
      height: 50px;
      position: center;
      background-image: url(wq.jpg);
      margin-right: 50px;

}
a{
  color: white;
}
.chelsea{

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

<form method="POST">
<?php
 
 
 if(isset($_POST['remember']))

  {
    
   $firstname=$_POST['fname'];
   
    $lastname=$_POST['lname'];

    $username=$_POST['username'];

   $sql="SELECT * FROM admin where fname='$firstname' AND lname='$lastname' AND username='$username' ;"; 
   $result_set=mysql_query($sql,$connexion);
   if(!$result_set)
   {
   die("Query faill".mysql_error());
   }
if(mysql_num_rows($result_set)>0)
{

//$num=mysql_num_rows($result_set);
while($row=mysql_fetch_array($result_set))
{
$password=$row[4];

echo"<p class='success'>"."Hii Your password  Was: &nbsp<font color='blue' size='4'><u>".$password."</u></font></p>";

echo'<meta content="15;remember.php" http-equiv="refresh" />';
}}
else
{
echo"<p class='wrong'>&nbsp; unknown information </p>";
}
}

?>

<table border="0" align="center"  width="680">
    <tr>
<td> 
<div id="input">
<div class="group">
<input type="text"  pattern="[(a-z) (A-Z)\s]+$"  name="fname" autocomplete="off" maxlength="30" required>
<label>First Name</label>
<span class="bar"></span>
</div></td>
</tr>
<tr>
    <td>
    <div id="input">
          <div class="group">
<input type="text"  name="lname" maxlength="30" autocomplete="off" required>
<label>Last Name</label>
<span class="bar"></span>
</div>
    </td>
    </tr><tr>
      <td>
<div id="input">
<div class="group">
<input type="text" pattern="[(a-z) (A-Z)\s]+$" name="username" autocomplete="off" maxlength="30" required>
<label>User Name</label>
<span class="bar"></span>
</div>
    </td>
</tr>
</table>
<table><tr><td>
    <input type="submit" name="remember" value="Remind Us">

</td>
<td><button class="login"><a href="direction.php">back</a></button>
</td>
    </tr>
    </td></tr>
  </table>
</div>
</div>
  </form>
<button class="chelsea"><font size="2" color="white">&copy by | Bagirishya Rwema Dominique | 2017.</button>

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
</div>
</body>
</html>