<?php

class Person{

	private $firstname;
	private $lastname;
	private $photo;
	private $sex;
	private $size;
	private $corpulence;
	private $hairColor;
	private $tatoo;
	private $idONG;

	public function Person($firstname, $lastname, $photo, $sex, $size, $corpulence, $hairColor, $tatoo, $idONG){
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->photo = $photo;
		$this->sex = $sex;
		$this->size = $size;
		$this->corpulence = $corpulence;
		$this->hairColor = $hairColor;
		$this->tatoo = $tatoo;
		$this->idONG = $idONG;
	}

	public function getFirstname(){return $this.firstname;}
	public function getLastname(){return $this.lastname;}
	public function getPhoto(){return $this.photo;}
	public function getSex(){return $this.sex;}
	public function getSize(){return $this.size;}
	public function getCorpulence(){return $this.corpulence;}
	public function getHairColor(){return $this.hairColor;}
	public function getTatoo(){return $this.tatoo;}
	public function getidONG(){return $this.idONG;}

}

?> 