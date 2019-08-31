

<!--<html>
<head>
	<title>Result</title>
</head>
<body>
	<table>
		<tr>
			<th>Name</th>
			<th>Total</th>
		</tr>-->

<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "login";

session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql ="SELECT ID,math from dilini order by desc";
$result = $conn->query($sql);
//$rowcount = mysqli_num_rows($result);
$rows=$result->fetch_assoc();

/*if($result ->num_rows>0){
	while($row=$result->fetch_assoc()){*/
		//echo "<tr><td>".$rows['ID']."</td><td>".$rows['math']."</td><tr>";
		
	//}
	//echo "</table>";
/*
else{
	echo "0 result";
}*/

$conn->close();
?>
	<!--</table>

</body>
</html>-->



