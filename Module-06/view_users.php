<?php
// Read user data from CSV file and display in a table
$fp = fopen('users.csv', 'r');
echo "<table>";
echo "<tr><th>Name</th><th>Email</th><th>Profile Picture</th></tr>";
while (($user_data = fgetcsv($fp)) !== false) {
	echo "<tr>";
	echo "<td>{$user_data[0]}</td>";
	echo "<td>{$user_data[1]}</td>";
	echo "<td><img src='uploads/{$user_data[2]}' height='50'></td>";
	echo "</tr>";
}
echo "</table>";
fclose($fp);
