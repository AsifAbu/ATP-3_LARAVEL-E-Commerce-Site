<!DOCTYPE html>
<html>
<head>
	<title>Restaurants Show</title>
	<link rel="stylesheet" type="text/css" href="../stylehome.css">
</head>
<body>
		<h1>Showing all restaurent top view!</h1>

		<form>
			<table border="0" align="center" width="90%" bgcolor="gray">
				<tr>
					<th width="25%" align="left">
						<h2> Restaurents in Dhaka</h2>
					</th>
					<th width="75%" align="right">
						<h4>Counting restaurent number!!</h4> 
					</th>
				</tr>
			</table>
			<% for(var i=0; i < data.length; i++){ %>
			<table border="0" align="center" width="90%" bgcolor="lightgray">
				<tr>
					<td  align="center" width="25%" rowspan="10" style="background-image: url('../../image/<%= data[i].restaurant_name%>.jpg');background-repeat: no-repeat;position: center;">
						
					</td>
					<td width="20%" align="left"> 
						<h2><%= data[i].restaurant_name %></h2>
					</td>
					<td width="55%" align="right">
						the rating (<%= data[i].rating %>/10*)
					</td>
				</tr>
				<tr>
					<td width="20%"> 
						Most Popular :
					</td>
					<td width="55%">
						<%= data[i].most_popular_items %>
					</td>
				</tr>
				<tr>
					<td width="20%"> 
						Items :
					</td>
					<td width="55%">
						<%= data[i].items %>
					</td>
				</tr>
				<tr>
					<td width="20%"> 
						Cuisine :
					</td>
					<td width="55%">
						<%= data[i].cuisine %>
					</td>
				</tr>
				<tr>
					<td width="20%"> 
						Cost per Person :
					</td>
					<td width="55%">
						<%= data[i].cost_per_foodie %>
					</td>
				</tr>
				<tr>
					<td width="20%"> 
						Open Time :
					</td>
					<td width="55%">
						<%= data[i].time %>
					</td>
				</tr>
				<tr>
					<td width="20%"> 
						Address :
					</td>
					<td width="55%">
						<%= data[i].location %>
					</td>
				</tr>
				<tr>
					<td width="20%"> 
						City :
					</td>
					<td width="55%">
						<%= data[i].city %>
					</td>
				</tr>
				<tr>
					<td width="20%"> 
						
					</td>
					<td width="55%" align="right">
						<!-- <a href="restaurantshowdetail/<%= data[i].id %>"><input type="button" name="more" value="More"></a> -->
						<a href="restaurantshowdetail"><input type="button" name="more" value="More"></a>
					</td>
				</tr>
			</table>
			<hr width="90%">
			<% } %>
			



		</form>


</body>
</html>
<?php /* C:\xampp\htdocs\LARAVEL\atp3finalprojectuser\resources\views/restaurant/restaurantshow.blade.php */ ?>