<?php
$host = "localhost";
$dbname = "****";
$username = "****";
$password = "****";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else { echo "Connected to mysql database."; }

date_default_timezone_set('Europe/Amsterdam');  //other timezones https://www.php.net/manual/en/timezones.asia.php
$d = date("Y-m-d");
$t = date("H:i:s");

$sql1 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '01:00:00'";

$conn->query($sql1);

$result1 = $conn->query($sql1);

$row1 = $result1->fetch_assoc();

$sql2 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '02:00:00'";

$conn->query($sql2);

$result2 = $conn->query($sql2);

$row2 = $result2->fetch_assoc();

$sql3 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '03:00:00'";

$conn->query($sql3);

$result3 = $conn->query($sql3);

$row3 = $result3->fetch_assoc();

$sql4 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '04:00:00'";

$conn->query($sql4);

$result4 = $conn->query($sql4);

$row4 = $result4->fetch_assoc();

$sql5 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '05:00:00'";

$conn->query($sql5);

$result5 = $conn->query($sql5);

$row5 = $result5->fetch_assoc();

$sql6 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '06:00:00'";

$conn->query($sql6);

$result6 = $conn->query($sql6);

$row6 = $result6->fetch_assoc();

$sql7 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '07:00:00'";

$conn->query($sql7);

$result7 = $conn->query($sql7);

$row7 = $result7->fetch_assoc();

$sql8 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '08:00:00'";

$conn->query($sql8);

$result8 = $conn->query($sql8);

$row8 = $result8->fetch_assoc();

$sql9 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '09:00:00'";

$conn->query($sql9);

$result9 = $conn->query($sql9);

$row9 = $result9->fetch_assoc();

$sql10 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '10:00:00'";

$conn->query($sql10);

$result10 = $conn->query($sql10);

$row10 = $result10->fetch_assoc();

$sql11 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '11:00:00'";

$conn->query($sql11);

$result11 = $conn->query($sql11);

$row11 = $result11->fetch_assoc();

$sql12 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '12:00:00'";

$conn->query($sql12);

$result12 = $conn->query($sql12);

$row12 = $result12->fetch_assoc();

$sql13 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '13:00:00'";

$conn->query($sql13);

$result13 = $conn->query($sql13);

$row13 = $result13->fetch_assoc();

$sql14 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '14:00:00'";

$conn->query($sql14);

$result14 = $conn->query($sql14);

$row14 = $result14->fetch_assoc();

$sql15 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '15:00:00'";

$conn->query($sql15);

$result15 = $conn->query($sql15);

$row15 = $result15->fetch_assoc();

$sql16 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '16:00:00'";

$conn->query($sql16);

$result16 = $conn->query($sql16);

$row16 = $result16->fetch_assoc();

$sql17 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '17:00:00'";

$conn->query($sql17);

$result17 = $conn->query($sql17);

$row17 = $result17->fetch_assoc();

$sql18 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '18:00:00'";

$conn->query($sql18);

$result18 = $conn->query($sql18);

$row18 = $result18->fetch_assoc();

$sql19 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '19:00:00'";

$conn->query($sql19);

$result19 = $conn->query($sql19);

$row19 = $result19->fetch_assoc();

$sql20 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '20:00:00'";

$conn->query($sql20);

$result20 = $conn->query($sql20);

$row20 = $result20->fetch_assoc();

$sql21 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '21:00:00'";

$conn->query($sql21);

$result21 = $conn->query($sql21);

$row21 = $result21->fetch_assoc();

$sql22 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '22:00:00'";

$conn->query($sql22);

$result22 = $conn->query($sql22);

$row22 = $result22->fetch_assoc();

$sql23 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '23:00:00'";

$conn->query($sql23);

$result23 = $conn->query($sql23);

$row23 = $result23->fetch_assoc();

$sql24 = "SELECT * FROM sensorinfo WHERE datum = '".$d."' and zeit = '24:00:00'";

$conn->query($sql24);

$result24 = $conn->query($sql24);

$row24 = $result24->fetch_assoc();

echo "<title>HUMITEMP</title>";

echo "<header><h1>HUMITEMP</h1></header>";

echo "<center>";

//while($row = $result->fetch_assoc()) {
//	echo "<br>Date: ".$row["datum"]." |   Time: ".$row["zeit"]."   -----   Humidity: ".$row["feucht"]."---   Temperature: ".$row["warm"]."---   Brightness: ".$row["hell"];
//}

//echo $row["feucht"].$row["warm"].$row["hell"];

echo '<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">';
echo "google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {";
	  
echo "var data = google.visualization.arrayToDataTable([";
echo "['Time', 'Humidity', 'Temperature', 'Brightness'],";
echo "['";echo $row1["zeit"];echo"',";echo $row1["feucht"];echo",";echo $row1["warm"];echo",";echo $row1["hell"];echo"],";
echo "['";echo $row2["zeit"];echo"',";echo $row2["feucht"];echo",";echo $row2["warm"];echo",";echo $row2["hell"];echo"],";
echo "['";echo $row3["zeit"];echo"',";echo $row3["feucht"];echo",";echo $row3["warm"];echo",";echo $row3["hell"];echo"],";
echo "['";echo $row4["zeit"];echo"',";echo $row4["feucht"];echo",";echo $row4["warm"];echo",";echo $row4["hell"];echo"],";
echo "['";echo $row5["zeit"];echo"',";echo $row5["feucht"];echo",";echo $row5["warm"];echo",";echo $row5["hell"];echo"],";
echo "['";echo $row6["zeit"];echo"',";echo $row6["feucht"];echo",";echo $row6["warm"];echo",";echo $row6["hell"];echo"],";
echo "['";echo $row7["zeit"];echo"',";echo $row7["feucht"];echo",";echo $row7["warm"];echo",";echo $row7["hell"];echo"],";
echo "['";echo $row8["zeit"];echo"',";echo $row8["feucht"];echo",";echo $row8["warm"];echo",";echo $row8["hell"];echo"],";
echo "['";echo $row9["zeit"];echo"',";echo $row9["feucht"];echo",";echo $row9["warm"];echo",";echo $row9["hell"];echo"],";
echo "['";echo $row10["zeit"];echo"',";echo $row10["feucht"];echo",";echo $row10["warm"];echo",";echo $row10["hell"];echo"],";
echo "['";echo $row11["zeit"];echo"',";echo $row11["feucht"];echo",";echo $row11["warm"];echo",";echo $row11["hell"];echo"],";
echo "['";echo $row12["zeit"];echo"',";echo $row12["feucht"];echo",";echo $row12["warm"];echo",";echo $row12["hell"];echo"],";
echo "['";echo $row13["zeit"];echo"',";echo $row13["feucht"];echo",";echo $row13["warm"];echo",";echo $row13["hell"];echo"],";
echo "['";echo $row14["zeit"];echo"',";echo $row14["feucht"];echo",";echo $row14["warm"];echo",";echo $row14["hell"];echo"],";
echo "['";echo $row15["zeit"];echo"',";echo $row15["feucht"];echo",";echo $row15["warm"];echo",";echo $row15["hell"];echo"],";
echo "['";echo $row16["zeit"];echo"',";echo $row16["feucht"];echo",";echo $row16["warm"];echo",";echo $row16["hell"];echo"],";
echo "['";echo $row17["zeit"];echo"',";echo $row17["feucht"];echo",";echo $row17["warm"];echo",";echo $row17["hell"];echo"],";
echo "['";echo $row18["zeit"];echo"',";echo $row18["feucht"];echo",";echo $row18["warm"];echo",";echo $row18["hell"];echo"],";
echo "['";echo $row19["zeit"];echo"',";echo $row19["feucht"];echo",";echo $row19["warm"];echo",";echo $row19["hell"];echo"],";
echo "['";echo $row20["zeit"];echo"',";echo $row20["feucht"];echo",";echo $row20["warm"];echo",";echo $row20["hell"];echo"],";
echo "['";echo $row21["zeit"];echo"',";echo $row21["feucht"];echo",";echo $row21["warm"];echo",";echo $row21["hell"];echo"],";
echo "['";echo $row22["zeit"];echo"',";echo $row22["feucht"];echo",";echo $row22["warm"];echo",";echo $row22["hell"];echo"],";
echo "['";echo $row23["zeit"];echo"',";echo $row23["feucht"];echo",";echo $row23["warm"];echo",";echo $row23["hell"];echo"],";
echo "['";echo $row24["zeit"];echo"',";echo $row24["feucht"];echo",";echo $row24["warm"];echo",";echo $row24["hell"];echo"]]);";
		          //['2005',  1170,      460],
          //"['2006',  660,       1120],
          //['2007',  1030,      540]


echo "var options = {
          title: 'HUMITEMP-curve',
          curveType: ";
echo "'function'";
echo "		  ,
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>";
echo '<div id="curve_chart" style="width: 900px; height: 500px"></div>';
echo "</body>";
echo "</center>";

echo $row20["feucht"];

$conn->close();

?>