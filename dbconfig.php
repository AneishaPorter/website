<?php

$host = 'localhost';
$db = 'PitStop';
$user = 'teamProject';
$pass = 'pitstop';

$conn = new mysqli('localhost', 'PitStop', 'teamProject', 'pitstop');

	if($conn->connect_error){
			die("<h3 style='color:red;'>Connection failed : " .$conn->connect_error."</h3>");
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content = "width= device - width, initial scale = 1.0">
	<title> Team Project Assignment </title>
</head>
    <body>
    </body>
</html>