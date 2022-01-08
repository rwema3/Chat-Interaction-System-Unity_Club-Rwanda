<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "membership";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);
} 

//registering a login session
if (!isset($_SESSION)) {
  session_start();
}

?>

<html>
<head>
<title>Member Card</title>
<link rel="icon" type="image/png" href="images/admin.png">
<style type="text/css">
div#baji{
  width: 450px;
  height: 230px;
    border:1px solid gray;
    border-radius:3px;
    background-image: url(images/baj.jpg);
    font-family: cursive;
    color: black;
    margin-top: 70px;
    margin-left: 350px;


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
    
.login{
       color: white;
      font-size: 25px;
      font-family: cursive;
      width: 130px;
      height: 50px;
      background-image: url(wq.jpg);


}

  input[type="submit"]{
      color: white;
      font-size: 14px;
      background-image: url(wq.jpg);
      font-family: cursive;
      width: 130px;
      height: 50px;
     margin-left:  450px;
      position: center;

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
      margin-left:  40px;

}
a{
  color: white;
}

.access
{
    font-family:cursive;
    margin-top: 30px;
    font-size:16px;
    font-family: cursive;
    width: 500px;
    height: 30px;
    color:#008800;
    margin-left: 340px;
    text-align:center;
    font-weight:bold;
    border:#008000 thin solid;
    background:#EAFFEA url('tick.png') left center no-repeat;
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
</style>
</head>
<body background="images/back.jpg">

<?php

include("connect.php");

 if(isset($_POST['signup']))

 {

  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $username=$_POST['username'];
  $phone=$_POST['phone'];
  $sex=$_POST['sex'];
  $district=$_POST['district'];
  $province=$_POST['province'];
  $password=$_POST['password'];
  $repassword=$_POST['repassword'];
 
  if($password!=$repassword){
         
 echo"<p class='wrong'>"." Two passwords doesn't Match! Try Again";
  echo' <meta content="5;membership.php" http-equiv="refresh" />';

       } 

  elseif($password==$repassword)

  {

echo '<div class=access><center>Hello <font size="4" color="#000033">'.$lname.'&nbsp;</font> You are registred in Unity Club</center></div><br>';

$query ="INSERT INTO users (fname,lname,username,phone,sex,district,province,password,repassword) 
VALUES('$fname','$lname','$username','$phone','$sex','$district','$province','$password','$repassword')";

$result = $conn->query($query);

echo '
<div id="baji">
<table>
  <p class="name">first name: '.$fname.' &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Last Name: '.$lname.'</p><br>
  <p class="sex">sex:'.$sex.' &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Phone: '.$phone.'</p><br>
  <p class="dis">District:'.$district.' &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Province:'.$province.'; </p></br>
  <p class="sign">your Signature.......  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Staff Signature<img class="ba" src="images/rw.jpg" height="70" width="90">.</p></br>
    <p class="copy">&copy Bagirishya Rwema Dominique 2017</p>
</table>
</div>
<table><tr><td>
    <input type="submit" onclick="window.print()" value="GET CARD">

</td>
<td><button class="login"><a href="membership.php">LOGIN</a></button>
</td>
    </tr>
    </td></tr>
  </table>';
   }
  

  else
  {
    echo mysql_error();
  }
 }
?>

</body>
</html>