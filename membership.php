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

<?php include("connect.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Account | Login</title>

  <link rel="stylesheet" type="text/css" href="css/indexs.css">
  <link rel="icon" type="image/png" href="images/uclogo.jpg">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="validate/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="validate/script.js"></script>
   <style type="text/css">
     
select {
            color:white;
            font-size: 12px;
            padding: 10px 0px 10px 0px;
            width: 270px;
            height: 40px;
            background: #000033;
            border-bottom: 1px solid green; 
        }
  .accept{
    color: white;
    font-size:17px; 
    font-family: cursive;
}

 a {
    font-size: 25px;
    font-family: cursive;
    position: relative;
    color: #000033;
}
.accept a{
    font-size: 13px;
    color: white;
}
div#main{
    margin-top:-50px;
    width:60%;
    min-width: 900px;
    min-height: 500px;
    border:1px solid gray;
    border-radius:3px;
    background: #000033;

}
div#main .header{
    width: 900px;
    height: 100px;
    color: white;
    font-family: cursive;
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



div#sign label {

      color: white;
      font-size: 17px;
      font-family: comic;
      font-weight: normal;
      font-family: cursive;
      position: absolute;
      pointer-events: none;
      top: 2px;
      transition: 0.2s ease all;
    } 
    div#sign input[type="text"],input[type="password"] {
      color: white;
      font-size: 17px;
      padding: 20px 0px 10px 0px;
      display: block;
      background: #000033;
      outline: none;
      border: none;
      width: 270px;
      height: 3px;
      border-bottom: 1px solid white;
    }

     div#sign input[type="submit"]{
        color: white;
      font-size: 17px;
      background: #000033;
      font-family: cursive;
      width: 150px;
      height: 50px;
      position: center;
    }

  form {

    padding: 3.5em;
    margin-top: -40px;

   }

    .group {position: relative; margin-bottom: 2.3em; }


     div#main label {

      color: white;
      font-size: 17px;
      font-family: comic;
      font-weight: normal;
      font-family: cursive;
      position: absolute;
      pointer-events: none;
      top: 2px;
      transition: 0.2s ease all;

    } 
    
      div#main input[type="text"],input[type="password"] {
      color: white;
      font-size: 17px;
      padding: 20px 0px 10px 0px;
      display: block;
      background: #000033;
      outline: none;
      border: none;
      width: 270px;
      height: 3px;
      border-bottom: 1px solid white; 
    }

     div#main input[type="submit"],input[type="reset"]

     {

      color: white;
      font-size: 14px;
      background: #000033;
      font-family: cursive;
      width: 150px;
      height: 50px;
      position: center;

    } 

    .login{
      color: white;
      font-size: 14px;
      background: #000033;
      font-family: cursive;
      width: 90px;
      height: 40px;
      border-radius: 18px;
    }
    
    div#input .bar{position: relative; display: block; width: 270px; }

    div#input .bar:before, .bar:after{
      content: "";
      height: 2px;
      width: 0;
      bottom: -1px;
      position: absolute;
      background: #FF0000;
      transition: 0.2s ease all;
    }
    div#input .bar:before {left: 50%; }
    div#input .bar:after {right: 50%; }

    div#input input:valid {border-bottom: 1px solid white; }

    div#input input:valid ~ .bar:before,
    div#input input:valid ~ .bar:after{

      background-color: white !important;

    }

    div#input input:focus ~ label,
    div#input input.used ~ label {
      top: -20px;
      font-size: 15px;
      color: red ;
    }

    div#input input:valid ~ label,
    div#input input:valid.used ~ label{
      color: white;
    }
    div#input input:focus ~ .bar:before,
    div#input input:focus ~ .bar:after{
      width: 50%;
    }

    .district
    {

    color: white;
    font-family: cursive;

    }

    .wrong
{
    font-family:Arial, Helvetica, sans-serif;
    font-size:16px;
    width: 370px;
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

.success

{
    font-family:Arial, Helvetica, sans-serif;
    font-size:16px;
    font-family: cursive;
    width: 370px;
    color:#008800;
    margin-left: 130px;
    text-align:center;
    font-weight:bold;
    padding:5px 5px 10px 10px;
    border:#008000 thin solid;
    background:#EAFFEA url('tick.png') left center no-repeat;
    box-shadow:solid;
}

.access

{

    font-family:cursive;
    margin-top: -3px;
    font-size:16px;
    font-family: cursive;
    width: 500px;
    height: 30px;
    color:#008800;
    margin-left: 0px;
    text-align:center;
    font-weight:bold;
    border:#008000 thin solid;
    background:#EAFFEA url('tick.png') left center no-repeat;
}

div#sign{

   width: 500px;
   height: 340px;
   background: white;
   margin-top: 130px;
   margin-left: 300px;
   background-color: #000033;
    border: 1px solid green;
    display: inline-block ;
    border-radius: 10px;
    border: 30px;
    border-bottom:solid;
    box-sizing: 2px;
    box-shadow: transparent;
   border-top: 7px;
   border-bottom-color: green;
   opacity: none;

}


/*CSS FOR NEW DOCUMENT OF OVER LOGIN FORM*/

div.over{

   width:100%;
   height: 118%;
   margin-top: -7px;
   margin-left: -7px;
   position: absolute;
   background-image: url(back.jpg);
   z-index: 3;
   opacity: none;

}


div.over .close{

   position: absolute;
   top: 40px;
   left: 70%;
   border-radius: 5px;
   background: #000033;
   color: white;
   font-weight: bold;
   font-size: 20px;
   text-align: center;
   padding: 20px;
   box-shadow: 2px 2px 2px ;
   font-family:cursive;


}

div.over .close:hover{
   cursor: pointer;
   opacity: 0.5;
   transition: all 0.5s ease-in-out;
   transform:rotate(20520deg);
}

button#login{
   border:1px solid green;
   padding: 10px;
   border-radius: none;
   color: yellow;
   background:#000033;

}

button#login:hover{
   cursor: pointer;
   opacity: 0.5;
   color:green;
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
    margin-top: 7px;
    border: 2px;
    color: white;
    text-align: center;
    font-family: cursive;
    font-size: 16px;
    width: 900px;
    height: 40px;

}

   </style>
  <style type="text/css">

div#baji{
  width: 450px;
  height: 230px;
    border:1px solid gray;
    border-radius:3px;
    background-image: url(images/baj.jpg);
    font-family: cursive;
    color: black;


}
.name{
  margin-top: 70px;
}
.sex{
    margin-top: -30px;
}
.dis{
  margin-top: -30px;
}.sign{
    margin-top: -10px;
}
.logo{
    margin-right: 40px;
}
div#baji .ba{
    margin-top: -100px;
}
.copy{

    font-size: 8px;
    color:green;
    margin-top: -33px;
    margin-left: 100px;
}

.rwanda{
        margin-left: 80px;
    }
    button{

        margin-top: -500px;
    }

.body

{

    margin: 40px auto;
    margin-top: 10px;
    width: 900px;
}

</style>
</head>
<body onload="dothis();">

   <div class="over">

   <div class="close">

   Sign Up

   </div>
      
<form action="membership.php" method="POST">

<div align="center" id="sign" >

<?php 
//if the login form is submitted
if (isset($_POST['sign'])) { // if form has been submitted
//if (!get_magic_quotes_gpc()) {

  $password = $_POST['password'];
  $username = $_POST['username'];
  //if the login form is submitted
$sql = "SELECT * FROM users where username = '$username' and password='$password'";

  $result = $conn->query($sql);
   //if the login form is submitted   
  echo "<div class=error>";   
  
  $count_row = $result->num_rows;
//if the login form is submitted
  if ($count_row == 0) {

    echo '<center class=wrong>Unvalid Member Account</center></center>';
    echo "<META http-equiv=refresh content=3; URL=membership.php>";
    
    }
    
    else
    {

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    
    //then redirect them to the members area
    echo '<center class=access>please Wait.... <img src="images/loading.gif " ></center></center>';
    echo "<META http-equiv=refresh content=4;URL=memberindex.php>";
    
    }
    
    echo "</div>";
    
    }
    
?>


<p align="center" style="font-family: cursive;color: white;">HAVE A MEMBER ACCOUNT? LOGIN</p>

<table border="0" style="margin-top: 40px;">

    <tr >

<td>

    <div id="input">

          <div class="group" >

<input type="text" pattern="[(a-z) (A-Z)\s]+$" minlength="4" minlength="8" maxlength="30" name="username" autocomplete="off" required>

<label>Username</label>
<span class="bar"></span>
</div>
</div>
    </td>
    </tr>
    <tr>
    <td>

<div id="input">
<div class="group">
<input type="password" name="password"  maxlength="30" autocomplete="off" required>
<label>Password</label>
<span class="bar"></span>

</div>
    </td>
</tr>
<tr>
  <td>
  <span><input type="submit" name="sign" value="Sign In" align="center"> &nbsp <input type="reset" value="RESET" align="center"></span></td>
  </tr></div>
  </div>
  </td></tr></table></form>



      </div>
   </div>

</form></div>
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
  <div id="main">
       <div class="header">
    Already A Have Memmber Account
                <div style="background:none; margin-left: 800px;" class="login"><br>
                      <p><button id="login">Login</button></p>
                </div>
         </div>



<form  action="login.php" method="POST" >
<br>
<table border="0" align="center"  width="680">

    <tr>
<td> 
<div id="input">
<div class="group">
<input type="text"  pattern="[(a-z) (A-Z)\s]+$" name="fname" maxlength="19" minlength="3" pattern="[(a-z) (A-Z) /(')]+$"  autocomplete="off" required >
<label>First Name</label>
<span class="bar"></span>
</div></td>

    <td>
    <div id="input">
          <div class="group">
<input type="text" pattern="[(a-z) (A-Z)\s]+$" name="lname"  maxlength="15" minlength="3" pattern="[(a-z) (A-Z)]+$" autocomplete="off" required >
<label>Last Name</label>
<span class="bar"></span>
</div>
    </td>
      <td>
<div id="input">
<div class="group">
<input type="text" pattern="[(a-z) (A-Z)\s]+$" name="username"  maxlength="15" minlength="3" pattern="[(a-z) (A-Z)]+$" autocomplete="off" required >
<label>User Name</label>
<span class="bar"></span>
</div>
    </td>

</tr>

   <tr>
   <td>
   <div id="input">
          <div class="group">
<input type="text" minlength="10" maxlength="10" pattern="[0-9]+$" name="phone" autocomplete="off" required >
<label>Phone-Number</label>
<span class="bar"></span>
</div>
    </td>
    <td><div class="district">District:</div>
  <div class="group">
<select required name="district">
<option ></option>
<option >Muhanga</option>
<option >Nyarugenge</option>
<option >Ruhango</option>
<option >Kigali</option>
</select>
<span class="bar"></span>
</div>
</td>

    <td>
   <div class="district">Province:</div>
  <div class="group">
<select name="province" required>
<option></option>
<option >NORTH</option>
<option >SOUTH</option>
<option >KIGALI</option>
<option >EAST</option>
<option >WEST</option>
</select>

<span class="bar"></span>
</div>
    </td>
<td>
</td>
</tr>
</tr>
<tr>

   <td class="accept">
   &nbsp&nbsp&nbsp&nbsp&nbsp
Male <input type="radio" name="sex" value="Male" required/></button>
&nbsp&nbsp&nbsp
Female <input type="radio" name="sex" value="Female" required/></button>
   </td>
    <td><div id="input">
<div class="group">
<input type="Password" name="password" minlength="4" maxlength="10" autocomplete="off" required >
<label>Password</label>
<span class="bar"></span>
</div>
    </td>
      <td><div id="input">
          <div class="group">
<input type="Password"  name="repassword"  minlength="4" maxlength="10" autocomplete="off" required >
<label>Retype-Password</label>
<span class="bar"></span>
</div>
    </td>
</tr>
</div>
<tr>
<td class="accept">
<a href="https:/info@unityclurwanda.rw/home/Terms&Conditions">Read Terms & Conditions of Unity club</a><br>
Accept Terms And Conditions <input type="checkbox" required>
</td>
  <td>
  <span><input type="submit" name="signup" value="SIGN UP" style="vertical-align:middle"></td></span><td><input type="reset" value="RESET" style="vertical-align:middle"></span></td>
  </div>
</tr>
</table>

</form>
</td></tr></td></div>
<button class="rwema"><font size="2" color="white">&copy by | Bagirishya Rwema Dominique | 2017.</button>
</font></button></td></tr></div></td></tr></div></td></div></td></div></td>
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

   	 <center><p id="error"></p></center>

   	 </div>
   	 </div>
   </div>

</body>
</html>