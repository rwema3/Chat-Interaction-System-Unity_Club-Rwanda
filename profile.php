
<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Video streaming</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
  
</head>
<body>
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.html"><img src="" alt="Search here"/></a>
		<form class="form-inline navbar-search" method="post" action="products.html" >
		<input id="srchFld" class="srchTxt" type="text" />
		 <button type="submit" id="submitButton" class="btn btn-primary">Search</button> 
		  <select class="srchTxt">
			<option>All</option>
            <option>Videos</option>
            <option>Audios</option>
            <option>Lyrics </option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="index.html">Home</a></li>
	 <li class=""><a href="login.html">My Channel</a></li>
	 <li class=""><a href="##">Live Streaming</a></li>
	 <li class=""><a href="index.php">Admin</a></li>
	 <li class=""><a href="contact.html">Contact</a></li>
	 <li class=""><a href="index2.php">Uploads</a></li>
     <li class="">     <a href="logout.php">Log Out</a></li></div>
	 <a href="index.php" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></div></div>
	<br><br>
	
	<center> 
  <div id="main">
    <header>
	  <div id="banner">
	    <div id="welcome">
	      <h3><span>Rwanda</span>    VIDEO    STREAMING </h3>
	    </div><!--close welcome-->
	    <div id="welcome_slogan">

	      <h3>*****************************************************</h3>

	    </div><!--close welcome_>			
	  </div><!--close banner-->
    </header>

	<nav>
	  <div id="menubar">
        <ul id="nav">
        
          <li>Welcome : <i><?php echo $login_session; ?></b></i>&nbsp&nbsp&nbsp</li>
      <center> <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="view.php">view</a></li>
	 <li class=""><a href="contact.html">Update</a></li>
	 <li class=""><a href="new/index2.php">Delete</a></li>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></div></div></center>
        </ul>
      </div><!--close menubar-->	
    </nav>	
    
	<div id="site_content">	

	   
	
	  <div id="content">
        <div class="content_item">
		  <h1>Video Streaming</h1>  
          <p>.</p>   		
		  
		  <div class="content_imagetext">
		    
		    <p></p>
		  </div><!--close content_imagetext-->
		  
		  <div class="content_container">
		    <p>.</p>
		  	<div class="button_small">
		      <a href="#"></a>
		    </div><!--close button_small-->
		  </div><!--close content_container-->
          <div class="content_container">
		    <p></p>          
		  	<div class="button_small">
		      <a href="#"></a>
		    </div><!--close button_small-->		  
		  </div><!--close content_container-->		
          <div class="content_container">
		    <p></p>          
		  	<div class="button_small">
		      <a href="#"></a><!--read more-->
		    </div><!--close button_small-->		  
		  </div><!--close content_container-->	
		  
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->  	
  </div><!--close main-->
  
    <footer>
	  <a href="index.html">Home</a> | <a href="login.html">My Channel</a> | <a href="##">Live Stream</a> | <a href="index.php">Admin</a> | <a href="contact.html">Contact</a><br/><br/>|<a href="index2.php">Uploads</a>  
    </footer>
</body>
</html>