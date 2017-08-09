<?php 
class Mobil{

    public $roda =  4;
    public $kecepatan = 0;
    public $warna = 'putih';
    public $gigi = 0;

    public function tancapGas($p=0){
    	$this->kecepatan = $this->kecepatan + $p;
    }

    public function ngeRem($q=0){
    	$this->kecepatan = $this->kecepatan - $q;
    }

    public function ubahGigi($r=0){
    	$this->gigi = $r;
    }

    public function getSpeed(){
    	return $this->kecepatan;
    }

    public function getGigi(){
    	return $this->gigi;
    }

}
    $a = new Mobil;
    $a->tancapGas(30);
    echo 'Kecepatan : '.$a->getSpeed().'km/jam';
    $a->ubahGigi(3);
    echo '<br>';
    echo 'Gigi : '.$a->getGigi();
    echo '<br>';
    $a->ngeRem(10);
    echo 'Kecepatan : '.$a->getSpeed().'km/jam';

?>