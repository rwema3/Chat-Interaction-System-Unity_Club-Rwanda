<html>
<head>
<title>Contacts us</title>
<link rel="icon" type="image/png" href="images/contac.png">
<link rel="stylesheet" type="text/css" href="css/indexs.css">
<script src="validate/jquery-2.2.0.min.js"></script>
<style>

  div#main{
  margin:10px auto;
  width:50%;
  min-width: 900px;
  min-height: 300px;
  border:1px solid gray;
  border-radius:3px;
  background: #000066;
  opacity: none;
  margin-top: -50px;

}

form { padding: 3.5em; }
    .group {position: relative; margin-bottom: 2.4em; }

     div#main label {

      color: white;
      font-size: 16px;
      font-family: comic;
      font-weight: normal;
      font-family: cursive;
      position: absolute;
      margin-left:-100px;
      pointer-events: none;
      top: 2px;
      transition: 0.2s ease all;
    } 
    

        div#main input[type="text"]{
      color: white;
      font-size: 17px;
      padding: 20px 0px 10px 0px;
      display: block;
      background: #000066;
      outline: none;
      border: none;
      width: 230px;
      height: 3px;
      border-bottom: 1px solid white; 
    
    }
     div#main input[type="submit"],input[type="reset"]{
            color: white;
      font-size: 14px;
      background: #000033;
      font-family: cursive;
      width: 70px;
      height: 40px;
      position: center;
      border-radius: 10px;
    }
       div#input .bar{position: relative; display: block; width: 230px; }

    div#input .bar:before, .bar:after{
      content: "";
      height: 2px;
      width: 0;
      bottom: -1px;
      position: absolute;
      background: green;
      transition: 0.2s ease all;
    }
    div#input .bar:before {left: 50%; }
    div#input .bar:after {right: 50%; };

    div#input input:valid {border-bottom: 1px solid white; }

    div#input input:valid ~ .bar:before,
    div#input input:valid ~ .bar:after{
      background-color: green !important;
    }

    div#input input:focus ~ label,
    div#input input.used ~ label {
      top: -20px;
      font-size: 15px;
      color: white;
    }

    div#input input:valid ~ label,
    div#input input:valid.used ~ label{
      color: #4fc24f;
    }
    div#input input:focus ~ .bar:before,
    div#input input:focus ~ .bar:after{
      width: 50%;
    }
p{
  margin-top: 12px;
  margin-left: 160px;
  font-size: 20px;
  color: white;
}
textarea{
  margin-right: -30px;
  margin-top: -30px;
  height: 180px;
  background: #000066;
  color: white;
  font-size: 15px;

}
div#contact{
  margin-top: -300px;
  margin-right: -400px;
}
.success
{
  font-size:14px;
  width: 250px;
  font-family: comic;
  margin-top: -10px;
  margin-left: 15px;
  color:white;
  text-align:center;
  font-weight:bold;
  padding:10px 10px 10px 10px;
  border:#008000  solid;
  background:none right center no-repeat;
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

.dominos{
    background: white;
    margin-top: 30px;
    color: white;
    font-family: cursive;
    font-size: 13px;
    width: 900px;
    height: 20px;
    background-image: url(administ.jpg);
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

<div id="main">
<p >
Contact Us at General Headquaters<br>
Use These Informations:<br>
REPUBLIC OF RWANDA <br>
Unity Club Rwanda<br>
P. O. Box 6304 KIGALI --RWANDA<br>
Phone: +250 726268766<br>
info@UnityClubRwanda.gov.rw<br><br>
Also Follow Us On<img src="images/fbicon.png">&nbsp&nbsp&nbsp<img src="images/instagramicon.png">&nbsp&nbsp&nbsp<img src="images/google+icon.png">
&nbsp&nbsp<img src="images/images0.png" height="20" >
<br>
 You Can Also Make a direct Contact<br>
 Using This Form here:<img src="images/here.gif"><br>
</p>
<div id="contact" align="center">
<form action="contactus.php" method="POST">

<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "membership";
 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {  
     die("Connection failed: " . $conn->connect_error);
 } 

if(isset($_POST['contact']))
 {

$query="INSERT INTO back(name,idea)values('$_POST[name]','$_POST[idea]')";
$result = $conn->query($query);

if ($query)
  {
 
echo'<center class=success>Message Sent successfully!</center>';
echo'  <meta content="4;contactus.php" http-equiv="refresh" />';
  }
  else
  {

  echo'<center >Not Sent. Retry </center>';
  echo'  <meta content="2;contactus.php" http-equiv="refresh" />';
}
}

?>

<table align="right">
<div id="input">
<div class="group">
<input type="text"  name="name" pattern="[(a-z) (A-Z)\s]+$" maxlength="26" minlength="3" autocomplete="off" required>
<label>Names</label>
<span class="bar"></span>
</div>  
<textarea cols="30" rows="7" name="idea" placeholder="write Your Idea Here" required></textarea >
<table><tr><td>
<input type="submit" name="contact" value="Send">
</td>
<td>
    <input type="reset" name="go" value="Clear">
    </td>
    </tr>
  </table>
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
</div>
</div>
</form>

<button class="rwema"><font size="2" color="white">&copy by | Bagirishya Rwema Dominique | 2017.</button>
</font></button></table></form></div></div></div></body></html>
