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
    

		$val = $_POST['sendval'];
        $val2 = $_POST['sendval2'];
		$val3 = $_POST['sendval3'];

	        $sql = "INSERT INTO sensorinfo (feucht, warm, hell, datum, zeit) VALUES ('".$val."','".$val2."','".$val3."','".$d."','".$t."')";
 


		if ($conn->query($sql) === TRUE) {
		    echo "Values inserted in MySQL database table.";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

$conn->close();



?>
