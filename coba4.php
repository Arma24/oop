<?php 

class Mobil{
	private $warna;
	protected $pabrikan;

	public function __contruct($wrn){
		$this->warna = $wrn;
		$this->pabrikan = 'Honda';
	}

	public function getWarna(){
		return $this->warna;
	}
}

$a = new Mobil('Kuning');
echo $this->getWarna();

?>