<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
		<form method="post">
			<table border="1" align="center" width="40%"></br></br></br></br></br></br>
			<tr>
				<td width="30%">
					<i style="color:black;font-size:20px;">User Email:</i>
				</td>
				<td width= "30%">
					<input size="30%" type="text" placeholder="Enter Email" name="lemail" id="lemail" required>
				</td>
				<td id="namep"></td>
			</tr>
			<tr>
				<td width="30%">
					<i style="color:black;font-size:20px;">Password : </i>
				</td>
				<td width="30%">
					<input size="30%" type="password" placeholder="Enter Password" name="lpassword" id="lpassword" required>
				</td>
				<td id="passwordp"></td>
			</tr>

			<tr>
				<td width=30%></td>
				<td>
					<input type="checkbox" name="rememberme" value="checked">Remember Me
				</td>
			</tr>
			<tr>
				<td width=30%>
					
				</td>
				<td align="right">
					<b><input type="submit" name="submit" value="Sign In" style=" height: 30px; width:50%; background-color: green;color: white;font-style: bold;font-size:15px;"></b>
					<a href="/registration"><input type="button" name="registration" value="Sign Up" style=" height: 30px; width:50%;"></a>
				</td>
			</tr>
		</form>
	</body>
</html>


