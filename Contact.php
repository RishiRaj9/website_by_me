<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<div class="aa">
<ul>
	<li><a href="http://localhost:8181/rr/matrikashakti.php">  Home </a></li>
	<li class="z"> | </li>
	<li><a href="http://localhost:8181/rr/About.php"> About  </a></li>
	<li class="z"> | </li>
	<li> Contact </li>
	</ul>
</div>
<body>
	<link rel="stylesheet" type="text/css" href="style9.css">
	<div class="regbox"><h1>Register Here</h1><br/>
<?php
	if(isset($_REQUEST["b1"]))
	{
		include 'db.php';
		$name=strip_tags($_REQUEST["name"]);
		$DOB=strip_tags($_REQUEST["DOB"]);
		$time=strip_tags($_REQUEST["time"]);
		$contact=strip_tags($_REQUEST["contact"]);
		$email=strip_tags($_REQUEST["email"]);
		$advice=strip_tags($_REQUEST["advice"]);
		
		
		mysqli_query($con,"insert into registration values('$name','$DOB','$time','$contact','$email','$advice')");
		echo "Registration Successful..!!";
	}
?>
<hr/>
<br/>
<form>
Name:
<br/>
<input name="name"></input>
<br/>
<br/>  
DOB:
<br/>
<input name="DOB"></input>
<br/>
<br/>
Time of Birth:
<br/>
<input name="time"></input>
<br/>
<br/>
Contact No.:
<br/>
<input name="contact"></input>
<br/>
<br/>
Email:
<br/>
<input name="email"></input>
<br/>
<br/>
Advice needed on:
<br/>
<select name="advice"> 
	<option value="astrological advices">Astrological Advices</option> 
	<option value="education">Education</option>
	<option value="profession">Profession</option>
	<option value="marriage">Marriage</option>
	<option value="health">Health</option>
	<option value="business">Business</option>
</select>
<br/>
<br/>
<br/>
<input type="submit" value="Register" name="b1"></input>
</form>
</div>
</body>
<div class="m"><strong> Developed By : <i> Rishi Raj &copy</i></strong></div>