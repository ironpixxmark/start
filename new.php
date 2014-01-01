<?php 
session_start();
require "config.php";
$user_id = $_SESSION['user_id'];

$sql = "SELECT id FROM project WHERE user_id='$user_id'";
$result = mysql_query($sql);

//print_r($result);

echo $count = mysql_num_rows($result);

while ($row = mysql_fetch_array($result)) {
	
	for ($i=0; $i < $count; $i++) { 
		echo $proj_id = $row['id'];
	}
	
}


// while ($row = mysql_fetch_array($result)) {
// 	echo $proj_id = $row['id'];
// 	echo "<br>";

// 	$sql = "SELECT user_id FROM backer_table WHERE proj_id='$proj_id'";

// 	 $result = mysql_query($sql);

// 	while ($rows = mysql_fetch_array($result)) {
// 	 echo $user_id = $rows['user_id'];
// 	 echo "<br>";

// 		$sql = "SELECT * FROM profile WHERE user_id='$user_id'";

// 		$result = mysql_query($sql);

// 		while($row = mysql_fetch_array($result)) {

// 			echo $row['name'];
// 			echo $row['location'];
// 			echo $row['fb'];
// 			echo $row['twitter'];
// 		}

// 	}
// }
	

?>