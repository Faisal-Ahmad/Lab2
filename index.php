<?php?>

<html>
<head>
</head>
<body>

<form name="application" method="post" action="login.php">
<!--Table Start-->
<table align="center" >
	<tr>
		<td>
		username :
		</td>
		<td>
		 <input type ="text" name ="un"/>
		</td>
	</tr>
	<tr>
		<td>
		Fullname :
		</td>
		<td>
		 <input type ="text" name ="fn"/>
		</td>
	</tr>
	<tr>
		<td>
		Email :
		</td>
		<td>
		 <input type ="text" name ="ue"/>
		</td>
	</tr>
	<tr>
		<td>
		Phone :
		</td>
		<td>
		 <input type ="text" name ="up"/>
		</td>
	</tr>
	<tr>
		<td>
		Password :
		</td>
		<td>
		 <input type ="password" name ="pw"/>
		</td>
	</tr>
	<tr>
		<td>
		Confirm Password :
		</td>
		<td>
		 <input type ="password" name ="cpw"/>
		</td>
	</tr>
	<tr>
	<tr>
		<td>
		Gender :
		</td>
		<td>
		<!--Radio Button-->
		 <input type ="radio" name ="gen" value="Male"/>Male
		 <input type ="radio" name ="gen" value="Female"/>Female
		 <input type ="radio" name ="gen" value="Other"/>Other
		</td>
	</tr>
	<tr>
		<td>
		Education :
		</td>
		<td>
		<!--Checkbox-->
		 <input type="checkbox" name="edu[]" value="SSC">SSC
		 <input type="checkbox" name="edu[]" value="HSC">HSC
		 <input type="checkbox" name="edu[]" value="BSC">BSC
		 <input type="checkbox" name="edu[]" value="MSC">MSC
		</td>
	</tr>
	<tr>
	<tr>
		<td>
		
		</td>
		<td>
		<input type="submit">
		</td>
	</tr>
</table>
</form>
</body>
</html>
