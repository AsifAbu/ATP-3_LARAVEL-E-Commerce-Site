<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="assets/stylehome.css">
	<link rel="stylesheet" type="text/css" href="assets/stylelogin.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}
btn2.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
	
</head>
<body bgcolor="lightgray">
	<table border="0" width="100%" class="footerimg">
		<tr>
			<td width="70%" align="left">
				<a href="index" style="text-underline-position: 0;"><h2>F<sub>ood</sub>K<sub>ing</sub></h2><sub></a>Food King logo picture is here!</sub></h4>
			</td>
			<td width="30%" align="right">
				Select City
				<select>
					<option value="dhaka" selected>Dhaka</option>
				  	<option value="rajshahi">Rajshahi</option>
				  	<option value="chittagong">Chittagong</option>
				  	<option value="rangpur">Rangpur</option>
				  	<option value="khulna">Khulna</option>
				  	<option value="sylet">Sylet</option>
				  	<option value="mymensingh">Mymensingh</option>
				</select> 
			</td>
		</tr>
	</table>
	<form class="menubarsticky" border="0" width="100%" align="center" id="s">
		<table border="0" width="100%" align="center" >
			<tr>
				<td width="20%" height="45px">
					<a href="restaurantshow"><input type="button" name="restaurant" value="Restaurants" class="btn3" id="menubar"></a>
				</td>
				<td width="20%" height="45px">
					<input type="button" name="offer" value="Offers" class="btn3" id="menubar">
				</td>
				<td width="20%" height="45px">
					<input type="button" name="booking" value="Booking" class="btn3" id="menubar">
				</td>

				<td width="20%" height="45px">
					<!--<input type="button" name="userList" value="userList" class="btn3" id="menubar">--> 
				</td>
				
				<td width="20%" height="45px">
					<!-- <input type="button" name="" value="" class="btn3" id="menubar"> -->
				</td>
				<td width="20%" height="45px">
					<!-- <input type="button" name="" value="" class="btn3" id="menubar"> -->
				</td>
				<td width="20%" height="45px">
					<!-- <input type="button" name="" value="" class="btn3" id="menubar"> -->
				</td>
				<td width="20%" height="45px">
					<!--<a href="login"><input type="button" name="logout" value="Logout" class="btn3" id="myBtn" ></a>-->
				</td>

				<td width="20%" height="45px">
					<a href="login"><input type="button" name="login" value="Login" class="btn3" id="myBtn" ></a>
				</td>

				

					<!-- <div id="myModal" class="modal">
					  <div class="modal-content">
					    <span class="close">&times;</span>
					    	<p>
					    		<form method="post" action="logcheck.js">
									<table border="0" align="center" width="100%"></br>
										<tr>
											<td width="30%">
												<i style="color:black;font-size:20px;">User Name:</i>
											</td>
											<td width= "30%">
												<input size="30%"" type="text" placeholder="Enter Name" name="lname" id="lname" required>
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
											<td width=30%></td>
											<td align="right">
												<input type="submit" name="signin" value="Sign In" style=" height: 30px; width:50%;">
											</td>
										</tr>
									</table>
								</form>
							</p>
					  </div>
					</div> -->
				<td width="20%" height="45px">
					<a href="registration"><input type="button" name="signup" value="Sign Up" class="btn3" id="myBtn"></a>
				</td>	
				<td width="20%" height="45px">
					<a href="profileown"><input type="button" name="profile" value="Profile" class="btn3" id="menubar"></a>
				</td>	

			</tr>
		</table>
		<table border="0" width="100%" align="center" id="s">
			<tr class="height2">
				<td width="50%" height="20px">
					<input type="text" name="searchbyname" placeholder="searchbyname" id="searchbyname">
				</td>
				<td width="35%" height="20px">
					<input type="text" name="searchbylocation" placeholder="searchbylocation" id="searchlocation">
				</td>
				<td width="15%" height="20px">
					<input type="button" name="search" value="Search" class="btn" id="search">
				</td>
			</tr>
			
		</table>
	</form>
	<table>
		<!-- #include virtual="/restaurantshow.html" -->
		<script type="text/javascript">
			include
		</script>
	</table>
	<table border="0" width="90%"  align="center" >
		<tr>
			<td height="20px" width="100%">
				  &nbsp
			</td>
		</tr>
		<tr align="center" bgcolor="#ABB1BA">
			<td align="left" width="100%" class="heighttopbar">
				<h2>Trending Items</h2>
			</td>
		</tr>
	</table>
	<table border="0" width="90%" align="center">
		
		<tr class="height">
			<!--<td width="20%" height="30px">
				<input type="button" name="b1" value="" class="btn2">
			</td>
			<td width="20%" height="30px">
				<input type="button" name="b1" value="btn2" class="btn2">
			</td>
			<td width="20%" height="30px">
				<input type="button" name="b1" value="btn2" class="btn2">
			</td>
			<td width="20%" height="30px">
				<input type="button" name="b1" value="btn2" class="btn2">
			</td>
			<td width="20%" height="30px">
				<input type="button" name="b1" value="btn2" class="btn2">
			</td>-->
		<% var str = data[0].items;
		var arr = str.split(',');
		 for(var i=0; i < arr.length; i++){ %>
			<td width="20%" height="30px">
				<a href="restaurantshow"><input type="button" name="b1" value="<%= arr[i] %>" class="btn2"></a>
			</td>
		<% } %>
		</tr>
		
	</table>
	<table border="0" width="90%" align="center" >
		<tr>
			<td height="20px">
				  &nbsp
			</td>
		</tr>
		<tr align="center" bgcolor="#ABB1BA" >
			<td align="left" width="100%" class="heighttopbar">
				<h2>Trending restaurant</h2>
			</td>
		</tr>
	</table>
	<table border="0" width="90%" align="center" >
		<tr>
			<td height="100%" width="5px">
				<input type="button" name="b1" value="<" class="heightslidebutton" id="slidebutton">
			</td>
		<%
		 for(var i=0; i < data.length; i++){ %>
			<td width="20%" height="30px">
				<a href="restaurantshowdetail/<%= data[i].id %>"><input type="button" name="b1" value="<%= data[i].restaurant_name %>" class="btn2"></a>
			</td>
		<% } %>
			<td height="100%" width="5px">
				<input type="button" name="b1" value=">" class="heightslidebutton" id="slidebutton">
			</td>
		</tr>		
	</table>
	<table border="0" width="90%" align="center" >
		<tr>
			<td height="20px">
				  &nbsp
			</td>
		</tr>
		<tr align="left" bgcolor="#ABB1BA" >
			<td align="left" width="100%" class="heighttopbar">
				<h2>New In Town</h2>
			</td>
		</tr>
	</table>
	<table border="0" width="90%" align="center" >
		<tr>
			<td height="100%" width="5px">
				<input type="button" name="b1" value="<" class="heightslidebutton" id="slidebutton">
			</td>
		<%
		 for(var i=0; i < data.length; i++){ %>
			<td width="20%" height="30px">
				<a href="restaurantshowdetail/<%= data[i].id %>"><input type="button" name="b1" value="<%= data[i].restaurant_name %>" class="btn2"></a>
			</td>
		<% } %>
			<td height="100%" width="5px">
				<input type="button" name="b1" value=">" class="heightslidebutton" id="slidebutton">
			</td>
		</tr>
		
	</table>
	<table border="0" width="90%" align="center" >
		<tr>
			<td height="20px">
				  &nbsp
			</td>
		</tr>
		<tr>
			<td height="20px">
				  &nbsp
			</td>
		</tr>
		
	</table>
	<table border="0" width="90%" align="center" >
		<tr>
			
			<td width="20%" class="height">
				<input type="button" name="b1" value="Latest Review" class="btn4">
			</td>
			<td height="100%" width="5px">
				<input type="button" name="b1" value="<" class="heightslidebutton" id="slidebutton">
			</td>
			<td width="20%" class="height">
				<input type="button" name="b1" value="btn2" class="btn2">
			</td>
			<td width="20%" class="height">
				<input type="button" name="b1" value="btn2" class="btn2">
			</td>
			<td width="20%" class="height">
				<input type="button" name="b1" value="btn2" class="btn2">
			</td>
			<td width="20%" class="height">
				<input type="button" name="b1" value="btn2" class="btn2">
			</td>
			<td height="100%" width="5px">
				<input type="button" name="b1" value=">" class="heightslidebutton" id="slidebutton">
			</td>
		</tr>
		
	</table>
	<table border="0" width="90%" align="center" >
		<tr>
			<td height="20px">
				  &nbsp
			</td>
		</tr>
		<tr align="center" bgcolor="#ABB1BA" >
			<td align="left" width="100%" class="heighttopbar">
				<h2>Popular Items</h2>
			</td>
		</tr>
	</table>
	<table border="0" width="90%" align="center" >
		<tr>
			<td width="20%" class="height">
				<input type="button" name="b1" value="btn2" class="btn2">
			</td>
			<td width="20%" class="height">
				<input type="button" name="b1" value="btn2" class="btn2">
			</td>
			<td width="20%" class="height">
				<input type="button" name="b1" value="btn2" class="btn2">
			</td>
			<td width="20%" class="height">
				<input type="button" name="b1" value="btn2" class="btn2">
			</td>
		</tr>
		<tr>
		<%
		var str = data[0].items;
		var arr = str.split(',');
		for(var i=0; i < arr.length; i++){ %>
			<td align="center">
				<a href="restaurantshow"><%= arr[i] %></a>
			</td>
		<% } %>

		</tr>
		<tr>
			<td height="20px">
				  &nbsp
			</td>
		</tr>
		
	</table>
	<table border="0" width="90%" align="center" >
		<tr>
			<td height="20px">
				  &nbsp
			</td>
		</tr>
		<tr align="center" bgcolor="#ABB1BA" >
			<td align="left" width="100%" class="heighttopbar">
				<h2>Popular Location</h2>
			</td>
		</tr>
	</table>
	<table border="0" width="90%" align="center" >
		<tr>
		<%
		var str = data[0].city;
		var arr = str.split(',');
		for(var i=0; i < arr.length; i++){ %>
			<td width="20%" class="heightlocationbutton">
				<a href="restaurantshow"><input type="button" name="b1" value="<%= arr[i] %>" class="btn5"></a>
			</td>
		<% } %>
		</tr>
	</table>
	<hr>
	<table border="0" width="100%" align="center" class="headerimg" bgcolor="gray">
		<tr>
			<td width="20%" height="10px" align="left">
				<h2 style="color: white;">&nbsp &nbsp &nbsp &nbsp About</h2>
			</td>
		</tr>
		<tr >
			<td width="20%" height="5px" align="left">
				<h4 style="color: white;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="www.google.com">Advertizer</a></h4>
				<h4 style="color: white;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="contact.html">Contact</a></h4>
				<h4 style="color: white;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="mail.google.com">Feedback</a></h4>
				<h4 style="color: white;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="mail.google.com">Top foodiez of the month</a></h4>
			</td>
		</tr>
	</table>
</body>
</html>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>




