<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Monoronjon</title>
    <link rel="stylesheet" href="task1.css">
  </head>
  <body class="card1">
<form action="task3.php" method="POST">

 <?php
class Person {
    private $name;
    private $email;

    public function setName( $name ) {
        $this->name = $name;
    }

    public function setEmail( $email ) {
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}
$person = new Person();
echo "Task-02: " . "<br> <br>";
$person->setName( 'Monoronjon Dutta' );
$person->setEmail( 'monoronjon2345@gmail.com' );
echo 'Name: ' . $person->getName() . '<br>';
echo 'Email: ' . $person->getEmail() . '<br> <br> <br> <br>';
?>
</form>

</div>
</body>
</html>
