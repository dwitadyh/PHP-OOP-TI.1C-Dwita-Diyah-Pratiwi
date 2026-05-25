<!DOCTYPE html>
<html>
<body>

<?php
class Mahasiswa {
  public $nama;
  public $nim;
  public $kelas;

  function __construct($nama, $nim, $kelas) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->kelas = $kelas;
  }
  function __destruct() {
    echo "Nama: " . $this->nama . ". NIM: " . $this->nim . ". Kelas: " . $this->kelas . ".<br>";
  }
}

$dwita = new Mahasiswa('Dwita', '250102073', 'TI.1C');
?>
 
</body>
</html>
