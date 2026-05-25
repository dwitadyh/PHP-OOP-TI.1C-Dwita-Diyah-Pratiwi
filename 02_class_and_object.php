<!DOCTYPE html>
<html>
<body>

<?php
class Mahasiswa {
  public $nama;
  public $kelas;

  function set_details($nama, $kelas) {
    $this->nama = $nama;
    $this->kelas = $kelas;
  }
  function get_details() {
    echo "Nama: " . $this->nama . ". Kelas: " . $this->kelas .".<br>";
  }
}

$dwita = new Mahasiswa();
$dwita->set_details('Dwita', 'TI.1C');
$dwita->get_details();
?>
 
</body>
</html>
