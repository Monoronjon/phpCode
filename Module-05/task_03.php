<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Monoronjon</title>
  </head>
  <body  style="margin-left: 40%;margin-top: 10%; ">
  <?php
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
    // Retrieve the name and email from the form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Create a new instance of the Person class and set the name and email properties
    require_once 'task_2.php';

    $person = new Person();
    $person->setName( $name );
    $person->setEmail( $email );

    // Display the name and email properties on the webpage
    echo "Task-03: " . "<br>";
    echo "Name: " . $person->getName() . "<br>";
    echo "Email: " . $person->getEmail() . "<br>";

} else {
    echo "Error: invalid form submission method";
}
?>

  </body>
</html>




















