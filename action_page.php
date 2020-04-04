<?php
$host="fdb22.awardspace.net";
$user="3380917_swginfo";
$password="1a2b3c4d5e6f";
$dbname="3380917_swginfo";
$conn=mysqli_connect($host,$user,$password,$dbname);
if(mysqli_connect_errno())
{
	//echo "Connection failed";
	die("Connection failed! " .mysql_connect_error());

}
?>
<html>
<head>
	<title>Swg_signup</title>
	<style type="text/css">
		p{
			position: absolute;
			top: 35%;
			left: 35%;
		}
	</style>
</head>
<body>
	<?php
	if (isset($_POST['submit'])) 
	{
		$name=$_POST['name'];
		$password=$_POST['pwd'];
		$gender=$_POST['gen'];
		$member=$_POST['team'];
		if(!empty($member))
                {
                        	$teams=implode(",", $member);
                }
		$study_year=$_POST['study'];
		if(empty($name)||empty($password)||empty($gender)||empty($member)||empty($study_year))
		{
			echo'<script>alert("Please fill the form completely!")</script>';
		}
		else{
			$sql="INSERT INTO swg_info(Name,Password,Gender,Teams,Year_of_study)"."VALUES('$name','$password','$gender','$teams','$study_year')";
			$res=mysqli_query($conn,$sql);
			if(!$res)
			{
				die("Query Failed!".mysqli_error($conn));
			}
			else
			{
				echo "<p > <font size= '40px'>Data inserted successfully!</p>";
			}
		}
	}
	else
	{
		echo'<script>alert("Form not submitted Properly!")</script>';
	}
	?>
</body>
</html>
