<?php



    $host = "localhost";
    $dbname = "****";
    $username = "****";
    $password = "****";

$conn = new mysqli($host, $username, $password, $dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else { echo "Connected to mysql database. <br>"; }




$sql = "SELECT feucht, warm, hell, datum, zeit FROM sensorinfo";

$result = $conn->query($sql);

echo "<center>";



if ($result->num_rows > 0) {


    while($row = $result->fetch_assoc()) {
        echo "Humidity: ".$row["feucht"]." Temperature:".$row["warm"]." Brightness:".$row["hell"]." Date:".$row["datum"]." Time:".$row["zeit"];
    }
} else {
    echo "0 results";
}

echo "</center>";

$conn->close();



?>
