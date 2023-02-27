<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="task1.css">
    <title>Monoronjon</title>
  </head>
  <body class="card1" >
 <?php
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    $name = $_POST["name"];
    $email = $_POST["email"];

    require_once 'task2.php';
    $person = new Person();
    echo "Task-03: " . "<br>";
    $person->setName( $name );
    $person->setEmail( $email );
    echo "<p>Name: $name </p>";
    echo "<p>Email: $email.</p>";

} else {
    echo "Error: invalid form submission method";
}
?>

  </body>
</html>
</div>













