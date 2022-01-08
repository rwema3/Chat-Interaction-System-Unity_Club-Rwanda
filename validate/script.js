$(document).ready(function(){
	$(".close").click(function(){
		$(".over").slideUp(1000);
	});
	$("#a1").click(function(){
		var a=$(this).width();
		$(this).css("boxShadow","2px 2px 2px ");
		if(a<330){

			$(this).animate({
				width:'+=40px'
			});
		}
		else
		{
			$(this).animate({
				width:'-=40px'
			});	
		}
	});
	$("#a2").click(function(){
		$(this).css("boxShadow","2px 2px 2px ");
		var a=$(this).width();
		if(a<330){
			$(this).animate({
				width:'+=40px'
			});
		}
		else
		{
			$(this).animate({
				width:'-=40px'
			});	
		}
	});
	$("#login").click(function(){
		$(".over").slideDown(1000);
	});
});
setTimeout(dothis,6000);
function dothis(){

	setTimeout(dothis,6000);
	$(".logo").fadeOut(1000).slideDown(2000);
	$("#slide").slideUp(1000).delay(2000).slideDown(2000);

}
function check(user)
{
		var a=document.getElementById("error").innerHTML;
		if(a.length>5)
		{
			return false;
		}
}
function uvalidate(user)
{
	var a=user.value;
	if(a.length<5)
	{
		document.getElementById("error").innerHTML="please characters are not allowed";
	}
}
function pvalidate(user)
{
	var a=user.value;
	if(a.length<5)
	{
		document.getElementById("error").innerHTML="password are not allowed";
	}
	else
	{
		document.getElementById("error").innerHTML="";
	}
}
