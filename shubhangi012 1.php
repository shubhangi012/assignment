<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
.header{
        width:100%;
		height:200px;
	
		background-color:#FFCC66;
		float:left;
		text-align:center;
		color:#CC0000;
		}
.footer{
        width:100%;
		height:200px;
		
		background-color:#000066;
		float:left;
		text-align:center;
		color:#CC0000;
		}
.menu{		
      	width:100%;
		height:50px;
		
		background-color:#FF0000;
		float:left;
		text-align:center;
		color:#CCCCCC;
		}	
.image{
       width:100%;
	   height=:200px;
	   
	   
	   }		
.leftcontent{
      	width:50%;
		height:250px;
		
		background-color:#CC3333;
		float:left;
		text-align:center;
		color:#CCCCCC;
		}	
.rightcontent {
      	width:50%;
		height:250px;

		background-color:#FF6699;
		float:left;
		text-align:center;
		color:#CCCCCC;
		}	
.frontform {
      margin-top:10px;
	  }		
</style>
<script language:"javascript1.5">		
function f1()
{
var val=parseInt(document.getElementById('course').value);
var total=parseInt(document.getElementById('duration').value);
var total=parseInt(val*total);
document.getElementById('total').value=total;
}

		

		






</script>

</head>
<body>

<div class="header">
site's header
</div>

<div class="menu">
site's menu
</div>

<div class="image">
<img src="../2.jpeg" />
</div>

<div class="leftcontent">
<form method="post">
<div class="frontform">
<select name="course" id="course"  required="required">
<option value="">Select course </option>
<option value="60000">BCA</option>
<option value="50000">BBA</option></div>
</select>
<div class="frontform"><input type="number" name="duration" id="duration" placeholder="duration" onblur="f1()"/>></div>
<div class="frontform"><input type="number" name="ta" id="ta" readonly="readonly" placeholder="total amount"/>></div>
<div class="frontform"><input type="submit" name="duration"/></div>
</div>
</form>


<div class="rightcontent">
<form method="post">
<div class="frontform"><input type="text" name="uname" id="uname" placeholder="your name" required="required" /></div>
<div class="frontform"><input type="email" name="uemail" placeholder="your email" required="required" /></div>
<div class="frontform"><input type="text" name="contact" id="contact" placeholder="your contact"  maxlength="10"  required="required"/></div>
<div class="frontform">Male:<input type="radio" name="gender" value="male" />
Fe-male<input type="radio" name="gender" value="female" /></div>
<div class="frontform">
<select name="city" required="required">
<option value="">Select City </option><option value="Delhi">Delhi</option><option value="Meerut">Meerut</option></div>
</select>
<input type="submit" name="submit"  />
</div>


<div class="footer">
</div>


</body>
</html>
