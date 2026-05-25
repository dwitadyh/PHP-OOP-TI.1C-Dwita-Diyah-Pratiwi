<html>
<body>

<?php
class Mahasiswa {
  public $name;
  public $nim;

  function __construct($name, $nim) {
    $this->name = $name;
    $this->nim = $nim;
  }
  function get_details() {
    echo "Name: " . $this->name . ". NIM: " . $this->nim .".<br>";
  }
}

$dwita = new Mahasiswa('Dwita', '250102073');
$dwita->get_details();

$salma = new Mahasiswa('Salma', '250202070');
$salma->get_details();
?>
 
</body>
</html>
