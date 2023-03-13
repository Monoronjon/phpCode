<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title>Registration Successful</title>
</head>
<body>
	<h2>Registration Successful</h2>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Profile Picture</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$file = fopen('users.csv', 'r');

				while (($data = fgetcsv($file)) !== false) {
					echo '<tr>';
					echo '<td>' . $data[0] . '</td>';
					echo '<td>' . $data[1] . '</td>';
					echo "<td><img src='uploads/{$data[2]}' height='50'></td>";
					echo '</tr>';
				}

				fclose($file);
			?>
		</tbody>
	</table>
</body>
</html>