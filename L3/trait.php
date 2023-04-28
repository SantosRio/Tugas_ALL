<?php

trait Fakultas {

// Boleh juga ada properti

public function setFakultas (string $a) { return $a;

} -}

sifat Prodi {

// Boleh juga ada properti

fungsi publik setProdi (string $b) { return $b;

}

}

class Mahasiswa {

use Fakultas, Prodi; public string $nama;

fungsi publik setNama (string $c) {

$ini->nama= $c;

}

}

$mhsw = new Mahasiswa();

$mhsw->setNama ("Faiza"); echo $mhsw->setFakultas ("FST"). ""

. $mhsw->setProdi ("Sistem Informasi")

$mhsw->nama;