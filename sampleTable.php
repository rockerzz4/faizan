<?php
	$Server = "localhost";
	$Username = "root";
	$DbName = "ecommerce";
	$Password = "";
	
	$con = mysql_connect($Server, $Username, $Password);
	$dbCon = mysql_select_db($DbName);
	
$query = "SELECT ID, Username, Password, DateAdded FROM Users";
$data = mysql_query($query);
?>
<html>
<head></head>
<body>
<table border="1">
	<tr>
		<th>ID</th>
		<th>Username</td>
		<th>Password</th>
		<th>Added Date</th>
	</tr>
	<?php
		while($row = mysql_fetch_array($data))
		{
	?>
	<tr>
		<td><?php echo $row['ID']; ?></td>
		<td><?php echo $row['Username']; ?></td>
		<td><?php echo $row['Password']; ?></td>
		<td><?php echo $row['DateAdded']; ?></td>
	</tr>	
	<?php
		}
	?>
</table>

</body>
</html>