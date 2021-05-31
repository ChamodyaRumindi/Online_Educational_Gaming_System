// JavaScript Document

//check the Password
function checkpass()
{
	var a = document.getElementById("fpass").value;
	var s = document.getElementById("spass").value;
	//using if else
	if(a=="")
	{
		alert("please fill password");
		document.getElementById("msg").innerHTML="please fill password";
		return false;
	}
	if(a.length < 5)
	{
		alert("Password is too short");
		document.getElementById("msg").innerHTML="Password is too short";
		return false;
	}
	if(a.length > 20)
	{
		alert("Password is too Long");
		document.getElementById("msg").innerHTML="Password is too Long";
		return false;
	}
	if(a!=s)
	{
		alert("Password are not same");
		document.getElementById("msgg").innerHTML="Password are not same";
		return false;
	}

}
//reg form validation
function regf()
{
	var Fname = document.getElementById("fname").value;
	var mname = document.getElementById("mname").value;
	var em = document.getElementById("mail").value;
	
		if(Fname.trim() =="" ||mname.trim() ==""||em.trim() =="")
		{
			alert("Fill the balnks");
			return false;
		}
		else
		{
			true;
		}

//mobile num validate
	var mn = document.getElementById("mnum").value;
		
		var regx = /^[7-9]\d{9}$/;
		if(regx.test(mn))
		{
			document.getElementById("mobilaa").innerHTML="Valid";
		}
		else
		{
			alert("InValid Mobile Number");
			document.getElementById("mobilaa").innerHTML="InValid";
		}
}