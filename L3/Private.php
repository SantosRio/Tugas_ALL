<?php

class Mahasiswa {
    private string $nim;
    private string $nama;
    public function setNim(string $a) {
        $this->nim = $a
    }
    public function setNim(string $nama) {
        $this->nama = $nama
    }
    public function getNim(){
        return $this->nim;
    }

}
$mhsw = new Mahasiswa;
$mhsw = setNim("2207101051");
$mhsw = setNama("Rio Budi Santoso");

echo "<p>" . $mhsw->getNim() . "<p>";
echo "<p>" . $mhsw->nama() . "<p>";