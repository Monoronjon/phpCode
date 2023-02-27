<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Monoronjon</title>
  </head>
  <body>
    <div style="margin-top: 10%; ;margin-right:70%;">
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
echo "Task-02: " . "<br>";
$person->setName( 'Monoronjon Dutta' );
$person->setEmail( 'monoronjon2345@gmail.com' );
echo 'Name: ' . $person->getName() . '<br>';
echo 'Email: ' . $person->getEmail() . '<br> <br> <br> <br>';

?>

</div>
</body>
</html>
