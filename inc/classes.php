<?php

class Team 
{
	public $sport;
	public $name;
	public $logo;
	public $color;
	public $home;
	public $city;
	public $champ;
	public $favPlayer;

	function __construct($sport, $name, $logo, $color, $home, $city, $champ, $favPlayer){
		$this->sport = $sport;
		$this->name = $name;
		$this->logo = $logo;
		$this->home = $home;
		$this->color = $color;
		$this->city = $city;
		$this->champ = $champ;
		$this->favPlayer = $favPlayer;
	}

	public function getInfo(){
		return "<span class=\"teams__sport\">" . $this->sport . ":</span><img class=\"teams__logo\" style=\"background-color:" . $this->color . ";\" src=\"image/" . $this->logo . "\" /><span class=\"teams__name\">" . $this->city . " " . $this->name . "</span><p class=\"teams__info\">" . $this->home . " is where they play. They Have won " . ($this->champ == 1 ? $this->champ . " championship" : $this->champ . " championships") . ". My favorite player is " . $this->favPlayer . ".</p>";
	}
}

?>