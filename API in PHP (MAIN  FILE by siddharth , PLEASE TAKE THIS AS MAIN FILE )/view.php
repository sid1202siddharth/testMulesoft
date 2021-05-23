<?php

$api_url = 'http://localhost/api/api.php';

$json_data = file_get_contents($api_url);

$response_data = json_decode($json_data);
foreach ($response_data as $user) {
	echo "name: ".$user->name;
	echo "<br />";
	echo "email: ".$user->email;
  echo "<br />";
  echo "Roll No: ".$user->roll;
	echo "<br /> <br />";
}

?>