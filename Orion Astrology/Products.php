<?php
	mysql_connect('localhost','root','');
	mysql_select_db('orion');
	$query="select * from products";
	$result = mysql_query($query);
?>
<!DOCTYPE html>
<html>
	<title>
		<head>products</head>
	</title>
	<body>
		<table align="center" bgcolor="skyblue" border="1px" style="width:600px">
			<tr>
				<th colspan="3"><h3>Products Details</h3></th>
			</tr>
			<tr>
				<th>Productid</th>
				<th>Description</th>
				<th>Price</th>
			</tr>
			<?php
				while($rows=mysql_fetch_assoc($result))
				{
			?>
				<tr>
					<td><?php echo $rows['productid'];?></td>
					<td><?php echo $rows['description'];?></td>
					<td><?php echo $rows['price'];?></td>
				</tr>
			<?php	} ?>
		</table>
	</body>
	</html>