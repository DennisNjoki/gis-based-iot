<?php
   if (assets($_GET['payload'])
		&& isset($_GET['imei'])
		)

    {
		// Database connection

		include "connection.php";

		// get the values
		$serial = htmlspecialchars($_GET['payload']);
		$imei = htmlspecialchars($_GET['imei']);
		$temp = htmlspecialchars($_GET['temp']);
		$humidity = htmlspecialchars($_GET['humidity']);
		$pressure = htmlspecialchars($_GET['pressure']);



		$query = "INSERT INTO
				  data_stream
				  (device_serial, imei, temperature, humidity, pressure)
				  VALUES
				  ('$serial', '$imei', '$temp', '$humidity', '$pressure')";

		if (!mysqli_query($conn, $query))	{
			$data = [
				'status' => 'error has occured',
				'message' => mysqli_error($conn)
			];
		}	 else{
			$data = [
				'status' => 'success',
				'message' => 'a new record added'
			];
		} 
		$data = json_encode($data);
		echo $data;


	}


?>