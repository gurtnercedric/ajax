<?php

class Auto{
	private $name;
	private $farbe;
	private $kraftstoff;
	private $bauart;
	public $Counter = 0;
	private $daten;
	private $antwort;
	private $code;
	
	function __construct() {
		$this->betankungen = 1;
		$this->daten = true;
		$this->antwort = 'Alles ok!';
		$this->code = 200;
	}
	
	
	public function setName($ks){
		$this->name = $ks;
	}
	
	public function setFarbe($ks){
		$this->farbe = $ks;
	}
	
	public function setKraftstoff($ks){
		$this->kraftstoff = $ks;
	}
	
	public function setBauart($ks){
		$this->bauart = $ks;
	}
	
	public function getName(){
		echo $this->name;
	}
	
	public function zeigeAuto() {
	if($this->daten) {	
		$this->daten = array(
				'status' => true,
				'antwort' => $this->antwort,
				'name' => $this->name,
				'farbe' => $this->farbe,
				'bauart' => $this->bauart,
				'kraftstoff' => $this->kraftstoff
		);
	} else{
		$this->code = 401;
		$this->antwort = 'Nichts OK!';
		$this->daten = array(
		'status' => false, 
		'antwort' => $this->antwort
		);
	}
	echo json_encode($this->daten, $this->code);
	}
	
	public function tankDeckelOeffnen($ks){
		$_SESSION['betankungen']++;
		$this->Counter++;
	}
}

?>