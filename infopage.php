<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
	<style type="text/css">
		h1{
			text-align: center;
			font-size: 60px;
			font-family: monospace;
			color: #FF6347;
		}
		table {
			border-collapse: collapse;
			width: 100%;
			color: #d96459;
			font-size: 25px;
			text-align: left;
		}
		th{
			background-color: #588c7e;
			color: white;
		}
		tr:nth-child(even){
			background-color: #f2f2f2;
		}
		p{
			background-color: #588c7e;
			color: white;
			font-size: 40px;
		}
	</style>
</head>
<body>
	<h1>SWG INFO</h1>
<table>
	<tr>
		<th>Name</th>
		<th>Password</th>
		<th>Gender</th>
		<th>Team(s)</th>
		<th>Year of Study</th>
	</tr>
<?php
$host="fdb22.awardspace.net";
$user="3380917_swginfo";
$password="1a2b3c4d5e6f";
$dbname="3380917_swginfo";
$conn=mysqli_connect($host,$user,$password,$dbname);
if($conn->connect_error)
{
	//echo "Connection failed";
	die("Connection failed! " .$conn->connect_error);

}
$sql = "SELECT Name,Password,Gender,Teams,Year_of_study from swg_info";
$res = $conn->query($sql);
if ($res->num_rows > 0) {
while ($row = $res-> fetch_assoc()) {
	echo "<tr><td>".$row["Name"]."</td><td>".$row["Password"]."</td><td>".$row["Gender"]."</td><td>".$row["Teams"]."</td><td>".$row["Year_of_study"]."</td></tr>";
}
	echo "</table>";
}
else{
	echo "<p>No data inseted yet!</p>";
}
$conn-> close();
	?>

</table>
</body>
</html>