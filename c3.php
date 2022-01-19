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
  min-width: 901px;
  min-height: 302px;
  border:1px solid gray;
  border-radius:3px;
  background-image: url(administ.jpg);
  opacity: none;
  margin-top: -40px;
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
      background: none;
      outline: none;
      border: none;
      width: 230px;
      height: 3px;
      border-bottom: 1px solid white; 
    
    }
     div#main input[type="submit"],input[type="reset"]{
      color: white;
      opacity: 0.8;
      font-size: 14px;
      background: none;
      font-family: cursive;
      width: 70px;
      height: 40px;
      position: center;
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
  background: none;
  color: white;
  font-size: 15px;
  opacity: 0.8;

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
  color:#008800;
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
    margin-left: 215px;
    color: white;
    text-align: center;
    font-family: cursive;
    font-size: 16px;
    width: 900px;
    height: 40px;
    margin-left: 225px;
}

</style>
</head>
<body background="images/back.JPG">

<table border="0" align="center"  width="680">

<tr><td colspan="3"> <center><img src="images/banner.jpg" width="900" height="150"> </center> </td></tr>

</td></tr>

<tr><td align="center" colspan="3">

<ul class="menu">
    <li><a href="index.php">Unity Club</a></li>
    <li><a href="membership.php">Membership</a></li>
  <li><a href="direction.php">directions</a></li>
  <li><a href="news.php">Club News</a></li>
  <li><a href="#">change Language</a>
   
        <ul>
           <li><a href="#" class="documents"><img src="images/rwanda.png" height="30px" width="50px" align="right">RWANDA</a></li>        
            <li><a href="#" class="documents"><img src="images/FRANC.jpg" height="30px" width="50px" align="right">FRENCH</a></li>
        </ul></li>
   <li><a href="susponser.php">Suponsers</a></li>
    <li><a href="contactus.php">Contact Us</a></li>

</ul>
</td>
</tr>
</tr>
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

 You Can Also Make a direct Contact<br>
 Using This Form here:<img src="images/here.gif"><br>
</p>
<div id="contact" align="center">
<form action="contactus.php" method="POST">

<?php
 $server="localhost";
$database="membership";
$login="root";
$password="";
$connexion=mysql_connect ($server, $login, $password) or die ('Server cannot be found'.mysql_error ( ));
mysql_select_db ($database,$connexion)or die ('database cannot be found'.mysql_error( ));

if(isset($_POST['contact']))
 {

$query="insert into back(name,idea)values('$_POST[name]','$_POST[idea]')"
or die("<h3>Send Failed! Check Your Connection</h3>");

$answer=mysql_db_query ($database, $query);

if ($query)
  {
 
echo'<center class=success>Message Sent successfully!</center>';
echo'  <meta content="3;contactus.php" http-equiv="refresh" />';
  }
  else
  {

  echo'<center >Not Sent. Retry </center>';
  echo'  <meta content="2;contactus.php" http-equiv="refresh" />';
}
}

mysql_close ($connexion);


?>

<table align="right">
<div id="input">
<div class="group">
<input type="text"  name="name" pattern="[(a-z) (A-Z)\s]+$" maxlength="26" minlength="3" required>
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
</body>
</html>