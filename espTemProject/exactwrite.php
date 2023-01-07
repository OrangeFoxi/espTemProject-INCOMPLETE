<?php
    $host = "localhost";
    $dbname = "****";
    $username = "****";
    $password = "****";



	$conn = new mysqli($host, $username, $password, $dbname);
	
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}

	else { echo "Connected to mysql database. "; }
	
	date_default_timezone_set('Europe/Amsterdam');  //other timezones https://www.php.net/manual/en/timezones.asia.php
    $d = date("Y-m-d");
    $t = date("H:i:s");
	
	$sql1 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '01:00:00' OR zeit = '01:00:01' 
	OR zeit = '01:00:02' OR zeit = '01:00:03' OR zeit = '01:00:04' OR zeit = '01:00:05' OR zeit = '01:00:06' LIMIT 1";
	$result1 = $conn->query($sql1);
	$row1 = $result1->fetch_assoc();
	$sqla1 = "INSERT INTO sensorinfo VALUES ('".$row1["feucht"]."', '".$row1["warm"]."', '".$row1["hell"]."', '".$d."', '01:00:00')";
	$conn->query($sqla1);
	
		$sql2 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '02:00:00' OR zeit = '02:00:01' 
	OR zeit = '02:00:02' OR zeit = '02:00:03' OR zeit = '02:00:04' OR zeit = '02:00:05' OR zeit = '02:00:06' LIMIT 1";
	$result2 = $conn->query($sql2);
	$row2 = $result2->fetch_assoc();
	$sqla2 = "INSERT INTO sensorinfo VALUES ('".$row2["feucht"]."', '".$row2["warm"]."', '".$row2["hell"]."', '".$d."', '02:00:00')";
	$conn->query($sqla2);
	
		$sql3 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '03:00:00' OR zeit = '03:00:01' 
	OR zeit = '03:00:02' OR zeit = '03:00:03' OR zeit = '03:00:04' OR zeit = '03:00:05' OR zeit = '03:00:06' LIMIT 1";
	$result3 = $conn->query($sql3);
	$row3 = $result3->fetch_assoc();
	$sqla3 = "INSERT INTO sensorinfo VALUES ('".$row3["feucht"]."', '".$row3["warm"]."', '".$row3["hell"]."', '".$d."', '03:00:00')";
	$conn->query($sqla3);
	
		$sql4 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '04:00:00' OR zeit = '04:00:01' 
	OR zeit = '04:00:02' OR zeit = '04:00:03' OR zeit = '04:00:04' OR zeit = '04:00:05' OR zeit = '04:00:06' LIMIT 1";
	$result4 = $conn->query($sql4);
	$row4 = $result4->fetch_assoc();
	$sqla4 = "INSERT INTO sensorinfo VALUES ('".$row4["feucht"]."', '".$row4["warm"]."', '".$row4["hell"]."', '".$d."', '04:00:00')";
	$conn->query($sqla4);
	
		$sql5 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '05:00:00' OR zeit = '05:00:01' 
	OR zeit = '05:00:02' OR zeit = '05:00:03' OR zeit = '05:00:04' OR zeit = '05:00:05' OR zeit = '05:00:06' LIMIT 1";
	$result5 = $conn->query($sql5);
	$row5 = $result5->fetch_assoc();
	$sqla5 = "INSERT INTO sensorinfo VALUES ('".$row5["feucht"]."', '".$row5["warm"]."', '".$row5["hell"]."', '".$d."', '05:00:00')";
	$conn->query($sqla5);
	
		$sql6 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '06:00:00' OR zeit = '06:00:01' 
	OR zeit = '06:00:02' OR zeit = '06:00:03' OR zeit = '06:00:04' OR zeit = '06:00:05' OR zeit = '06:00:06' LIMIT 1";
	$result6 = $conn->query($sql6);
	$row6 = $result6->fetch_assoc();
	$sqla6 = "INSERT INTO sensorinfo VALUES ('".$row6["feucht"]."', '".$row6["warm"]."', '".$row6["hell"]."', '".$d."', '06:00:00')";
	$conn->query($sqla6);
	
		$sql7 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '07:00:00' OR zeit = '07:00:01' 
	OR zeit = '07:00:02' OR zeit = '07:00:03' OR zeit = '07:00:04' OR zeit = '07:00:05' OR zeit = '07:00:06' LIMIT 1";
	$result7 = $conn->query($sql7);
	$row7 = $result7->fetch_assoc();
	$sqla7 = "INSERT INTO sensorinfo VALUES ('".$row7["feucht"]."', '".$row7["warm"]."', '".$row7["hell"]."', '".$d."', '07:00:00')";
	$conn->query($sqla7);
	
		$sql8 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '08:00:00' OR zeit = '08:00:01' 
	OR zeit = '08:00:02' OR zeit = '08:00:03' OR zeit = '08:00:04' OR zeit = '08:00:05' OR zeit = '08:00:06' LIMIT 1";
	$result8 = $conn->query($sql8);
	$row8 = $result8->fetch_assoc();
	$sqla8 = "INSERT INTO sensorinfo VALUES ('".$row8["feucht"]."', '".$row8["warm"]."', '".$row8["hell"]."', '".$d."', '08:00:00')";
	$conn->query($sqla8);
	
		$sql9 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '09:00:00' OR zeit = '09:00:01' 
	OR zeit = '09:00:02' OR zeit = '09:00:03' OR zeit = '09:00:04' OR zeit = '09:00:05' OR zeit = '09:00:06' LIMIT 1";
	$result9 = $conn->query($sql9);
	$row9 = $result9->fetch_assoc();
	$sqla9 = "INSERT INTO sensorinfo VALUES ('".$row9["feucht"]."', '".$row9["warm"]."', '".$row9["hell"]."', '".$d."', '09:00:00')";
	$conn->query($sqla9);
	
		$sql10 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '10:00:00' OR zeit = '10:00:01' 
	OR zeit = '10:00:02' OR zeit = '10:00:03' OR zeit = '10:00:04' OR zeit = '10:00:05' OR zeit = '10:00:06' LIMIT 1";
	$result10 = $conn->query($sql10);
	$row10 = $result10->fetch_assoc();
	$sqla10 = "INSERT INTO sensorinfo VALUES ('".$row10["feucht"]."', '".$row10["warm"]."', '".$row10["hell"]."', '".$d."', '10:00:00')";
	$conn->query($sqla10);
	
		$sql11 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '11:00:00' OR zeit = '11:00:01' 
	OR zeit = '11:00:02' OR zeit = '11:00:03' OR zeit = '11:00:04' OR zeit = '11:00:05' OR zeit = '11:00:06' LIMIT 1";
	$result11 = $conn->query($sql11);
	$row11 = $result11->fetch_assoc();
	$sqla11 = "INSERT INTO sensorinfo VALUES ('".$row11["feucht"]."', '".$row11["warm"]."', '".$row11["hell"]."', '".$d."', '11:00:00')";
	$conn->query($sqla11);
	
		$sql12 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '12:00:00' OR zeit = '12:00:01' 
	OR zeit = '12:00:02' OR zeit = '12:00:03' OR zeit = '12:00:04' OR zeit = '12:00:05' OR zeit = '12:00:06' LIMIT 1";
	$result12 = $conn->query($sql12);
	$row12 = $result12->fetch_assoc();
	$sqla12 = "INSERT INTO sensorinfo VALUES ('".$row12["feucht"]."', '".$row12["warm"]."', '".$row12["hell"]."', '".$d."', '12:00:00')";
	$conn->query($sqla12);
	
		$sql13 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '13:00:00' OR zeit = '13:00:01' 
	OR zeit = '13:00:02' OR zeit = '13:00:03' OR zeit = '13:00:04' OR zeit = '13:00:05' OR zeit = '13:00:06' LIMIT 1";
	$result13 = $conn->query($sql13);
	$row13 = $result13->fetch_assoc();
	$sqla13 = "INSERT INTO sensorinfo VALUES ('".$row13["feucht"]."', '".$row13["warm"]."', '".$row13["hell"]."', '".$d."', '13:00:00')";
	$conn->query($sqla13);
	
		$sql14 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '14:00:00' OR zeit = '14:00:01' 
	OR zeit = '14:00:02' OR zeit = '14:00:03' OR zeit = '14:00:04' OR zeit = '14:00:05' OR zeit = '14:00:06' LIMIT 1";
	$result14 = $conn->query($sql14);
	$row14 = $result14->fetch_assoc();
	$sqla14 = "INSERT INTO sensorinfo VALUES ('".$row14["feucht"]."', '".$row14["warm"]."', '".$row14["hell"]."', '".$d."', '14:00:00')";
	$conn->query($sqla14);
	
		$sql15 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '15:00:00' OR zeit = '15:00:01' 
	OR zeit = '15:00:02' OR zeit = '15:00:03' OR zeit = '15:00:04' OR zeit = '15:00:05' OR zeit = '15:00:06' LIMIT 1";
	$result15 = $conn->query($sql15);
	$row15 = $result15->fetch_assoc();
	$sqla15 = "INSERT INTO sensorinfo VALUES ('".$row15["feucht"]."', '".$row15["warm"]."', '".$row15["hell"]."', '".$d."', '15:00:00')";
	$conn->query($sqla15);
	
		$sql16 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '16:00:00' OR zeit = '16:00:01' 
	OR zeit = '16:00:02' OR zeit = '16:00:03' OR zeit = '16:00:04' OR zeit = '16:00:05' OR zeit = '16:00:06' LIMIT 1";
	$result16 = $conn->query($sql16);
	$row16 = $result16->fetch_assoc();
	$sqla16 = "INSERT INTO sensorinfo VALUES ('".$row16["feucht"]."', '".$row16["warm"]."', '".$row16["hell"]."', '".$d."', '16:00:00')";
	$conn->query($sqla16);
	
		$sql17 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '17:00:00' OR zeit = '17:00:01' 
	OR zeit = '17:00:02' OR zeit = '17:00:03' OR zeit = '17:00:04' OR zeit = '17:00:05' OR zeit = '17:00:06' LIMIT 1";
	$result17 = $conn->query($sql17);
	$row17 = $result17->fetch_assoc();
	$sqla17 = "INSERT INTO sensorinfo VALUES ('".$row17["feucht"]."', '".$row17["warm"]."', '".$row17["hell"]."', '".$d."', '17:00:00')";
	$conn->query($sqla17);
	
		$sql18 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '18:00:00' OR zeit = '18:00:01' 
	OR zeit = '18:00:02' OR zeit = '18:00:03' OR zeit = '18:00:04' OR zeit = '18:00:05' OR zeit = '18:00:06' LIMIT 1";
	$result18 = $conn->query($sql18);
	$row18 = $result18->fetch_assoc();
	$sqla18 = "INSERT INTO sensorinfo VALUES ('".$row18["feucht"]."', '".$row18["warm"]."', '".$row18["hell"]."', '".$d."', '18:00:00')";
	$conn->query($sqla18);
	
		$sql19 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '19:00:00' OR zeit = '19:00:01' 
	OR zeit = '19:00:02' OR zeit = '19:00:03' OR zeit = '19:00:04' OR zeit = '19:00:05' OR zeit = '19:00:06' LIMIT 1";
	$result19 = $conn->query($sql19);
	$row19 = $result19->fetch_assoc();
	$sqla19 = "INSERT INTO sensorinfo VALUES ('".$row19["feucht"]."', '".$row19["warm"]."', '".$row19["hell"]."', '".$d."', '19:00:00')";
	$conn->query($sqla19);
	
		$sql20 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '20:00:00' OR zeit = '20:00:01' 
	OR zeit = '20:00:02' OR zeit = '20:00:03' OR zeit = '20:00:04' OR zeit = '20:00:05' OR zeit = '20:00:06' LIMIT 1";
	$result20 = $conn->query($sql20);
	$row20 = $result20->fetch_assoc();
	$sqla20 = "INSERT INTO sensorinfo VALUES ('".$row20["feucht"]."', '".$row20["warm"]."', '".$row20["hell"]."', '".$d."', '20:00:00')";
	$conn->query($sqla20);
	
		$sql21 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '21:00:00' OR zeit = '21:00:01' 
	OR zeit = '21:00:02' OR zeit = '21:00:03' OR zeit = '21:00:04' OR zeit = '21:00:05' OR zeit = '21:00:06' LIMIT 1";
	$result21 = $conn->query($sql21);
	$row21 = $result21->fetch_assoc();
	$sqla21 = "INSERT INTO sensorinfo VALUES ('".$row21["feucht"]."', '".$row21["warm"]."', '".$row21["hell"]."', '".$d."', '21:00:00')";
	$conn->query($sqla21);
	
		$sql22 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '22:00:00' OR zeit = '22:00:01' 
	OR zeit = '22:00:02' OR zeit = '22:00:03' OR zeit = '22:00:04' OR zeit = '22:00:05' OR zeit = '22:00:06' LIMIT 1";
	$result22 = $conn->query($sql22);
	$row22 = $result22->fetch_assoc();
	$sqla22 = "INSERT INTO sensorinfo VALUES ('".$row22["feucht"]."', '".$row22["warm"]."', '".$row22["hell"]."', '".$d."', '22:00:00')";
	$conn->query($sqla22);
	
		$sql23 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '23:00:00' OR zeit = '23:00:01' 
	OR zeit = '23:00:02' OR zeit = '23:00:03' OR zeit = '23:00:04' OR zeit = '23:00:05' OR zeit = '23:00:06' LIMIT 1";
	$result23 = $conn->query($sql23);
	$row23 = $result23->fetch_assoc();
	$sqla23 = "INSERT INTO sensorinfo VALUES ('".$row23["feucht"]."', '".$row23["warm"]."', '".$row23["hell"]."', '".$d."', '23:00:00')";
	$conn->query($sqla23);
	
		$sql24 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' AND zeit = '24:00:00' OR zeit = '24:00:01' 
	OR zeit = '24:00:02' OR zeit = '24:00:03' OR zeit = '24:00:04' OR zeit = '24:00:05' OR zeit = '24:00:06' LIMIT 1";
	$result24 = $conn->query($sql24);
	$row24 = $result24->fetch_assoc();
	$sqla24 = "INSERT INTO sensorinfo VALUES ('".$row24["feucht"]."', '".$row24["warm"]."', '".$row24["hell"]."', '".$d."', '24:00:00')";
	$conn->query($sqla24);
?>