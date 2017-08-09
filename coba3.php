<?php

class Aku{
	var $data;

	function dataDiri(){
		return "Berikut adalah data diri saya";
	}
}

$nama = new Aku();
$kelas = new Aku();
$sekolah = new Aku();

echo $nama->data = "Armaningtyas Utami";
echo "<br>";
echo $kelas->data = "XII RPL 3";
echo "<br>";
echo $sekolah->data = "SMK Telkom Malang";

?>