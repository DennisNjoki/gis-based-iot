<?php
include "connection.php";
$results = mysqli_query($conn,"SELECT * FROM spatial_data");
?>
<!DOCTYPE html>
<html>
<head>
	<!-- <title>Map Data</title> -->
	<link rel="stylesheet" href="css/data.css">
</head>
<body> 
<?php
if (mysqli_num_rows($results) >0){
?>
<h1>Data</h1>
	<table>
	<tr>
		<td>Id</td>
		<td>Lattitude</td>
		<td>Longitude</td>
		<td>Humidity</td>
		<td>pressure</td>
		<td>Temperature</td>
		<td>Date_Time</td>
	</tr>
<?php
	$i = 0;
	while($row = mysqli_fetch_array($results)){
?>
	<tr>
		<td><?php echo $row["id"];?></td>
		<td><?php echo $row["latitude"];?></td>	
		<td><?php echo $row["longitude"];?></td>
		<td><?php echo $row["humidity"];?></td>
		<td><?php echo $row["pressure"];?></td>
		<td><?php echo $row["temperature"];?></td>
		<td><?php echo $row["date-time"];?></td>
	</tr>
<?php
		$i++;
	}
?>
</table>
<?php
}
else{
	echo "No result found";
}


?>
</body>
</html>