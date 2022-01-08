<html>

<head>

<style type="text/css">
td
{
padding:5px;
border:1px solid #ccc;

}
</style>
<link rel="icon" type="image/png" href="img/admin.png">

</head>

<body>

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

if(isset($_GET['names']))
{
$names=$_GET['names'];

$query1="DELETE FROM susponser WHERE names='$names'";
$result = $conn->query($query1);
echo "<META http-equiv=refresh content=0;URL=sdelete.php>";
if($query1)
{
	('location:deletepost.php');

}
}
?>
</body>
</html>

 