<?php

function data_sanitization($data)
{
	$data= trim($data);
	$data= stripcslashes($data);
	$data= htmlspecialchars($data);
	return $data;
}

$un= data_sanitization($_POST["username"]);
$pw= data_sanitization($_POST["password"]);

echo "<h3>Your Username is: $un</h3>";
echo "<h3>Your Password is: $pw</h3>";

?>